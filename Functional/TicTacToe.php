<?php

/**********
 *A program with to design the Tic-Tac-Toe game.
 *@authour amanverma
 *@version 2.0
 *Date 25/01/2019
 */
 //requires method in Util 
require('Util.php');

$ar = array(array());
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $ar[$i][$j] = 2;
    }
}

echo ("Your position are marked X \n");
$random = rand(0, 9);

$index = $random;
$val = Util::valueAtPosition($ar, $index);
while ($val == 0 || $val == 1)//check the condition at position value is present or not
{
    $index = $random;// if that position value present that generate random number between 0 to 9.
    $val = Util::valueAtPosition($ar, $index);
}
echo ("Computer chance ");
echo ("\n");
$ar = Util::enter($ar, $index, 1);
$flag = Util::checkIfWon($ar, 1);//check the in this situation whom won comp or user
if ($flag == 1) {
    echo ("You loose..!");
    Util::printGame($ar);//print the matrix with that situation
    return;
}
Util::checkIfEnd($ar);//check that if their game is over or not
Util::printGame($ar);//print the games
echo ("Enter the No From 1-9 which you would like to place...!!\n");
do {
    echo ("Enter the User input.. !!");
    $input = Util::getString();
} while (!Util::getInteger($input));
$index = (int)$input;
//index=sc.nextInt();
$val = Util::valueAtPosition($ar, $index);
while ($val == 0 || $val == 1)//check the condition at position value is present or not
{
    echo ("The place is already marked enter the Number..!");
    do {
           //System.out.println("Enter the User input.. !!");
        $input = Util::getString();
    } while (!Util::getInteger($input));//
    $index = (int)$input;
    //index=sc.nextInt();
    $val = Util::valueAtPosition($ar, $index);
}
$ar = Util::enter($ar, $index, 0);
Util::printGame($ar);//print the game
$flag = Util::checkIfWon($ar, 0);
if ($flag == 1) {
    echo ("You Won..!");
    Util::printGame($ar);
    return;
}
$flag = Util::checkIfEnd($ar);
if ($flag == 1) {
    Util::printGame($ar);
    return;

}
?>