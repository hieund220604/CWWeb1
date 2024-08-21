<!-- Add User Form -->
<div class="flex justify-center">
    <div class="w-full max-w-md">
        <h2 class="mb-6 text-2xl font-bold text-center">Add New User</h2>
        <form action="add_user.php" method="post">
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
            <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Add User</button>
        </form>
    </div>
</div>
