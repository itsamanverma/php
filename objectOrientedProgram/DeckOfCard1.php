<?php
require('Utility.php');
/*create a array named as suits which stored type of suits */
$suits = array("♣", "♦", "♥", "♠");
 
/*create  the array named as rank which ranks of cards */ 
$rank = array("2", "3", "4", "5", "6", "7", "8", "9", "10","Jack", "Queen", "King", "Ace");
 
/* create a 2Darray to stored the combination of cards */
$cards =array();
 
/* calling the function from Utility class to add suits & rank in 2DArray */
$cardsArr = Utility::storeCards($cards,$suits,$rank);
 
/*calling the function from utility class to suffle the cards */
$suffledCards = Utility::suffleCards($cards,$suits,$rank);
 
/*calling the function from utility class to suffle the cards */
Utility::printCards($suffledCards);
 
?>