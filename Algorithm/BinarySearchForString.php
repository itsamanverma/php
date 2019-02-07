<?php
/**
 * Binary search program for String
 * 
 */
require ("Util.php");
echo "Enter String: ";
$str = Util::getArrayString();
//$str = fopen("text.txt","r") or die ("Unable to open file:");
$arr = explode(" ",$str);
//$start  = round(microtime(true)*1000);
echo " enter search element : ";
$search = Util::getString(); 
if(Util::binarySearch($arr, $search) == true) { 
    echo "Search element=>".$search." :Exists in given array. \n"; 
    // $stop = round(microtime(true)*1000);
    // echo " Elapsed time =>".Utility::stopWatch($start,$stop);
} 
else { 
    echo "Search element=> ".$search." :Doesnt Exist in given array."; 
} 
?> 
