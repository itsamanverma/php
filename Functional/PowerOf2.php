<?php
/**********
 *This program takes argument N and prints a table of the powers of 2 that are less
than or equal to 2^N.
 *@authour amanverma
 *@version 2.0
 *Date 23/01/2019
 */
//requires method in Utility to take input and find leap year
require 'Util.php';
echo "Enter..! the number which power u require..!". "\n";
// calling the function to get integer
$n = Util::getInteger();
echo "power values are \n";
// calling the function to calculate the powers of 2 of a given number
Util::powersof2($n);