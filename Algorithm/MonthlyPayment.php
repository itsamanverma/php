<?php
/**********
 *create the function To calculate the monthly payment
 *@authour amanverma
 *@version 2.0
 *Date 31/01/2019
 ********************************************************************/
require ("Util.php");
try{
echo "Enter year :";
$y = Util::getInt();
echo "Enter rate of Interest : ";
$r = Util::getInt();
echo "Enter Principal Loan : ";
$p = Util::getInt();
Util::monthlyPayment($y,$r,$p);
}
catch(Throwable $th)
{
    echo("Invalid input..!");
}
?>