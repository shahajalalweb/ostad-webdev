<?php
// session timer set 
ini_set('session.gc_maxlifetime', 3600);

session_start();

include('function.php');

// if (!$_SESSION['login']) {
//     header("Location: login.php");
//     // echo "yes";

// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class=" flex justify-center items-center mt-10 bg-gray-100 p-4">

    <div class="w-4/5">
        <!-- Logout Button -->
        <div class="flex justify-between mb-4">
            <div>

                <!-- role access button  -->
                <?php if (isAdmin()) { ?>
                    <a href="logout.php" class="text-right bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Setting</a>
                    <a href="logout.php" class="text-right bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Member</a>
                <?php } elseif (isEditor()) { ?>
                    <a href="logout.php" class="text-right bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Member</a>
                <?php } ?>


            </div>
            <?php

            if (isset($_SESSION['login']) && $_SESSION['login']) { ?>

                <a href="logout.php" class="text-right bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">

                    Logout (<?php echo $_SESSION['role'];  ?>)
                </a>

            <?php } else { ?>

                <a href="login.php" class="text-right bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    login
                </a>

            <?php } ?>
        </div>

        <!-- User Table -->
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">

            <thead class="bg-gray-800 text-white">
                <tr class="flex justify-between">
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Username</th>
                    <th class="px-4 py-2">Role</th>

                    <?php if (isAdmin() || isEditor()) { ?>

                        <th class="px-4 py-2">Actions</th>
                        
                  <?php  } ?>
                </tr>
            </thead>
            <tbody class="bg-gray-200 item-center">
                <!-- Example data rows, you can dynamically generate these rows from your data source -->
                <tr class="flex justify-between">
                    <td class="px-4 py-2">1</td>
                    <td class="px-4 py-2">User1</td>
                    <td class="px-4 py-2">demo</td>
                    <?php if (isAdmin() || isEditor()) { ?>
                        <td class="px-4 py-2">
                            <?php if (isAdmin()) { ?>
                                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline mr-2">Edit</button>
                                <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            <?php } elseif (isEditor()) { ?>
                        
                                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline mr-2">Edit</button>
                        
                            <?php } ?>
                        
                        </td>

                    <?php  } ?>

                    
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>