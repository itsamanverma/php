<?php
/**********
 *create the function to take string array to do insertion sort.
 *Uses insertion sort.
 *@authour amanverma
 *@version 2.0
 *Date 30/01/2019
 *******************************************************************************/
require 'Util.php';
echo "Enter String : ";
$str = Util::getArrayString();
$arr = explode(" ",$str);
$n = sizeof($arr); 
Util::insertionSort($arr, $n); 
echo "Sorted srting: ";
Util::printArray($arr, $n); 
// // To data from file
// $str= fopen("String.txt", "r") or die("Unable to open file!");
// $str1 = fread($str,filesize("String.txt"));
// $str3 = explode(" ",$str1);
// $n = sizeof($str3); 
// Util::insertionSort($str3, $n); 
// echo "Element after sorting are :";
// Util::printArray($arr, $n); 
// fclose($str);

// require 'Util.php';
// $file = fopen("word.txt", "r");
// $filestr = fgets($file);
// $str = explode(" ", $filestr) or die("file not found");
// for ($i = 0; $i < sizeof($str); $i++) {
//     echo $str[$i] . " ";
//     echo " \n";
// }
// echo "\n";
// Util::insertionSortFile($str);
?> 