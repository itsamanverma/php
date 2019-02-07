<?php
/**********
 *create the function to calculate the percentage of heahs & tails for particular fliping of Coins
 *@authour amanverma
 *@version 2.0
 *Date 23/01/2019
 **********/

require 'Util.php';
/*
 * @param $n shows the no of times you want to flip the Coin
 * @param $headCnt & $tailCnt shows the no of times head and tails comes for a particular fliping the coin.
 * @param $heads & $tails shows the percentages of heads & tails comes.
 */
$n;
$headCnt=0;
$tailCnt=0;
$heads;
$tails;

echo "Enter the no of times You Want to Flip the Coin:";
$n = Util::getInteger();//calling the getInteger function which only accept the integer value 

for($i=0;$i<$n;$i++)
{
    
    if(rand(0,1)<0.5)
        $tailCnt++;
    else
        $headCnt++;
}
$heads = $headCnt/$n*100;
$tails = $tailCnt/$n*100;

echo "percentage of heads  : $heads";
echo "\nPercentage of trails : $tails";
?>