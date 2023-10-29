<?php

session_start();

$oldData = $_SESSION['oldData'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use $_POST to access form values
    $updateName = $_POST["username"];
    $updateEmail = $_POST["email"];
    $updatePass = $_POST["password"];

    $newData = "{$updateName},{$updateEmail},{$updatePass}";
}  

// File path to the CSV
$files = 'users.txt';  // Update this to your file path


// Read the entire file into an array
$fileLines = file($files);

// Find the line number that contains the old data
$lineNumberToReplace = -1;
foreach ($fileLines as $lineNumber => $line) {
    if (trim($line) === $oldData) {
        $lineNumberToReplace = $lineNumber;
        break;
    }
}

// Check if the old data was found and update it
if ($lineNumberToReplace !== -1) {
    $fileLines[$lineNumberToReplace] = $newData . "\n";

    // Write the updated data back to the file
    if (file_put_contents($files, implode('', $fileLines))) {
        header('Location: index.php');
    } else {
        echo "Error writing to the file.";
    }
} else {
    echo "Line with old data not found in the file.";
}





?>