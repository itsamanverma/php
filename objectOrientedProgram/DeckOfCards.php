<?php
/**********
 *Write a Program DeckOfCards.java , to initialize deck of cards having suit ("Clubs",
  "Diamonds", "Hearts", "Spades") & Rank ("2", "3", "4", "5", "6", "7", "8", "9", "10",
  "Jack", "Queen", "King", "Ace").
 *@authour amanverma
 *@version 2.0
 *Date 08/01/2019
 */
    require('Utility.php');
    /* Top level error handler to handle errors */
    set_error_handler(function ($errNumber, $errMessage, $error_file, $error_line) {
    echo "!!!!Error Occured!!!!!!!\n";
    echo "Error: [$errNumber] $errMessage - $error_file:$error_line \n";
    echo "Terminating!!!!!!!!!\n";

    die();
    });

   /**
     *  Top level exception handler ;
     * called aitomaticaly by php at exception occurence
     */
     set_exception_handler(function ($e) 
     {
     echo "\nException Occurred\n";
     echo $e->getMessage();
     });

     /* class to initialize the property of the card with suit and rank */
     class card
     {
     /* variables to store properties od cars */
     public $suit;
     public $rank;

     /* constructor of class */
     function __construct($suit, $rank)
     {
        $this->suit = $suit;
        $this->rank = $rank;
     }
     }

   /**
     * finction to give the deck of cards as 2d array
     * @return arr the 2d array of the deck 
     */
     function getDeck()
     {
     /* no of suits in the deck */
     $suits = ["♣", "♦", "♥", "♠"];
     /* no of ranks in the deck */
     $rank = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
     /* deck array  wth the empty value */
     $deck = [];
     for ($i = 0; $i < count($suits); $i++) {
        for ($j = 0; $j < count($rank); $j++) {
            /* giving the values of cards in the deck array */  
            $deck[$i][$j] = new card($suits[$i], $rank[$j]);
            }
           }
    //print_r($deck);
     return $deck; 
     }

/**
 * shuffle the deck of cards and return it
 * @param deck the 2d array containing deck of cards
 * @return deck the shuffled deck of cards
 */
function cardShuffle($deck)
{
    for ($i = 0; $i < count($deck); $i++) {
        for ($j = 0; $j < count($deck[$i]); $j++) {
            $r1 = rand(0, 3);
            $c1 = rand(0, 12);
            $r = rand(0, count($deck));
            $r2 = rand(0, 3);
            $r = rand(0, count($deck));
            $c2 = rand(0, 12);
            $r = rand(0, count($deck));
            $temp = $deck[$r1][$c1];
            $r = rand(0, count($deck));
            $deck[$r1][$c1] = $deck[$r2][$c2];
            $deck[$r2][$c2] = $temp;
        }
    }
//    / print_r($deck);
    return $deck; 
    }

      /**
        * distribute the deck of cards between 4 players   
        * @param deck the deck of cards 2d array (Shuffled)
        * @return players the 2d array of distributed cards
        */
         function distribute($deck)
        {
        $players = [];
        for ($i = 0; $i < 4; $i++) {
           for ($j = 0; $j < 9; $j++) {
            $r = rand(0, 3);
            $c = rand(0, count($deck[$r]) - 1);
            $players[$i][$j] = $deck[$r][$c];
            array_splice($deck[$r], $c, 1);
           }
         } 
        return $players;
       }

   /**
     * Sort the player distributed cards and return it
     * @param player the 2d array containing the distributed cards
     * @return player the sorted distributed cards
     */
      function sortPlayer($player)
      {
      for ($k = 0; $k < 4; $k++) {
          for ($i = 1; $i < count($player[$k]); $i++) {
           // getting value for back element
               $j = ($i - 1);
           //saving it in temperary variable;
             $temp = $player[$k][$i];
             while ($j >= 0 && $player[$k][$j]->rank >= $temp->rank) {
                $player[$k][$j + 1] = $player[$k][$j];
                $j--;
              }
              $player[$k][$j + 1] = $temp;

          }
        }
       return $player;
      }

/**
 * function to display the 2d array of distributed cards b/w 4 players
 * @param player the 2d array containing the cards to display
 */
function showCards($player)
{
    $special = ["Jack", "Queen", "King", "Ace"];
    for ($i = 0; $i < count($player); $i++) {
        $print = "{";
        echo "\n\nPlayer " . ($i + 1) . ":";
        for ($j = 0; $j < count($player[$i]); $j++) {
            if ($player[$i][$j]->rank > 10) {
                $print .= $special[$player[$i][$j]->rank % 11] . " of " . $player[$i][$j]->suit . ",";
            } else {
                $print .= $player[$i][$j]->rank . " of " . $player[$i][$j]->suit . ",";
            }
        }
        $print = substr($print, 0, -1);
        echo $print . "}";
    }
    echo "\n";
}

/**
 * function to run and test the program 
 */
function run()
{
    echo "Deck of cards \n";
    fscanf(STDIN, "%s\n");
    $deck = getDeck();
    echo "enter to shuffle \n";
    fscanf(STDIN, "%s\n");
    $deck = cardShuffle($deck);
    echo "Enter to distribute";
    fscanf(STDIN, "%s\n");
    $players = distribute($deck);
    $players = sortPlayer($players);
    //print_r($players);
    showCards($players);
}
 
/*running the program*/ 
run();
?>