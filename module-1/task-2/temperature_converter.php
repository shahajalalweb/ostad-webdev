<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>


    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST['temperature'];
            $direction = $_POST['direction'];

            if ($direction === "celsiustoFahrenheit") {
                $converted_temperature = ($temperature * 9 / 5) + 32;
            } elseif ($direction === "fahrenheittoCelsius") {
                $converted_temperature = ($temperature - 32) * 5 / 9;
            }

        }


    ?>




    <h1>Temperature Converter</h1>
    <form method="post" action="">
        <label for="temperature">Enter Your Temperature : </label>
        <input type="number" name="temperature" id="temperature" require>


        <label for="direction"> Select Your Direction: </label>
        <select name="direction" id="derection">
            <option value="celsiustoFahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheittoCelsius"> Fahrenheit to Celsius </option>
        </select>

        <input type="submit" value="Convert" />


        <?php
            if (isset($converted_temperature)) { ?>
              
              <p><strong>Converted Temperature:</strong> <?php echo $converted_temperature ?></p>
              
           <?php }
        ?>

    </form>






    
</body>
</html>



