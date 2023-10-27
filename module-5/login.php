<?php

session_start();

if (isset($_SESSION['login']) && $_SESSION['login']) {
    header("Location: index.php");
    die;
}
$error = false;

$username = filter_input( INPUT_POST, 'username' );
$password = filter_input( INPUT_POST, 'password' );

$fileOpen = fopen("./users.txt", "r");

if ($username && $password) {
    $_SESSION['login'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;

    while ($data = fgetcsv($fileOpen)) {
         
            if ($data[0] == $username && $data[1] == sha1($password)) {
        
                $_SESSION['login'] = true;
                $_SESSION['user'] = $username;
                $_SESSION['role'] = $data[2];
                header('location: index.php');
        
            }
        }
        if (!$_SESSION['login']) {
            $error = true;
        }

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white rounded-lg shadow p-8 w-1/2">

        <h2 class="text-2xl font-bold text-gray-800 mb-4">Login</h2>

        <form action="login.php" method="post">

            <p class="text-red-500">

            <?php
            if ($error == true) {
                echo "user or password doesnot match";
            } else {
            }
            ?>

            </p>

            <div class="mb-4">
                <label for="username" class="block text-gray-600">Username:</label>
                <input type="username" id="username" name="username" class="w-full border border-gray-300 p-2 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password:</label>
                <input type="password" id="password" name="password" class="w-full border border-gray-300 p-2 rounded-lg">
            </div>
            <button type="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring">Login</button>
        </form>

    </div>
</body>

</html>