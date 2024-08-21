<div class="w-full max-w-md mx-auto mt-8">
    <h1 class="mb-6 text-2xl font-semibold text-center">Edit User</h1>


<!-- Edit User Form -->
<form action="edit_user.php?id=<?= htmlspecialchars($user['user_id']) ?>" method="post">
    <div class="mb-4">
        <label for="fullname" class="block mb-2 text-lg font-semibold text-gray-700">Full Name:</label>
        <input type="text" id="fullname" name="fullname" value="<?= htmlspecialchars($user['fullname']) ?>" required class="w-full px-4 py-2 text-lg leading-tight text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
        <label for="email" class="block mb-2 text-lg font-semibold text-gray-700">Email:</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['user_name']) ?>" required class="w-full px-4 py-2 text-lg leading-tight text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
        <label for="password" class="block mb-2 text-lg font-semibold text-gray-700">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter a new password (leave blank to keep current password)" class="w-full px-4 py-2 text-lg leading-tight text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <?php if ($_SESSION['role'] == 1 && $_SESSION['user_id'] != $user['user_id']) : ?>
        <div class="mb-4">
            <label for="role" class="block mb-2 text-lg font-semibold text-gray-700">Role:</label>
            <select id="role" name="role" required class="w-full px-4 py-2 text-lg leading-tight text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="0" <?= $user['role'] == 0 ? 'selected' : '' ?>>User</option>
                <option value="1" <?= $user['role'] == 1 ? 'selected' : '' ?>>Admin</option>
            </select>
        </div>
    <?php elseif ($_SESSION['role'] == 1 && $_SESSION['user_id'] == $user['user_id']) : ?>
        <div class="mb-4">
            <label for="role" class="block mb-2 text-lg font-semibold text-gray-700">Role:</label>
            <input type="text" id="role" name="role" value="Admin" disabled class="w-full px-4 py-2 text-lg leading-tight text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="hidden" name="role" value="1">
        </div>
    <?php endif; ?>

    <button type="submit" class="w-full px-6 py-3 mt-4 text-lg font-bold text-white bg-blue-600 rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Update User</button>
</form>
</div>
