
<?php
/**********
 * A library for reading in 2D arrays of integers, doubles, or booleans from standard input and printing them out to standard output.
 *@authour amanverma
 *@version 2.0
 *Date 24/01/2019
 */
//requires method in Util to take input and find leap year
require ('Util.php');
echo "1 - Integer: \n";
echo "2 - Double: \n";
echo "3 - Boolean: \n";
echo "4 - Exit: \n";
echo "Enter num value to choose which of number You want to stored: ";
$num = Util::getInt();
switch($num){
    case 1: 
    Util::twoDArrayForInteger();
    break;
    case 2: 
    Util::twoDArrayForDouble();
    break;
    case 3:
    Util::twoDArrayForBoolean();
    break;
    case 4: exit();
}
?>