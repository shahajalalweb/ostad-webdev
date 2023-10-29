<?php
// session timer set 
ini_set('session.gc_maxlifetime', 3600);

session_start();

include('function.php');

$serial = 1;

function selectUser($data) {
    echo $data;
}


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
   
              <?php  if (!isUser() && !isset($_SESSION['login'])) {
                    ?>
                    <!-- user login process  -->
                    <a href="form.php" class="text-right bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">User Registration</a>
                    <a href="userlogin.php" class="text-right bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">User Login</a>  
             <?php  }   ?>

             <?php
                if (isUser()) { ?>
                    <a href="logout.php" class="text-right bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Logout (<?php echo $_SESSION['user']?>) </a>
              <?php  } ?>

                


                <!-- role access button  -->
                <?php if (isAdmin()) { ?>
                    <a href="form.php" class="text-right bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Setting</a>
                    <a href="addUser.php" class="text-right bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add User</a>
                <?php } elseif (isEditor()) { ?>
                    <a href="addUser.php" class="text-right bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add User</a>
                <?php } ?>
            </div>
            <?php

            if (!isUser()) {
                
            if (isset($_SESSION['login']) && $_SESSION['login']) { ?>

                <a href="logout.php" class="text-right bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Logout (<?php echo $_SESSION['role'];  ?>)
                </a>
            <?php } else { ?>

                <a href="login.php" class="text-right bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    login (Admin & Manager)
                </a>
            


            <?php } }?>
        </div>

        <!-- User Table -->
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">

            <thead class="bg-gray-800 text-white">
                <tr class="flex justify-between">
                    <?php if (isAdmin() || isEditor()) { ?>

                        <th class="px-4 py-2">#</th>

                    <?php  } ?>

                    <th class="px-4 py-2">Username</th>
                    <th class="px-4 py-2">Email</th>

                    <?php if (isAdmin() || isEditor()) { ?>

                        <th class="px-4 py-2">Actions</th>

                        <?php  } ?>
                    </tr>
                </thead>
                <?php if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']) { ?>
                    <tbody class="bg-gray-200 item-center">
                    <?php
                    $fOpen = fopen("./users.txt", "r");
                    while ($data = fgetcsv($fOpen)) {
                    if ($data[0] == $_SESSION['user']) { ?>
                        <tr class="flex justify-between">
                        <td class="px-4 py-2"><?php echo $data[0] ?></td>
                        <td class="px-4 py-2"><?php echo $data[1] ?></td>
                        </tr>
                   <?php } }
                    ?>                        
                    </tbody>
            
            <?php } ?>
            <!-- admin or manager login access table  -->
            <?php if (isset($_SESSION['login']) && $_SESSION['login']) { ?>
                <tbody class="bg-gray-200 item-center">
                    <?php
                    $fOpen = fopen("./users.txt", "r");
                    while ($data = fgetcsv($fOpen)) {
                    ?>
                        <!-- table row -->
                        <tr class="flex justify-between">
                            <td class="px-4 py-2"><?php echo $serial++ ?></td>
                            <td class="px-4 py-2"><?php echo $data[0] ?></td>
                            <td class="px-4 py-2"><?php echo $data[1] ?></td>
                            <?php if (isAdmin() || isEditor()) { ?>
                                <td class="px-4 py-2">
                                    <?php if (isAdmin()) { ?>
                                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline mr-2">Edit</button>
                                        <a href="delete.php?name=<?php echo $data[0]?>&email=<?php echo $data[1]?>&pass=<?php echo $data[2]?>" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Delete</a>
                                    <?php } elseif (isEditor()) { ?>

                                        <button  class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline mr-2">Edit</button>

                                    <?php } ?>

                                </td>

                            <?php  } ?>
                        </tr>

                    <?php   }
                    ?>

                </tbody>
            <?php  } ?>

        </table>
    </div>

</body>

</html>