<!-- Add Module Form -->
<div class="flex justify-center">
    <div class="w-full max-w-md">
        <h2 class="mb-6 text-2xl font-bold text-center">Add New Module</h2>
        <form action="add_module.php" method="post">
            <div class="mb-4">
                <label for="module_name" class="block mb-2 text-sm font-bold text-gray-700">Module Name:</label>
                <input type="text" id="module_name" name="module_name" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="description" class="block mb-2 text-sm font-bold text-gray-700">Description:</label>
                <textarea id="description" name="description" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Add Module</button>
        </form>
    </div>
</div>
