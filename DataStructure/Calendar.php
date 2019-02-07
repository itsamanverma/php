<?php
/**********
 *program to print Calendar that takes the month and
 *year as command-line arguments and prints the Calendar of the month.
 *@authour amanverma
 *@version 2.0
 *Date 05/02/2019
 ******************************************************************************************/
/**
 * requried to get input from another class
 */
require 'Utility.php';
/**
 * calling the function
 */
try{
Utility::calendar();
}catch(Throwable $th)
{
    echo("Invalid calling..!");
}