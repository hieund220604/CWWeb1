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

        <!-- Main Content -->
        <div class="w-3/4 px-8 py-6">
            <h1 class="mb-6 text-3xl font-bold">Top Questions</h1>

            <!-- Ask Question Button -->
            <div class="flex justify-end mb-4">
                <button id="toggleForm" class="px-6 py-3 text-lg font-bold text-white bg-blue-600 rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Ask a Question
                </button>
            </div>

            <!-- Ask Question Form -->
            <form id="askQuestionForm" action="questions.php" method="post" enctype="multipart/form-data" class="hidden p-6 mb-6 bg-gray-100 rounded-lg shadow-md">
                <div class="mb-4">
                    <label for="question" class="block mb-2 text-lg font-semibold text-gray-700">Your Question:</label>
                    <textarea id="question" name="question" required class="w-full px-4 py-2 text-lg leading-tight text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <div class="mb-4">
                    <label for="module_id" class="block mb-2 text-lg font-semibold text-gray-700">Select Module:</label>
                    <select id="module_id" name="module_id" required class="w-full px-4 py-2 text-lg leading-tight text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <?php foreach ($modules as $module): ?>
                            <option value="<?= htmlspecialchars($module['module_id']) ?>"><?= htmlspecialchars($module['module_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="question_media" class="block mb-2 text-lg font-semibold text-gray-700">Upload Image:</label>
                    <input type="file" id="question_media" name="question_media" class="w-full px-4 py-2 text-lg leading-tight text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="px-6 py-3 text-lg font-bold text-white bg-blue-600 rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
            </form>

            <!-- Display Questions -->
            <div class="space-y-6">
                <?php if (isset($questions) && !empty($questions)): ?>
                    <?php foreach ($questions as $q): ?>
                        <div class="p-6 bg-white rounded-lg shadow-md">
                            <div class="flex items-start justify-between">
                                <div class="text-gray-600">
                                    <span class="text-xs"><?= htmlspecialchars($q['total_likes']) ?> likes</span><br>
                                    <span class="text-xs">0 views</span>
                                </div>
                                <div class="flex-1 ml-4">
                                    <a href="question.php?id=<?= htmlspecialchars($q['question_id']) ?>" class="text-xl text-blue-600 hover:text-blue-800"><?= htmlspecialchars($q['question']) ?></a>
                                    <div class="mt-2 text-sm text-gray-500">
                                        Module: <?= htmlspecialchars($q['module_name']) ?>
                                    </div>
                                    <?php if (!empty($q['question_media'])): ?>
                                        <div class="mt-2">
                                            <!-- <img src="./uploads/<?= htmlspecialchars($q['question_media']) ?>" alt="Question Image" class=" max-h-48"> -->
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="text-right text-gray-500">
                                    <span class="text-xs"><?= htmlspecialchars($q['uploader_name']) ?></span><br>
                                    <span class="text-xs"><?= htmlspecialchars($q['date']) ?></span>
                                </div>
                            </div>

                            <!-- Edit and Delete buttons -->
                            <?php if ($_SESSION['user_id'] == $q['user_id'] || $_SESSION['role'] == 1): ?>
                                <div class="flex mt-4 space-x-2">
                                    <a href="edit_question.php?id=<?= htmlspecialchars($q['question_id']) ?>" class="px-4 py-2 text-white bg-green-600 rounded-md hover:bg-green-700">Edit</a>
                                    <a href="delete_question.php?id=<?= htmlspecialchars($q['question_id']) ?>" class="px-4 py-2 text-white bg-red-600 rounded-md hover:bg-red-700" onclick="return confirm('Are you sure you want to delete this question?');">Delete</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-gray-500">No questions available at the moment. Please check back later or submit a new question!</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to toggle form visibility -->
<script>
    document.getElementById('toggleForm').addEventListener('click', function () {
        const form = document.getElementById('askQuestionForm');
        form.classList.toggle('hidden');
    });
</script>
