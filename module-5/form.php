<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Registration Form</title>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white rounded-lg shadow p-8 w-1/2">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Registration</h2>
        <form>
            <div class="mb-4">
                <label for="username" class="block text-gray-600">Username:</label>
                <input type="text" id="username" name="username" class="w-full border border-gray-300 p-2 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email:</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 p-2 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password:</label>
                <input type="password" id="password" name="password" class="w-full border border-gray-300 p-2 rounded-lg">
            </div>
            <button type="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring">Register</button>
        </form>
    </div>
</body>

</html>