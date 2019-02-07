<?php
/**********
  *A program with calculate the no of coupon 
  *@authour amanverma
  *@version 2.0
  *Date 24/01/2019
  */
 //requires method in Util to take input and find the sum
require('Util.php');
echo"Enter the number\n";
$range = Util::getInteger();
$couponNo = array();
$totalDistinct = 0;
for($i=0;$i<$range;$i++){
    $random = rand(1,($range));
    $couponNo[$i] = $random;
   
}
$uni = array_unique($couponNo);
$uni1 =  array_values($uni);
$totalDistinct = sizeof($uni1);
for($i=0;$i<sizeof($uni1);$i++){
    echo "$uni1[$i] \n";
 }   
echo "\n"."total distcnt numbers \n".$totalDistinct;
//Util::coupons();
?>