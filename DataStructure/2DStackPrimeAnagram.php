<?php
/**
* program to print prime anagrams using queue in 2d array
* @author amanverma
* @version 1.0
*Date: 06/02/2019
******************************************************************************************************/
/*
* requried to get input from another class
*/
require 'Utility.php';
require 'Queue.php';
echo "enter the number \n";
/*
*getting the user input
*/
$number = Utility::getInt();
echo "primes numbers between the given range are: \n";
/**
* printing the prime numbers
*/
$arr = Utility::primes($number);
/**
*calling the function from another class and storing
*/
$primeAnanagram = Utility::printAnagrams($arr);
$queue = new Queue();
for ($i = 0; $i < sizeof($primeAnanagram); $i++) {
$queue->enQueue($primeAnanagram[$i]);
}
echo "\n";
echo "queue prime Anagram\n";
/**
* displaying the numbers
*/
$queue->display();