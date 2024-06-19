<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>RNG</title>
    </head>

    <body>
        <?php
            echo "Computer! What day of the month is it?<br>";

            //Calling the rand function and using it to assign a value between 1 and 30 to a variable.
            $day_of_month = rand(1, 30);

            //Calling the variable and showing the generated number.
            echo ($day_of_month . "<br>");
        ?>
    </body>
</html>