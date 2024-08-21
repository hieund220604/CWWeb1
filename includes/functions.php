<?php

// General query execution function
function query($pdo, $sql, $parameters = []) {
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}


function deleteUser($userId) {
    // Code to delete user from the database
    // Replace this with your actual database query

    // Example query using PDO
    include 'includes/connection.php';
    $stmt = $conn->prepare('DELETE FROM account WHERE user_id = :userId');
    $stmt->bindParam(':userId', $userId);
    $stmt->execute();

    // Check if the user was successfully deleted
    if ($stmt->rowCount() > 0) {
        return true; // User deleted successfully
    } else {
        return false; // User not found or deletion failed
    }
}

// Fetch multiple records
function fetch_all($pdo, $sql, $parameters = []) {
    return query($pdo, $sql, $parameters)->fetchAll(PDO::FETCH_ASSOC);
}

// Fetch a single record
function fetch_one($pdo, $sql, $parameters = []) {
    return query($pdo, $sql, $parameters)->fetch(PDO::FETCH_ASSOC);
}

// Insert data into the database
function insert_data($pdo, $sql, $parameters = []) {
    query($pdo, $sql, $parameters);
}

// Like or Unlike a question
function toggle_like($pdo, $user_id, $question_id) {
    $sql = 'SELECT * FROM likes WHERE user_id = :user_id AND question_id = :question_id';
    $like = fetch_one($pdo, $sql, ['user_id' => $user_id, 'question_id' => $question_id]);

    if ($like) {
        // Unlike (remove the like)
        $sql = 'DELETE FROM likes WHERE user_id = :user_id AND question_id = :question_id';
    } else {
        // Like (add the like)
        $sql = 'INSERT INTO likes (user_id, question_id) VALUES (:user_id, :question_id)';
    }

    query($pdo, $sql, ['user_id' => $user_id, 'question_id' => $question_id]);
}

// Get total likes for a question
function get_total_likes($pdo, $question_id) {
    $sql = 'SELECT COUNT(*) AS total_likes FROM likes WHERE question_id = :question_id';
    return fetch_one($pdo, $sql, ['question_id' => $question_id])['total_likes'];
}

// Check if a user has liked a question
function has_user_liked($pdo, $user_id, $question_id) {
    $sql = 'SELECT * FROM likes WHERE user_id = :user_id AND question_id = :question_id';
    return fetch_one($pdo, $sql, ['user_id' => $user_id, 'question_id' => $question_id]) ? true : false;
}

// Get questions with comments count
function get_questions($pdo) {
    $sql = 'SELECT 
                q.user_id,
                a.fullname as uploader_name,
                q.question,
                q.question_media,
                q.question_id,
                q.module_id,
                m.module_name,      -- Ensure this field is included
                q.date,             -- Ensure this field is included
                COUNT(l.id) AS total_likes   -- Calculate total likes
            FROM 
                question q
            JOIN 
                account a ON q.user_id = a.user_id
            JOIN 
                module m ON q.module_id = m.module_id  -- Join with module table to get module_name
            LEFT JOIN 
                likes l ON q.question_id = l.question_id  -- Left join with likes to count likes
            GROUP BY 
                q.question_id, q.user_id, a.fullname, q.question, q.question_media, q.module_id, m.module_name, q.date
            ORDER BY 
                q.date DESC;
';
    return fetch_all($pdo, $sql);
}

// Get all modules
function get_modules($pdo) {
    $sql = 'SELECT * FROM module';
    return fetch_all($pdo, $sql);
}

// Add a new question
function add_question($conn, $question, $module_id, $user_id, $file_name) {
    $upload_dir = './uploads/'; 

    // Check if a file was uploaded
    if (!empty($_FILES['question_media']['name'])) {
        // Create the uploads directory if it doesn't exist
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Create a unique file name to avoid overwriting existing files
        $filename = uniqid() . '_' . basename($_FILES['question_media']['name']);
        $file_path = $upload_dir . $filename;

        // Move the file to the uploads directory
        if (move_uploaded_file($_FILES['question_media']['tmp_name'], $file_path)) {
            $file_name = $filename; // Save the path to the file
        } else {
            // Handle the error if the file upload fails
            $file_name = ''; // Set to an empty string or handle as needed
        }
    } else {
        $file_name = ''; // No file was uploaded
    }

    // Insert the question into the database with the file path
    $sql = "INSERT INTO question (question, module_id, user_id, question_media, date) 
            VALUES (:question, :module_id, :user_id, :question_media, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':question' => $question,
        ':module_id' => $module_id,
        ':user_id' => $user_id,
        ':question_media' => $file_name
    ]);
}

// Update image function
function update_image($file_input_name, $target_dir = "./updates/") {
    $target_file = $target_dir . basename($_FILES[$file_input_name]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate image
    $check = getimagesize($_FILES[$file_input_name]["tmp_name"]);
    if ($check === false) return false;
    if (file_exists($target_file)) return false;
    if ($_FILES[$file_input_name]["size"] > 5000000) return false;
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) return false;

    // Attempt to move the uploaded file
    if (move_uploaded_file($_FILES[$file_input_name]["tmp_name"], $target_file)) {
        return $target_file;
    }
    
    return false;
}
