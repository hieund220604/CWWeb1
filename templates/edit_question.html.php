<div class="flex-1 p-8">
    <h1 class="mb-6 text-2xl font-semibold">Edit Question</h1>
    <form action="edit_question.php?id=<?= $question['question_id'] ?>" method="post" enctype="multipart/form-data" class="mb-6">
        <div class="mb-4">
            <label for="question" class="block mb-2 text-sm font-bold text-gray-700">Your Question:</label>
            <textarea id="question" name="question" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"><?= htmlspecialchars($question['question']) ?></textarea>
        </div>
        <div class="mb-4">
            <label for="module_id" class="block mb-2 text-sm font-bold text-gray-700">Select Module:</label>
            <select id="module_id" name="module_id" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                <?php foreach ($modules as $module): ?>
                    <option value="<?= htmlspecialchars($module['module_id']) ?>" <?= $module['module_id'] == $question['module_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($module['module_name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="question_media" class="block mb-2 text-sm font-bold text-gray-700">Upload New Image (optional):</label>
            <input type="file" id="question_media" name="question_media" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Update</button>
    </form>
</div>
