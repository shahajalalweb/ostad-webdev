<?php

// task-2: skip multiples of 5
// create a php script that prints numbers from 1 to 50 using a for loop. however, when the loop encounters a multiple of 5, it should skip that number using the continue statement and continnue statement and continue to the next iteration.

for ($i=1; $i <= 50; $i++) { 
    
    if ($i % 5 == 0) {
        continue;
    }

    echo $i . PHP_EOL;
}