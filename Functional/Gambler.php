<?php
/**********
 *create the function to calculate the gambling game
 *@version 2.0
 *Date 23/01/2019
 **********/
require("Util.php");
echo("Welcome in the world of Gambling...!!\n");

echo "Enter the stake Amount :\n"; 
$stake=Util::getInteger(); // calling the method to get integer value
echo "Enter the goal Amount :\n";
$goal=Util::getInteger(); // calling the method to get integer value
echo "Enter the number of trials :\n";
$trials=Util::getInteger();
Util::gambler($stake,$goal,$trials); 