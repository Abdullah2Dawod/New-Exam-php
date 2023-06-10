
<!-- 
    9- Write a PHP program to reverse any string. (Don't use "strrev" function)
 -->

<?php

$name = "ABDULLAH DAEWD";

$len = strlen($name);

for ($i=($len-1) ; $i >= 0 ; $i--)

{
echo $name[$i];
}
?>