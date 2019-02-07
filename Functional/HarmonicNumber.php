<?php
/**********
 *create the function to calculate the harmonic serier 
 *@authour amanverma
 *@version 2.0
 *Date 23/01/2019
 **********/
require 'Util.php';
        // $st = fscanf(STNID,"%s",$val);
        // $flag=true;
        // while($flag)
        // {
        //     if(Util::getString($num))
        //     {
        //         $flag=false;
        //     }
        //     else
        //     {
        //        echo "Enter the valid Number..!";
        //        $st = fscanf(STNID,"%s",$val);
        //     }
        // }
        // $num = number_format($st);

        echo "enter the nth value of harmonic number\n";
        $value=Util::getInteger();
        while($value<=0)
        {
            echo"input value must be greater than zero(0)";
            $value=Util::getInteger();
        }
            Util::getHarmonic($value);

?>