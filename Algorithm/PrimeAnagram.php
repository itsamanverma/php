<?php
/**********
 *filename:primeAnagram.php
 *function Reads in strings from standard input and prints them in sorted order.
 *Uses insertion sort.
 *@authour amanverma
 *@version 2.0
 *Date 30/01/2019
 ******************************************************************************************************/
require 'Util.php';
echo "enter the range ";
echo "\n";
/**
 * calling the method to get int type
 */
$number = Util::getInt();
/**
 * calling the function
 */
$array = Util::primes($number);
echo "\n";
/**
 * calling the function
 */
Util::palindrome($array);
echo "\n";
/**
 *  calling the method
 */
Util::primeanagrams($array);
