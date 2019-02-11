<?php
/**
* StockData class to print a stock report for different stock 
* @author Amanverma
* @version 1.0
* Date: 10/02/2019
******************/
   require_once('Utility.php');
   require_once('stockReport.php');
   require_once('stockPortfolio1.php');
   /* create a growable array to stored the stocks details */
   $stocks = array();
   $i=0;
   /* taking the no of stocks from company */
   echo("enter the no of stocks\n");
   $num = Utility::getInteger();
   while($num>0)
   {
     /* stock names */
     echo("enter the stock name\n");
     $sName = Utility::String_input();
     /* Number of share */
     echo("enter the number of Share\n");
     $noOfShare = Utility::getInteger();
     /* share price */
     echo("enter the share price\n");
     $sPrice = Utility::getInteger();
     /*create the Object of stockReport to access the properties */
     $s = new stockReport($sName,$noOfShare,$sPrice);
     $stocks[$i++] = $s;
     $num--;
   }