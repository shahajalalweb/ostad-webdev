<?php


// Check if the "name," "email," and "pass" parameters are set in the URL
if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['pass'])) {
    // Retrieve the values of the parameters
    $name = $_GET['name'];
    $email = $_GET['email'];
    $pass = $_GET['pass'];
} 


// File path
$file = "users.txt";

// Open the file for reading
$lines = file($file);

// Initialize an empty array to store the updated lines
$updatedLines = [];

// Search for the line you want to delete
$lineToDelete = "$name,$email,$pass";

foreach ($lines as $line) {
    // Trim whitespace and compare lines
    if (trim($line) === trim($lineToDelete)) {
        // Skip this line (delete it)
        continue;
    }

    // Add the current line to the updatedLines array
    $updatedLines[] = $line;
}

// Open the file for writing (truncate it)
$fileHandle = fopen($file, 'w');

if ($fileHandle !== false) {
    // Write the updated content back to the file
    fwrite($fileHandle, implode("", $updatedLines));

    // Close the file
    fclose($fileHandle);
    
    header('Location: index.php');
    
} else {
    echo "Failed to open the file for writing.";
}
?>
