<?php
/**********
  * create the function to calculate all permutation of a String using iterative method and
  * Recursion method..
  * @authour amanverma
  * @version 2.0
  * Date 25/01/2019
  */
require ('Util.php');
echo " Enter Sting which permutation : ";
$str = Util::getString(); 
$n = strlen($str); 
Util::permute($str, 0, $n - 1); 
?> 
?>