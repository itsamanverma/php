<?php
/**
 * Write a program WindChill.java that takes two double command-line arguments t and v and prints the wind chill.
 * @authour amanverma
 *@version 2.0
 *Date 25/01/2019
 */
require ("Util.php");
echo " Enter Temperature in Fahrenheit Value: ";
$t = Util::getFloat();
echo " Enter wind speed in miles per hour Value: ";
$v = Util::getFloat();
$w = 35.74+0.6215+(0.4275*$t)*pow($v,0.16);
echo "The wind chill valus is : ".$w;
?>