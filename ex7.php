
<!-- 
    7- Write a PHP program to count the number of occurrences of any digitin a string
 -->

<?php
$number = array(35, 11, 14, 35, 46, 35, 23);
 
$newnum = count(array_keys($number, 35));
 
print_r($newnum);