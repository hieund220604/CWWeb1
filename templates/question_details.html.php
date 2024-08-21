<div class="min-h-screen bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/4 min-h-screen text-white bg-gray-800">
            <aside class="h-full">
                <div class="px-3 py-4">
                    <ul class="space-y-4">
                        <li class="text-xl font-bold text-center">
                            Hello, <?= htmlspecialchars($_SESSION['fullname']) ?>
                        </li>
                        <li>
                            <a href="questions.php" class="flex items-center p-2 hover:bg-gray-700">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                                </svg>
                                <span class="ml-3">Questions</span>
                            </a>
                        </li>
                        <li>
                            <a href="users.php" class="flex items-center p-2 hover:bg-gray-700">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                                </svg>
                                <span class="ml-3">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="modules.php" class="flex items-center p-2 hover:bg-gray-700">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="ml-3">Modules</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php" class="flex items-center p-2 hover:bg-gray-700">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                                </svg>
                                <span class="ml-3">Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>

    <div class="w-3/4 px-3 text-black ">
        <div class="flex-1 p-8">
            <h1 class="mb-6 text-2xl font-semibold">Question Details</h1>

            <!-- Display Question Details -->
            <div class="mb-6">
                <h2 class="text-xl font-bold">Title: <?= htmlspecialchars($question['question']) ?></h2>
                <p><strong>Module:</strong> <?= htmlspecialchars($question['module_name']) ?></p>
                <p><strong>Uploader:</strong> <?= htmlspecialchars($question['uploader_name']) ?></p>
                <p><strong>Date:</strong> <?= htmlspecialchars($question['date']) ?></p>
                <?php if ($question['question_media']): ?>
                    <div class="mt-2">
                        <img src="uploads/<?= htmlspecialchars($question['question_media']) ?>" alt="Question Image" class="max-w-xl">
                    </div>
                <?php endif; ?>
            </div>

            <!-- Display Likes -->
            <div class="mb-6">
                <p class="flex items-center">
                    <!-- Total Likes with SVG Icon -->
                    <svg class="w-5 h-5 mr-2 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    <strong><?= $total_likes ?></strong>
                </p>
                <form action="question.php?id=<?= $question_id ?>" method="post" class="mt-2">
                    <button type="submit" name="like" class="flex items-center px-4 py-2 font-bold text-white <?= $user_liked ? 'bg-red-500 hover:bg-red-700' : 'bg-blue-500 hover:bg-blue-700' ?> rounded focus:outline-none focus:shadow-outline">
                        <!-- Like/Unlike Button with SVG Icon -->
                        <svg class="w-5 h-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <?php if ($user_liked): ?>
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            <?php else: ?>
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                            <?php endif; ?>
                        </svg>
                        <?= $user_liked ? 'Unlike' : 'Like' ?>
                    </button>
                </form>
            </div>

            <!-- Display Comments (Answers) -->
            <h2 class="text-xl font-semibold">Answer</h2>
            <ul class="mb-6">
            <ul class="mb-6">
                <?php foreach ($comments as $comment): ?>
                    <li class="py-2 border-b">
                        <div class="flex justify-between">
                            <div id="comment-<?= $comment['answer_id'] ?>">
                                <p><strong><?= htmlspecialchars($comment['commenter_name']) ?>:</strong></p>
                                <p id="comment-text-<?= $comment['answer_id'] ?>"><?= htmlspecialchars($comment['answer_text']) ?></p>
                                <p class="text-xs text-gray-500"><?= htmlspecialchars($comment['date']) ?></p>
                            </div>
                            <?php if ($_SESSION['user_id'] == $comment['user_id'] || $_SESSION['role'] == 1): ?>
                                <div>
                                    <button onclick="editComment(<?= $comment['answer_id'] ?>)" class="text-blue-500 hover:underline">Edit</button>
                                    <a href="question.php?id=<?= $question_id ?>&delete_comment_id=<?= $comment['answer_id'] ?>" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this comment?');">Delete</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Add Comment Form -->
            <h2 class="text-xl font-semibold">Add a Answer</h2>
            <form action="question.php?id=<?= $question_id ?>" method="post" class="mb-6">
                <div class="mb-4">
                    <label for="answer" class="block mb-2 text-sm font-bold text-gray-700">Your Answer:</label>
                    <textarea id="answer" name="answer" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
function editComment(commentId) {
    // Get the comment text element
    const commentText = document.getElementById(`comment-text-${commentId}`);
    const originalText = commentText.innerText;

    // Replace the comment text with a textarea
    commentText.innerHTML = `
        <textarea id="edit-text-${commentId}" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">${originalText}</textarea>
        <button onclick="saveComment(${commentId})" class="px-4 py-2 mt-2 font-bold text-white bg-green-500 rounded hover:bg-green-700 focus:outline-none focus:shadow-outline">Save</button>
        <button onclick="cancelEdit(${commentId}, '${originalText}')" class="px-4 py-2 mt-2 ml-2 font-bold text-white bg-red-500 rounded hover:bg-red-700 focus:outline-none focus:shadow-outline">Cancel</button>
    `;
}

function cancelEdit(commentId, originalText) {
    // Revert the text area back to the original comment text
    const commentText = document.getElementById(`comment-text-${commentId}`);
    commentText.innerHTML = originalText;
}

function saveComment(commentId) {
    const editedText = document.getElementById(`edit-text-${commentId}`).value;

    // Use Fetch API to send the edited text to the server via POST request
    fetch('edit_answer.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            comment_id: commentId,
            answer_text: editedText
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Update the comment text with the new edited text
            const commentText = document.getElementById(`comment-text-${commentId}`);
            commentText.innerHTML = editedText;
        } else {
            alert('Failed to save comment. Please try again.');
        }
    })
    .catch(error => console.error('Error:', error));
}
</script>
