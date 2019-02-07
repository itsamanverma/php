<?php
/*********************************************************************************
 *program to store the Queue in two Stacks.
 *@authour amanverma
 *@version 2.0
 *Date 06/02/2019
 *************************************************************************************/
/*
 * importing the class to access their properties
 */
require 'Utility.php';
require 'Stack.php';
try{
$stack1 = new Stack();
$stack2 = new Stack();
echo "enter month\n";
$month= Utility::getInt();
/* validation for month */
While(($month <= 0) && ($month > 12)) {
    echo "enter valid month number \n";
    $month = utility::getInt();
}
$date = 1;
/* validation for year */
$year = Utility::getInt();
While($year < 1000 && $year > 9999) {
    echo "enter valid year \n";
    $year = utility::getInt();
}
 Utility::calendarByStack($date,$month,$year);
}catch(Throwable $th)
{
    echo("Invalid Input..!");
}
 ?>
