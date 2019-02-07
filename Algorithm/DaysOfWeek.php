<?php
/**********
 *create the To the Util Class add dayOfWeek static function that takes a date as input and prints the day of the week that date falls on. Your program should take three command-line arguments: m (month), d (day), and y (year). For m use 1 for January, 2 for February, and so forth. For output print 0 for Sunday, 1 for Monday, 2 for Tuesday, and so forth
 *Uses insertion sort.
 *@authour amanverma
 *@version 2.0
 *Date 31/01/2019
 ********************************************************************/
require("Util.php");
try{
echo "Enter day : ";
$d = Util::getInt();
echo "Enter month : ";
$m = Util::getInt();
echo "Enter year : ";
$y = Util::getInt();
//calculating the day of week 
$d0 = Util::dayOfWeek($d, $m, $y);
//prints the day week
$d1 = "Sunday Monday Tuesday Wednesday Thursday Friday Saturday";
$day = explode(" ", $d1);
echo "Day on given date is :" . $day[$d0] . "\n";
}
catch(Throwable $th)
{
    echo("Invalid inputs..!");
}
?> 