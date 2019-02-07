<?php

/**********
 *create the function to take Integer array to do insertion sort.
 *Uses insertion sort.
 *@authour amanverma
 *@version 2.0
 *Date 30/01/2019
 ******************************************************************************************************/
require 'Util.php';
try {
// echo("Enter the Array..!");
    $arr = Util::getIntArr();
    $n = sizeof($arr);
    Util::insertionSort($arr, $n);
} catch (Throwable $th) {
    echo ("Invalid Input..!");
}
echo ("Enter the array After sorting..! \n");
Util::printArray($arr, $n);
?>
