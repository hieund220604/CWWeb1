<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-semibold text-center text-gray-800">Send an Email</h2>
        <form id="emailForm" action="send_email.php" method="POST">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                <input type="text" id="title" name="title" required class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea id="description" name="description" rows="4" required class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-4 py-2 font-semibold text-white bg-blue-600 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Send</button>
            </div>
        </form>
    </div>
</div>