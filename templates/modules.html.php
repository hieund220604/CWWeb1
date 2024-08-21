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
        <div class="flex-1 p-8 ">
            <h1 class="mb-6 text-2xl font-semibold">Modules</h1>

            <!-- Add Module Button (Visible to Admins Only) -->
            <?php if ($_SESSION['role'] == 1): ?>
                <div class="mb-6">
                    <a href="admin/add_module.php" class="px-4 py-2 text-white bg-green-500 rounded hover:bg-green-700 focus:outline-none focus:shadow-outline">Add Module</a>
                </div>
            <?php endif; ?>

            <ul>
    <?php foreach ($modules as $module): ?>
        <li class="p-4 mt-2 text-lg border-b shadow-2xl rounded-xl bg-slate-400">
            <div class="flex flex-col justify-between">
                <div>
                    <!-- Make the module name clickable -->
                    <a href="questions.php?module_id=<?= $module['module_id'] ?>" class="text-2xl text-blue-600 hover:underline">
                        Module name: <?= htmlspecialchars($module['module_name']) ?>
                    </a>
                </div>
                <div>
                    <p class="text-xl text-zinc-600">Description: <?= htmlspecialchars($module['description']) ?></p>
                </div>
                <?php if ($_SESSION['role'] == 1): // If the user is an admin ?>
                    <div class="pt-2">
                        <a href="admin/edit_module.php?id=<?= $module['module_id'] ?>" class="px-4 py-2 text-white bg-yellow-500 rounded hover:bg-yellow-700 focus:outline-none focus:shadow-outline">Edit</a>
                        <a href="admin/delete_module.php?id=<?= $module['module_id'] ?>" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700 focus:outline-none focus:shadow-outline" onclick="return confirm('Are you sure you want to delete this module?');">Delete</a>
                    </div>
                <?php endif; ?>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
        </div>
    </div>
</div>
