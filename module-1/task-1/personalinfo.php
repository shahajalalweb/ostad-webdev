<!DOCTYPE html>
<html lang="en">
<head>
    <title>Personal Info</title>
</head>
<body>

    <?php
        // variables
        $name = "Shahajalal Badsha";
        $age = 21;
        $country = "Bangladesh";

        $introduction = "Hello, I'm Badsha, I'm a web developer from Bangladesh. Thanks for support Ostad";

    ?>

    <h1>
        Personal Info
    </h1>

    <p><strong>Name:</strong> <?php echo $name?> </p>
    <p><strong>Age:</strong> <?php echo $age?> </p>
    <p><strong>Country:</strong> <?php echo $country?> </p>
    <p><strong>Introduction:</strong> <?php echo $introduction?> </p>

    
</body>
</html>