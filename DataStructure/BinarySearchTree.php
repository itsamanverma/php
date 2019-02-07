<?php
/*
*Program to find Binary Search Of a Tree
*@authour amanverma
*@version 2.0
*Date:06/02/2019
*/
require('Utility.php');
/*
* enter the no of Nodes in the tree
*/
try{
echo("Enter the no of Nodes in the Tree\n");
$noOfNode = Utility::getInt();
/*
* since tree is the Recursive Data Structure
* so calculating the Numerator value using the formula
*/
$numerator = Utility::factorial(2 * $noOfNode);
/* calculating the denominator using the recursive formula*/
$denominator = Utility::factorial($noOfNode+1)+Utility::factorial($noOfNode);
/*
* calculating the no Of Nodes
*/
$BST=floor($numerator/$denominator);
echo("No of BST:-  \n" .$BST  ."\n");
}catch(Throwable $th)
{
    echo("invalid input..!");
}
?>
