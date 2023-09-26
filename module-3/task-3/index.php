<?php
// Task 3: Array Sorting  

// Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.

$grades = [85, 92, 78, 88, 95];

function sortingArray($grades) {
    rsort($grades);
    return $grades;
}

$sortingArr = sortingArray($grades);

print_r($sortingArr);

