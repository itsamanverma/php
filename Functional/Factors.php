<?php
/**********
 *create the function to calculate the prime factor
 *@authour amanverma
 *@version 2.0
 *Date 23/01/2019
 **********/
require('Util.php');
echo "enter the number: \n";
// calling the function to get integer
$number = Util::getInteger();
while($number<=0)
{
  echo("Enter the valid number");
  $number=Util::getInteger();
}
echo "prime factors of a number are \n";
// calling the method to print the primefactors
Util::primeFactors($number);