<div class="flex text-black bg-gray-800">
    <div class="float-left w-1/4 min-h-screen text-purple-100 h-fit">
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
    <div class="w-3/4 px-3 bg-white">
        <div class="flex-1 p-8">
            <h1 class="mb-6 text-2xl font-semibold">Users</h1>
            <?=$_GET['error'] ?? ''?>
            <!-- Add User Form (Visible to Admins Only) -->
            <?php if ($_SESSION['role'] == 1) : ?>
                <div class="mb-6">
                    <h2 class="mb-4 text-xl font-bold">Add New User</h2>
                    <button id="toggleForm" class="px-4 py-2 mb-4 text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"> Add User</button>
                    <form id="addUserForm" action="admin/add_user.php" method="post" class="hidden">
                        <div class="mb-4">
                            <label for="user_name" class="block mb-2 text-sm font-bold text-gray-700">Username:</label>
                            <input type="text" id="user_name" name="user_name" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="user_password" class="block mb-2 text-sm font-bold text-gray-700">Password:</label>
                            <input type="password" id="user_password" name="user_password" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="fullname" class="block mb-2 text-sm font-bold text-gray-700">Full Name:</label>
                            <input type="text" id="fullname" name="fullname" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="role" class="block mb-2 text-sm font-bold text-gray-700">Role:</label>
                            <select id="role" name="role" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                        <button type="submit" id="submitBtn" class="w-full px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700 focus:outline-none focus:shadow-outline">Add User</button>
                    </form>
                </div>
            <?php endif; ?>

            <ul>
            <ul>
                <?php foreach ($users as $user): ?>
                    <li class="p-4 mt-2 text-lg border-b shadow-2xl rounded-xl bg-slate-400">
                        <div class="flex justify-between">
                            <div>
                                <!-- Make the full name clickable to see all questions by this user -->
                                <a href="questions.php?user_id=<?= $user['user_id'] ?>" class="text-2xl text-blue-600 underline hover:text-blue-800"><?= htmlspecialchars($user['fullname']) ?></a>
                                <p class="text-sm text-gray-600"><?= htmlspecialchars($user['user_name']) ?> | Role: <?= $user['role'] == 1 ? 'Admin' : 'User' ?></p>
                                <p class="text-sm text-gray-600">Joined on: <?= htmlspecialchars($user['created_at']) ?></p>
                            </div>
                            <?php if ($_SESSION['role'] == 1 || $_SESSION['user_id'] == $user['user_id']) : ?>
                                <div class="flex gap-2">
                                    <a href="edit_user.php?id=<?= $user['user_id'] ?>" class="px-4 py-2 text-white bg-yellow-500 rounded hover:bg-yellow-700 focus:outline-none focus:shadow-outline">Edit</a>
                                    <a href="<?php if ($_SESSION['role'] == 1) : ?>admin/delete_user.php<?php else : ?>delete_user.php<?php endif; ?>?id=<?= $user['user_id'] ?>" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700 focus:outline-none focus:shadow-outline">Delete</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<script>
    document.getElementById('toggleForm').addEventListener('click', function() {
        const form = document.getElementById('addUserForm');
        form.classList.toggle('hidden');
    });

    document.getElementById('submitBtn').addEventListener('click', function(event) {
        const username = document.getElementById('user_name').value;
        const password = document.getElementById('user_password').value;
        const fullname = document.getElementById('fullname').value;
        const role = document.getElementById('role').value;
        const minPasswordLength = 8; // Define minimum password length

        if (username === '' || password === '' || fullname === '' || role === '') {
            event.preventDefault();
            alert('All fields are required!');
            return;
        }

        if (password.length < minPasswordLength) {
            event.preventDefault();
            alert('Password must be at least ' + minPasswordLength + ' characters long.');
        }
    });
</script>
