<?php
/**
 * To find Square root
 */
require ("Util.php");
 echo "Enter value of C: ";
 $c = Util::getInt();
 function nonNegative($c)
 {
     if($c>0)
     {
         throw new Exception("Enter number must be nonNegative Number");
     }
     return true;
 }
 try{
     nonNegative($c<0);
     echo("Entered the Number must be Positive..!\n");
 $sqrt =  Util::squareRoot($c);
 echo "Square Root of ".$c." is ".$sqrt."\n";
 }
 catch(Exception $e)
 {
  echo("Message:" .$e->getMessage()    );
  
 }

?>