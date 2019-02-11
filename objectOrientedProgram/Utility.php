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
                $cards[$i][$j] = $rank[$j] . " " . $suits[$i];
            }
        }
        return $cards;
    }
    /**
     * function to suffled the card 
     */
    public static function suffleCards($cards, $suits, $rank)
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
     
        /* function to print the stock currently in the customer account */
        public static function printAccount($account)
        {
            echo "No | Stock Name | Share Price | No. Of Shares | Stock Price \n";
            $i = 0;
 
            //looping over and printing the account details
            for ($i=1; $i <count($account) ; $i++) 
            {
                $key = $account[$i];
                echo sprintf("%-2u | %-10s | rs %-8u | %-13u | rs %u", $i, $key->name, $key->price, $key->quantity, ($key->quantity * $key->price)) . "\n";
            }
        }
        /**
        * function to display the report of the stocks in account
        */
        public static function report($account)
        {
            $total = 0;
            echo "Stock Name | Per Share Price | No. Of Shares | Stock Price\n";
 
            //looping over and printing the account details and the account balance
            for ($i=1; $i < count($account) ; $i++) 
            {
                $key = $account[$i];
                echo sprintf("%-10s | rs %-12u | %-13u | rs %u", $key->name, $key->price, $key->quantity, ($key->quantity * $key->price)) . "\n";
                $total += ($key->quantity * $key->price);
            }
            echo "\n";
            echo "Total Value Of Stocks is : " . $total . " rs\namount left in account : ".$account[0]->account."\n\n";;
        }
        /*
         * funtion to but stocks from the list and add it to the account
         */
          public static function buy($account)
           {
            //var_dump($account);
            //list var to store the list the stock to purachase from
            $list = Utility::printStockList();
            //asking use rfor input
            echo "Enter No with Stock To Buy : ";
            //var ch to store stock to buy
            $ch = Utility::validInt(Utility::getInteger(), 1, 8);
            echo $list[$ch-1]->name . " selected!\n";
            echo "Enter No Of Shares To Buy of " . $list[$ch-1]->name . " : ";
            //amount to store the no of shares to buy
            $amnt = Utility::validInt(Utility::getInteger(), 0, $list[$ch-1]->Quantity);
            if($account[0]->account<($list[$ch-1]->price*$amnt))
            {
                echo " Insufficient fund\n";
                return;
            }
            $list[$ch-1]->Quantity -= $amnt;
            Utility::saveList($list);
            //getting the stock from the list
            $stock = $list[$ch - 1];
            //creating new stock
            $stock = new StockData($stock->name, $stock->price, $amnt);
            //adding the stock to the account if already in the list and return
            $account[0]->account-= $amnt;
            for ($i = 1; $i < count($account); $i++) 
            {
                if ($account[$i]->name == $stock->name) 
                {
                    $account[$i]->quantity += $stock->quantity;
                    echo "Bought $stock->quantity " . "$stock->name shares successfully";
                    Utility::saveAccount($account);
                    return $account;
                }
            }
            //or else adds the new stack the end pf the list
            $account[] = $stock;
            echo "Bought $stock->quantity " . "$stock->name shares successfully";
            //waiting for user to see the result
            Utility::saveAccount($account);
            return $account;
            }
 
         /**
           * this function save item into a list
           */
            public static function saveList(&$list)
            { 
            file_put_contents("stock.json", json_encode($list));
            }
        
 
        //function to save the stocks to the file
        public static function saveAccount($account)
        {
            file_put_contents("Account.json", json_encode($account));
        }
 
        /**
        * function to print the list the stocks available to buy
        */
        public static function printStockList(int $s=0)
        {
            $list = json_decode(file_get_contents("stock.json"));
            if($s===0)
            {
                echo "No | Stock Name | Share Price | Available\n";
                $i = 0;
                foreach ($list as $key) 
                {
                    echo sprintf("%-1u. | %-10s | Rs %-12u | %-9u", ++$i, $key->name, $key->price , $key->Quantity) . "\n";
                }
            }
            return $list;
        }
 
        public static function sell($account)
        {
            //show the stock from the list to the user
            Utility::printAccount($account);
            //taking the user input
            echo "Enter No with Stock To Sell : ";
            //validating the input
            $ch = Utility::validInt(Utility::getInteger(), 1, count($account));
            echo $account[$ch]->name . " selected!\nEnter No Of Shares To Sell of " . $account[$ch]->name . " : ";
            $qt = Utility::validInt(Utility::getInteger(), 1, $account[$ch]->quantity);
            //removing the stock
            $account[$ch]->quantity -= $qt;
            $list = Utility::printStockList(1);
            $list[$ch-1]->Quantity += $qt ;
            $account[0]->account += ($qt*$list[$ch-1]->price);
            Utility::saveList($list);
            Utility::saveAccount($account);
            echo "sold $qt shares successfully";
            //check if the shares are empty to delete the entry completely
            if ($account[$ch]->quantity == 0) 
            {
                array_splice($account, ($ch), 1);
            }
            return $account;
        }
        /**
         * function to validate integer input from the user and ask the user until proper input is fount and return it
         * @param int the value to verify as int
         * @param min the minimum value of the integer
         * @param max the maximum value of the integer
         * @return int the valid int in that range 
         * 
         */
        public static function validInt($int, $min, $max)
        {
            while (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) 
            {
                echo ("Variable value is not within the legal range\n");
                echo "enter again : ";
                $int = Utility::getInteger();
            }
            return $int;
        }
}