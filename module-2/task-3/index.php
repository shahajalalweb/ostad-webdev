<?php

// task-3: break on condition
// write a PHP program that calculates and prints the first 10 fibonacci numbers. but if a fibonacci number is greater than 100, break out of the loop using the break statement

$numOffibonacci = 10;

$first = 0;
$second = 1;

echo "The first " . $numOffibonacci . " fibonacci number is: ";

if ($numOffibonacci >= 1) {
    echo $first;
}

if ($numOffibonacci >= 2) {
    echo " " . $second;
}

for ($i = 3; $i <= $numOffibonacci; $i++) {
    $next = $first + $second;

    if ($next > 100) {
        break;
    }

    echo " " . $next;
    // update fibonacci 
    $first = $second;
    $second = $next;
}
