<?php

/**********
 * Helper function containing methods to use in other php classes
 *@authour amanverma
 *@version 2.0
 *Date 08/01/2019
 */
class Utility
{
    /* 
     * to get input unless its an Integer 
     * @return Integer value
     */
    public static function getInt()
    {
        fscanf(STDIN, "%d\n", $val);
        while (!is_numeric($val)) {
            echo ("invalid input enter the valid input..!");
            fscanf(STDIN, "%d\n", $val);
        }
        return $val;
    }
    /**
     * to get input unless its an String
     * @return String value
     */
    public static function getString()
    {
        fscanf(STDIN, "%s\n", $val);
        while (!is_string($val)) {
            echo "Invalid input Try again: ";
            fscanf(STDIN, "%s\n", $val);
        }
        return $val;
    }
    /**
     * to get input unless its an boolean value
     * @return Boolean value
     */

    public static function getBoolean()
    {
        fscanf(STDIN, "%s\n", $val);
        while ($val !== 't' && $val !== 'f') {
            echo "invalid input enter again\n";
            fscanf(STDIN, " %s\n ", $val);
        }
        return $val;
    }
    /**
     * to get input unless its an decimal value
     * @return Double Value
     */
    public static function getDouble()
    {
        fscanf(STDIN, "%f\n", $val);
        while (!is_float($val)) {
            echo "invalid input enter again\n";
            fscanf(STDIN, " %f\n ", $val);
        }
        return $val;
    }
    /**
     * to get String as Input 
     */
    public static function String_input()
    {
        fscanf(STDIN, "%s\n", $str);
        while (!(strlen($str) > 0) || (is_numeric($str)) || $str == null) {
            echo "Enter a valid String \n";
            $str = Utility::String_input();
        }
        return $str;
    }
    /**
     * to get integer as input
     */
    public static function getInteger()
    {
        fscanf(STDIN, "%s", $val);
        while (!is_numeric($val) || $val > (int)$val) {
            echo ("enter the valin integer\n");
            fscanf(STDIN, "%s", $val);
        }
        return $val;
    }

    /**
     * function to stored the normal combination
     */
    public static function storeCards($cards, $rank, $suits)
    {

        for ($i = 0; $i < sizeof($suits); $i++) {
            for ($j = 0; $j < sizeof($rank); $j++) {
                $cards[$i][$j] = $rank[$j] . "," . $suits[$i];
            }
        }
        return $cards;
    }
    /**
     * function to suffled the card 
     */
    public static function suffleCards($cardArr, $suits, $rank)
    {
        for ($i = 0; $i < sizeof($cards); $i++) {
            for ($j = 0; $j < sizeof($cards[$i]); $j++) {
                $rand1 = rand(0, 3);
                $rand2 = rand(0, 11);

                $temp = $cards[$rand1][$rand2];
                $cards[$rand1][$rand2] = $cards[$i][$j];
                $cards[$i][$j] = $temp;
            }
        }
        return $cards;
    }
    /**
     * create the function to print the suffled Cards
     */
    public static function printCards($cards)
    {
        echo "after suffling \n";

        for ($i = 0; $i < sizeof($cards); $i++) {
            echo "Player " . ($i + 1) . " : [";
            for ($j = 0; $j < sizeof($cards[$i]); $j++) {
                echo $cards[$i][$j] . " ";
            }
            echo "]\n\n";
        }
    }
    /**
     * finction to give the deck of cards as 2d array
     * @return arr the 2d array of the deck 
     */
    public static function getDeck()
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
    public static function cardSuffled($deck)
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

}