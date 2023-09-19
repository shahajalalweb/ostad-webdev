<?php

// task-4: Fibonacci series printing using a function 
// Write a PHP function to print the first 15 numbers in the fibonacci series. You should take this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function


function fibonacci($numoffib)
{
    $first = 0;
    $second = 1;

    if ($numoffib >= 1) {
        echo $first;
    }

    if ($numoffib >= 2) {
        echo " " . $second;
    }

    for ($i = 3; $i <= $numoffib; $i++) {
        $next = $first + $second;
        echo " " . $next;

        // updating fibonacci 
        $first = $second;
        $second = $next;
    }
}


fibonacci(15);
