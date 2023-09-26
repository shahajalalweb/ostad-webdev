<?php
// Task 4: Multidimensional Array


// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

$studentGrades = [
    ["Math" => 90, "English" => 85, "Science" => 78],  
    ["Math" => 88, "English" => 92, "Science" => 76],  
    ["Math" => 75, "English" => 80, "Science" => 85],  
];


function calculateAverageGrades($gradesArray) {
    foreach ($gradesArray as $index => $student) {
        $mathGrade = $student["Math"];
        $englishGrade = $student["English"];
        $scienceGrade = $student["Science"];
        
        $averageGrade = ($mathGrade + $englishGrade + $scienceGrade) / 3;

        $averageGrade = (int) $averageGrade;
        
        echo "Student " . ($index + 1) . " - Average Grade: " . $averageGrade ;

        echo PHP_EOL;
    }
}


calculateAverageGrades($studentGrades);
