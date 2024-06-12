<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Recursion</title>
    </head>

    <body>

        <?php

            //If number is greater than 0, function will keep calling itself and decrease number by 1.
            //Similar to JS, it seems a return statement is not always necessary for every case.
            function countdown($number) {
                if($number < 0) {
                    echo "I can't do a countdown with this number! <br>";
                    //return 0;
                } else if($number > 0) {
                    echo $number;
                    echo "<br>";
                    return countdown($number - 1);
                } else {
                    echo "Liftoff! <br>";
                    //return 0;
                }
            }

            //Calling the countdown function.
            countdown(1);
        ?>

    </body>

</html>