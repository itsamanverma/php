<?php
/**
 * Write a program Quadratic.java to find the roots of the equation a*x*x + b*x + c. Since the equation is x*x, hence there are 2 roots.
 */
require ("Util.php");
echo " Enter the Value of coffiecient of x^2:";
$a = Util::getInt();
echo " Enter the Value of coffiecient of x^1: ";
$b = Util::getInt();
echo " Enter the Value of coffiecient of x^0: ";
$c = Util::getInt();
Util::quadratic($a,$b,$c);
?>