
<!-- 
  4- Write a PHP program to check the largest number among three given numbers
 -->

 <?php

$num1=50;
$num2=20;
$num3=25;

if($num1>$num2 && $num1>$num3){
  echo $num1;
}
else{

  if($num2>$num1 && $num2>$num3){
    echo $num2;
  }
  else
    echo $num3;
}

?>