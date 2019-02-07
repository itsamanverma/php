<?php

/**
 * There is 1, 2, 5, 10, 50, 100, 500 and 1000 Rs Notes which can be returned by Vending Machine. Write a Program to calculate the minimum number of Notes as well as the Notes to be returned by the Vending Machine as a Change
 */
require "Util.php";
echo " enter the amount \n";
$money = Util::getInt();
function negativeNumber($money)
{
    if ($money > 0) {
        throw new Exception(".$money must be greater than zero");
    }
    return true;
}
try{
    negativeNumber($money<0);
    echo("money must be greater than zero \n");
    // echo " enter valid the amount \n";
    // $money = Util::getInt();
$arrayOne = array('1000', '500', '100', '50', '20', '10', '5', '2', '1');
Util::calcnotes($arrayOne, $money);
}catch(Exception $e)
{
    echo "Message".$e->getMessage();
}

?>