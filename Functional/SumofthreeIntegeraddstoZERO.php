<?php
/**********
  *A program with cubic running time.Read in N integers and counts the number of triples that sum to exactly 0.
  *@authour amanverma
  *@version 2.0
  *Date 24/01/2019
  */
 //requires method in Util to take input and find the sum
require('Util.php');

 echo ("Enter size of the array: ");
 $n = Util::getInt();
 echo("Enter the Integer of array..!");
 for($i=0; $i<$n;$i++){
     $iArr[$i]=trim(fgets(STDIN));
 }
 Util::findTriplets($iArr, $n); 
?> 