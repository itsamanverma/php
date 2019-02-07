<?php

/**********
 *create the function to Reads in String prints them in sorted order using Bubble Sort
 *Uses insertion sort.
 *@authour amanverma
 *@version 2.0
 *Date 30/01/2019
 ******************************************************************************************************/
require('Util.php');
try {
    echo "Enter String: ";
    $str = Util::getArrayString();
//$start  = round(microtime(true)*1000);
    $arr = str_split($str);//convert the string to charcter type array//

    print_r($arr);
    Util::bubbleSorting($arr);
} catch (Throwable $th) {
    echo ("Invalid Input..!");

echo "Sorted String : \n";
for ($i = 0; $i < sizeof($arr); $i++)
    echo $arr[$i] . " "; 
     //$stop = round(microtime(true)*1000);
    //echo " Elapsed time =>".Util::stopWatch($start,$stop);
}
?>