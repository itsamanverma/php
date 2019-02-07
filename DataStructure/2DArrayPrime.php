<?php
/**********
 *store the prime number in the 2D array. one Dimentional array stoed the prime   number between 0 to 100
 *and 100 to 200 prime number stored in second dimentional
 *@authour amanverma
 *@version 2.0
 *Date 05/02/2019
 */
 require('Utility.php');
 
 echo("Enter the range of Number..!");
 $no = Utility::getInt();
 /*
  * create a function to get the list of prime number in th range..!. 
  */
  $primeArr= Utility::primeNoArr($no);
  /*
   * create a 2D array to stroed the list of array
   * prime number between  0 to 100 ...1st row and so on
   */
   $twoPrime = array();
   $range=100;
   $k = 0;
   /*
    *since we store the prime number as per range just like 0-100,100-200 to... 900-1000
    *we need 10 array to list of prime number in b/w range. 
    */
   for($i=0;$i<10;$i++)
   {    /*
         * to stored the list primee number in the inner array.
         */
       for($j=0;$j<100;$j++)
       {
             if($k==sizeof($primeArr) || $primeArr[$k]>$range){
             break;
             }
             $twoPrime[$i][$j] = $primeArr[$k++];
       }
       $range +=100;
   } 
   print_r($twoPrime);
   
   /*
    * printing the  prime 2D array
    */
    for($i=0;$i<sizeof($twoPrime);$i++)
    {
        for($j=0;$j<sizeof($twoPrime[$i]);$j++)
        {
            echo $twoPrime[$i][$j]." ";
        }
        echo "\n";
    }
?>
