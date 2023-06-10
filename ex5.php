
<!-- 
    5- Write a PHP program to check which number nearest to the value 100 among two given
     integers Retum 0 ifthe two numbers are equal
 -->

<?php
function test($x, $y) 

{
   $n = 100;
   $val = abs($x - $n);
   $val2 = abs($y - $n);
   return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
}
?>


<?php
echo test(78, 95)."\n"; ?> <br> <?php
echo test(95, 95)."\n"; ?> <br> <?php
echo test(99, 70)."\n";
?>
