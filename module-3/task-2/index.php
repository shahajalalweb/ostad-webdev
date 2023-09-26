<?php
// Task 2: Array Manipulation

// Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function RemEven($numbers) {

        $oddNum = array_filter($numbers, function($num)  {
            return $num % 2 != 0;
        });

        return $oddNum;
  
}

$oddNumrs = RemEven($numbers);

print_r($oddNumrs);



?>