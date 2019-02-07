<?php 
/**
 * Binary search program for integer
 */
require("Util.php");
$arr = Util::getIntArr();
//$start  = round(microtime(true)*1000);
echo "enter search element : ";
$search = Util::getInt();
if (Util::binarySearch($arr, $search) == true) {
    echo $search . " Exists in given array: \n"; 
    //$stop = round(microtime(true)*1000);
    //echo " Elapsed time =>".Util::stopWatch($start,$stop);
} else {
    echo $search . "Doesnt Exist";
}
?> 