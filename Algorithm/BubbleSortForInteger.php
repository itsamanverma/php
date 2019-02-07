<?php 
/**********
 *create the function to Reads in integers prints them in sorted order using Bubble Sort
 *Uses insertion sort.
 *@authour amanverma
 *@version 2.0
 *Date 30/01/2019
 ******************************************************************************************************/
require("Util.php");
// $arr1 = file_get_contents("Integer.txt");
// $arr2 = explode(" ",$arr1);
// $len = count($arr2);
try {
// echo("Enter the Array..!");
    $arr = Util::getIntArr();
    $n = sizeof($arr);
//$start  = round(microtime(true)*1000);
    Util::bubbleSorting($arr);
} catch (Throwable $th) {
    echo ("Invalid Input..!");
}
echo "Sorted array : \n";
for ($i = 0; $i < $n; $i++)
    echo $arr[$i] . " "; 
     //$stop = round(microtime(true)*1000);
    //echo " Elapsed time =>".Util::stopWatch($start,$stop);
?>