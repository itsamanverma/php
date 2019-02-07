<?php
/**********
 *Replace String with new String 
 *@authour amanverma
 *@version 2.0
 *Date 23/01/2019
 **********/
require  'Util.php';
/*
 *@param $s1 show the User taken string 
 *@param $s2 shows the String which we want to replace it
 *@param $s3 shows the String which will take place on replace String 
 *@param $s4 shows the String with replacement 
 */
echo "hello <username>, how are you..! ";
$s1 = Util::getString();//calling the function from Util class

echo "Enter the Name You Want to Replace:";
$s2 = Util::getString();//calling the function from Util class

echo "Enter the Name You Want to Replace with:";
$s3 = Util::getString();//calling the function from Util class

$s4 = str_replace($s2, $s3, $s1);//use predefined function of php
echo "New String with Replacement: $s4";
?>  