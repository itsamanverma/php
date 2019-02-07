<?php
/**********
 *create the function to check the palindrome for String..
 *@authour amanverma
 *@version 2.0
 *Date 04/01/2019
 ****************************************************************************************/
/**
 * requried to get input from another class
 */
require('Utility.php');
require('deQue.php');
/**
 * creating new dequeue
 */
$deq = new deQue;
/**
 * taking user input to search
 */
echo "enter the string \n";
$str = Utility::String_input();
for ($i = 0; $i < strlen($str); $i++) {
    $ch = $str[$i];
    $deq->addRear($ch);
}
/**
 *adding from rear and displaying forward and
 *chacking simultaneously is they are same or not
 */
$deq->displayForward();
echo "\n";
$string = "";
echo "reverse of a taken string \n";
/**
 *removing from back
 */
for ($i = 0; $i < strlen($str); $i++) {
    $string = $string . $deq->removeRear();
}
echo $string . "\n";
/**
 * comparing both the strings
 */
if ($str == $string) {
    echo "String is palindrome \n";
    echo "true \n";
} else {
    echo "String is not palindrome \n";
    echo "false \n";
}