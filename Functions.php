<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Functions</title>
    </head>

    <body>

        <?php
            echo "Hi. <br>";

            //Calling a string function.
            chill_guy();

            echo "Quick question, do you know what 1 divided by 2 is? <br>";

            //Calling a function that divides two numbers.
            divide(1, 2);

            echo "Cool, thanks. I'm bad at this.";

            //Function for responding to first sentence.
            function chill_guy() {
                echo "Sup. <br>";
            }

            //Function for dividing two numbers.
            function divide($x, $y) {
                $result = $x / $y;

                echo $result . "<br>";
            }
        ?>

    </body>
</html>