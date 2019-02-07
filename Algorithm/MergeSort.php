<?php

/**********
 *create the function to take integer array to do Merge sort.
 *Uses insertion sort.
 *@authour amanverma
 *@version 2.0
 *Date 30/01/2019
 *******************************************************************************/
// require("Util.php");
// try{
// $arr = Util::getIntArr();

// Util::merge($arr,0,sizeof($arr));
// }
// catch(Throwable $th)
// {
//     echo("invalid Input..!");
// }
require 'Util.php';
try{
echo ("Enter the string..!");
/*$in shows the String taken by User */
$in = Util::getArrayString();
/*now convert the User taken String into Char Array..!*/
$arr = str_split($in);
$out = Util::mergeSort($arr);
}catch(Throwable $th)
{
echo("Invalid input..!");
}
echo "elements after sorting \n";
for ($i = 0; $i < sizeof($out); $i++) {
    echo $out[$i] . "   \n";
}
?>

