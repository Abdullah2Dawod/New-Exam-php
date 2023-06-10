
<!-- 
    8- Write a PHP program to return the sum of digits of a an integer number
 -->

 <?php

   function sum_of_digits($num){

      $sum = 0;
      for ($i = 0; $i < strlen($num); $i++){
         $sum += $num[$i];
      }
      return $sum;
   }
   $num = "677";
   echo sum_of_digits($num);

?>