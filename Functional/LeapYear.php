<?php
/**********
 *To check given year is leap year or not
 *@authour amanverma
 *@version 2.0
 *Date 23/01/2019
 */
//requires method in Util to take input and find leap year
require 'Util.php';
class LeapYear
{
    public function leap()
    {
        echo "enter the year \n";
        $year = Util::getInteger();
        // $flag=true;
        // while($flag)
        // {
        //     if(Util::getString($year))
        //     {
        //         $flag=false;
        //     }else
        //     {
        //        echo " Enter the valid year";
        //        $year=Util::getInteger();
        //     }
        // }

        //calling the function from Util class
        if (strlen((String) $year) == 4)
         {
            //calling the function fron Util class
            if (Util::checkLeapyear($year)) {
                echo "is a leap year \n";
            } else {
                echo "is not a leap year \n";
            }
        }
        else
        {
           echo "Enter the valid year:";
        }
    }
}
LeapYear::leap();