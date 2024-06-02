<!DOCTYPE html>

<html lang="en>

<head>
    <meta charset="UTF-8">
    <title>Linear Search</title>
</head>

<body>
    <?php

        //Commented line to test variables and methods.
        //echo "Hello world! This is a test!";

        //The number the algorithm will look for.
        $lookup = 40;

        //The array the algorithm will search through.
        $numbers = array(10, 20, 30, 40, 50);

        //Check every index in the array. If the value is found, tell us where you found it. Otherwise say nothing at all.
        for($i = 0; $i < sizeof($numbers); $i++) {
            if($lookup == $numbers[$i]) {
                echo "Found it! It's at index $i";
            }
        }
    ?>
</body>

</html>