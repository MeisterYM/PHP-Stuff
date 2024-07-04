<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Bubble Sort</title>
    </head>

    <body>
        <?php

            //Creating an rrray to test algorithm.
            $thing = array(4, 8, 6, 2);

            //Assigning the size of the array to a variable.
            $length = sizeof($thing);

            //First loop keeps track of the iteration through the array.
            for($i = 0; $i < $length-1; $i++) {

                //Second loop helps with comparing.
                for($j = 0; $j < $length-$i-1; $j++) {

                    //If current element is greater than next element, swap the values. Otherwise do nothing.
                    if($thing[$j] > $thing[$j+1]) {
                        $placeholder = $thing[$j];
                        $thing[$j] = $thing[$j+1];
                        $thing[$j+1] = $placeholder;
                    }

                }

            }

            //Printing the values for the newly sorted array.
            for($k = 0; $k < sizeof($thing); $k++) {
                echo ($thing[$k] . "<br>");
            }

        ?>
    </body>

</html>