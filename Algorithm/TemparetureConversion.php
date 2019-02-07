<?php
/**********
 *create the To the Util Class Temperature conversion program
 *@authour amanverma
 *@version 2.0
 *Date 31/01/2019
 ********************************************************************/
require ("Util.php");
try{
echo "enter the value of Celsius: ";
$C = Util::getInt();
echo "enter the value of Fahrenheit : ";
$F = Util::getInt();
Util::tempConversion($C,$F);
}
catch(Throwable $th)
{
    echo("Invalid input..!");
}
?>