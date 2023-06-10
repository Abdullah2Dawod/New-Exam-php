
<!-- 
   1- Write a PHP program to check whether the first two characters
   and last two characters of a given string are same
 -->

<?php
function leen($name)
 { 
    return substr($name, 0, 2) == substr($name, strlen($name) -2, 2);
 }
 ?>

<?php
var_dump(leen("saedsa")); ?> <br> <?php
var_dump(leen("abdullah")); ?> <br> <?php
var_dump(leen("zhorzh"));
?>
