
<!-- 
    6- ‘Write a PHP program to find the larger value from two positive integer values that is in the range 
    20..30 inclusive, or return 0 if neither is in that range
 -->


<?php

$x = 27;
$y = 20;

{
   if ($x >= 20 && $x <= 30 && $y >= 20 && $y <= 30) {

                if ($x > $y) {
                    echo $x;
                }

                else {
                    echo $y;
                }}

                else {
                    echo 0;
                }
            }


