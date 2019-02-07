<?php
/********q*
 *program for the WeekDay objects to beqstored in a Queue implemented using Linked List.
 *Further maintain also a Week Object in a Queue to finally display the Calendar
 *@authour amanverma
 *@version 2.0
 *Date 05/01/2019
 ******************************************************************************************/
/*
 * to import the Utility class & Queue class ,we have to require those class
 */
require ('Utility.php');
require ('Queue.php');
/**
 * now to access the property of Queue class 
 * we have to create the objecte of Queue class
 */
$queue = new Queue();
echo "enter the month..!\n";
$month=Utility::getInt();
/**
 * validation for month 
 */
while(($month <= 0) && ($month > 12)) {
    echo "enter valid month..!\n";
    $month = Utility::getInt();
}
$date = 1;
echo "enter the year \n";
/**
 * validation for year
 */
$year=Utility::getInt();
while($year <1000 && $year >9999) {
    echo "enter valid year \n";
    $year =Utility::getInt();
}
/**
 * calling the dateofWeek function calculate the startday and 
 * assiging to startday calendar
 */
$startday=Utility::dayOfWeek($date, $month, $year);
/**
 * creating an 2D array calendar
 */
$calender = array();
/*
 * creating the array which stores the no of days in tha praticular month
 */
$days = array('31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31');
/**
 * creating the array which stored the name of the month 
 */
$months = array('Jan', 'Feb', 'March', 'April', 'may', 'June', 'July', 'Aug', 'Sep', 'oct', 'Nov', 'Dec');
/**
 * creating the array which stored the name of days 
 */
$week = array('Sun', 'Mon', 'Tue', 'Wed', 'Th', 'Fri', 'Sat');
/**
 * prints startday of a week
 */
echo $startday . "\n";
if (Utility::isLeapy($year)) {
    $days[1] = 29;
}
for ($i = 1; $i <= $days[$month - 1]; $i++) {
    $queue->enQueue($i);
}
/*
 * printing the month names
 */
echo "\t\t\t" . $months[$month - 1] . "\t" . $y;
echo "\n";
/*
 * printing the week
 */
for ($j = 0; $j < sizeof($week); $j++) {
    echo $week[$j] . "\t";
}
echo "\n";
/*
 * printing the spaces in start and end, according to month name we take
 *
 */
for ($i = 0; $i < $startday; $i++) {
    echo "\t";
}
/**
 * display the calendar in from week name $ date..!
 */
for ($k = 0; $k < $queue->size(); $k++) {
    $value = $queue->peek();
    /*
     * displayes the dates
     */
    echo $queue->deQueue1() . "\t";
    if (($value + $startday) % 7 == 0) {
        echo "\n";
    }
    //echo "\n";
}
?>