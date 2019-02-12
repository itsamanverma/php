<?php
/**********
 *Write a Program DeckOfCards.java , to initialize deck of cards having suit ("Clubs",
 * "Diamonds", "Hearts", "Spades") & Rank ("2", "3", "4", "5", "6", "7", "8", "9", "10",
 * "Jack", "Queen", "King", "Ace").
 * @authour amanverma
 * @version 2.0
 * Date 08/01/2019
 */
    require('Utility.php');
    require('Queue.php');
    class card
    {
    /* variables to store properties od card */
    public $suit;
    public $rank;
    /* constructor of class */
    public function __construct($suit, $rank)
    {
        $this->suit = $suit;
        $this->rank = $rank;
    }
    /* toString method is overidden to output the object as string */
    public function __tostring()
    {
        $special = ["Jack", "Queen", "King", "Ace"];
        if ($this->rank > 10) {
            return $special[$this->rank % 11] . $this->suit;
        }
        return $this->rank . $this->suit;
    }
    }
    class Player 
    {
    public $name;
    public $cards;
    public function __tostring()
    {
        return $this->name;
    }
    public function __construct(String $name)
    {
        $this->cards = new Queue();
        $this->name = $name;
    }
    public function pushCard($card)
    {
        $this->cards->enqueue($card);
    }
    public function sortDeck()
    {
        while ($this->cards->isEmpty() === false) {
            $ar[] = $this->cards->dequeue();
        }
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
      /* deck array wth the empty value */
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
           // print_r($deck);
          return $deck;
        }
        /**
         * create the playerDist function
         */
         function playerDist($deck)
         {
         $playerQue = new queue();
         for ($i = 1; $i < 5; $i++) {
         echo "Enter player $i name ";
         $player = new Player(Utility::String_input());
         for ($j = 0; $j < 9; $j++) {
            $r = rand(0, 3);
            $c = rand(0, count($deck[$r]) - 1);
            $player->pushCard($deck[$r][$c]);
            array_splice($deck[$r], $c, 1);
            }
          $playerQue->enqueue($player);
          }
          return $playerQue;
          }
         /**
          * create the 
          */  
         function ShowCards(queue $playerQue)
         {
         while ($playerQue->isEmpty() == false) {
         $pl = $playerQue->dequeue();
         echo $pl . "-{";
         while ($pl->cards->isEmpty() == false) {
            echo $pl->cards->dequeue() . " ,";
         }
         echo "}\n\n";
         }
         } 
         $show = getDeck();
         $show = playerDist($show);
         ShowCards($show);
         ?>