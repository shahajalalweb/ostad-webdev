<?php

// Task 1: String Manipulation

// Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:

// Convert the string to all lowercase.
// Replace "brown" with "red" in the string.
// Print the modified text.


$text = "The quick brown fox jumps over the lazy dog.";

function modifiText($text) {

    $ConLow = strtolower($text);

    $replace = str_replace("brown", "red", $text);

    return [
        'lower' => $ConLow,
        'replace' => $replace,
    ];
}

$result = modifiText($text);

echo $result['lower'];
echo $result['replace'];

