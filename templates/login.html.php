<div class="bg-[url('./uploads/login.png')] bg-cover h-screen ">
    <div class="absolute w-auto h-48 px-20 mx-20 py-44">
        <div class="w-full max-w-md p-8 pl-16 pr-20 bg-white rounded-lg shadow-md ">
            <h1 class="mb-6 text-2xl font-semibold ">Login</h1>
            <form action="login.php" method="post">
                <div class="mb-4">
                    <label for="fullname" class="block mb-2 text-sm font-bold text-gray-700">Full Name:</label>
                    <input type="text" id="fullname" name="user_name" required class="w-full px-8 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-bold text-gray-700">Password:</label>
                    <input type="password" id="password" name="user_password" required class="w-full px-8 py-2 mb-3 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>
                <?php if (isset($error)): ?>
                    <div class="relative px-4 py-3 mb-4 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                        <span class="block sm:inline"><?= htmlspecialchars($error) ?></span>
                    </div>
                <?php endif; ?>
                <div class="flex items-center justify-between">
                    <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>