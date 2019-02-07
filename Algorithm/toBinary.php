<?php  
/**
 * @author amanverma
 * @date 31/01/2019
 * function to convert decimal to binary
 * PHP program to Swap nibbles and find the new number.
 */
require ("Util.php");
echo "Enter number: ";
$num = Util::getInt();
echo "Binary no is  : ".Util::toBin($num)."\n";
// function to Swap two nibbles in a byte in php program 
function swapNibbles($x) 
{ 
	return ( ($x & 0x0F) << 4 | 
		($x & 0xF0) >> 4 ); 
} 
$x = $num; 
echo "New number after Nibbles logic : ".swapNibbles($x)."\n"; 
// PHP Program to find whether a no is power of two
//Function to check Log base 2 
function Log2($n) 
{ 
	return (log10($n) / 
			log10(2)); 
} 
// Function to check if x is power of 2 
function isPowerOfTwo($x) 
{ 
	return (ceil(Log2($x)) == 
			floor(Log2($x))); 
} 
if(isPowerOfTwo($x)) 
echo $x." is a power of 2 \n"; 
else
echo $x." is not a power of 2 \n"; 
?> 