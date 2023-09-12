<!DOCTYPE html>
<html lang="en">
<head>
    <title>Grade Calculator</title>
</head>
<body>

    <?php

        function CalculateGrade($average){
            if ($average >= 90) {
                return "A";
            }elseif ($average >= 80) {
                return "B";
            }elseif ($average >= 70) {
                return "C";
            }elseif ($average >= 60) {
                return "D";
            }else {
                return "F";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $score1 = $_POST['score1'];
            $score2 = $_POST['score2'];
            $score3 = $_POST['score3'];

            // Calculate the average score 
            $average = ($score1 + $score2 + $score3) / 3;

            // Grade Calculate 
            $gradeLetter = CalculateGrade($average);


        }
    ?>


    <!-- Grade calculate form -->
    <h1>Grade Calculator</h1>
    <form  method="post" action="">

        <label for="score1">Enter test score 1:</label>
        <input type="number" id='score1' name='score1' require ><br> 

        <label for="score2">Enter test score 2:</label>
        <input type="number" id='score2' name='score2' require ><br> 

        <label for="score3">Enter test score 3:</label>
        <input type="number" id='score3' name='score3' require ><br> <br>

        <input type="submit" value="Calculate Grate" >


    </form>

    <?php 
        // display output 

        if (isset($average) && isset($gradeLetter)) {
            
           echo "<p><strong>Average: </strong>$average</p>";
           echo "<p><strong>Grade: </strong>$gradeLetter</p>";
        }
    ?>
    
</body>
</html>