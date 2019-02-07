<?php
/**********
  *wrtie the to calculate the distance 
  *@authour amanverma
  *@version 2.0
  *Date 24/01/2019
  */
require ('Util.php');

echo("Enter the First argument \n");
$x = Util::getInt();
echo("Enter the Second argument ");
$y = Util::getInt();

$result = util::euclideanDistance($x,$y);
echo "Distance from(".$x. ",".$y. ") to (0,0) =".$result."\n";
?>