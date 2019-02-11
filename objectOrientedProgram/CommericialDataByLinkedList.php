<?php
 /** 
 * Maintain the List of CompanyShares in a Linked List So new CompanyShares can
 * be added or removed easily. Do not use any Collection Library to implement Linked
 * List.
 * @author Amanverma
 * @version 1.0
 * Date: 11/02/2019
 ******************/
/* set top level error handler function to handle in case of error occurence */
set_error_handler(function ($number, $errMessage, $error_file, $error_line) 
{
    echo "!<<<<<<<<<Error Occured>>>>>>>!\n";
    echo "Error: [$number] $errMessage - $error_file:$error_line \n";
    echo "!............program Terminating...........!\n";
    die();
});
require_once('Utility.php');
require_once('Stack.php');
require_once('Queue.php');
require_once('Node.php');
require_once('StockData.php');
 
/* stockAcount class for perfoming operation on queue and stack */
class StockAccount
{
    public $account;
    public $stack;
    public $queue;
    /* initialization of constructor */
    public function __construct($account = [],$stack = [], $queue =[])
    {
        $this->account = $account;
        $this->stack = $stack;
        $this->queue = $queue;
    }
        /* Get the value of account */ 
        public function getAccount()
        {
                return $this->account;
        }

        /**
         * Set the value of account
         * @return  self
         */ 
        public function setAccount($account)
        {
                $this->account = $account;
                return $this;
        }

        /* Get the value of stack*/ 
        public function getStack()
        {
                return $this->stack;
        }

        /**
         * Set the value of stack
         * @return  self
         */ 
        public function setStack($stack)
        {
                $this->stack = $stack;
                return $this;
        }

        /* Get the value of queue */ 
        public function getQueue()
        {
                return $this->queue;
        }

        /**
         * Set the value of queue
         * @return  self
         */ 
        public function setQueue($queue)
        {
                $this->queue = $queue;
                return $this;
        }
    
}
/**
 * funtion to buy stocks from the list and add it to the account
 */
function buy($stockacc)
{
    $account = $stockacc->account;
    $stack = $stockacc->stack;
    $queue = $stockacc->queue;
    //var_dump($account);
    //list var to store the list the stock to purachase from
    $list = printStockList();
    //askins use rfor input
    echo "Enter No with Stock To Buy : ";
    //var ch to store stock to buy
    $ch = Utility::validInt(Utility::integer_Input(), 1, 8);
    echo $list[$ch - 1]->name . " selected!\nEnter No Of Shares To Buy of " . $list[$ch - 1]->name . " : ";
    //amnt to store the no of shares to buy
    $amnt = Utility::validInt(Utility::integer_Input(), 0, 90000);
    //getting the stock from the list
    $stock = $list[$ch - 1];
    //creating new stock
    $stock = new StockData($stock->name, $stock->price, $amnt);
    //adding the stock to the account if already in the list and return
    for ($i = 0; $i < count($account); $i++) {
        if ($account[$i]['name'] == $stock->name) {
            $account[$i]['quantity'] += $stock->quantity;
            echo "Bought $stock->quantity " . "$stock->name shares successfully";
            $stack[]= ($account[$ch - 1]->name . " bought");
            $queue[]=("$amnt " . $account[$ch - 1]->name . "shares bought at " . date("h:i:s D d/m/y"));
            $stockacc->account = $account;
            $stockacc->stack = $stack;
            $stockacc->queue = $queue;
            return $stockacc;
        }
    }
    //or else adds the new stack the end of the list
    $account[] = $stock;
    echo "Bought $stock->quantity " . "$stock->name shares successfully";
    $stack[]=(" bought");
    $queue[]=($amnt . " " . $stock->name . " shares bought at " . date("h:i:s D d/m/y"));
    //waiting for user to see the result
    fscanf(STDIN, "%s\n");
    $stockacc->account = $account;
    $stockacc->stack = $stack;
    $stockacc->queue = $queue;
    return $stockacc;
}
/**
 * function to sell the stock from the list
 */
function sell($stockacc)
{
    $account = $stockacc->account;
    $stack = $stockacc->stack;
    $queue = $stockacc->queue;
    //show the stock from the list to the user
    printAccount($account);
    //taking the user input
    echo "Enter No with Stock To Sell : ";
    //validating the input
    $ch = Utility::validInt(Utility::integer_Input(), 1, count($account));
    echo $account[$ch - 1]->name . " selected!\nEnter No Of Shares To Sell of " . $account[$ch - 1]->name . " : ";
    $qt = Utility::validInt(Utility::integer_Input(), 1, $account[$ch - 1]->quantity);
    //removing the stock
    $account[$ch - 1]->quantity -= $qt;
    $stack[]=($account[ch - 1]->name . " sold");
    $queue[]=($account[ch - 1]->name . " shares sold at " . date("h:i:s D d/m/y"));
    print_r($stack);
    print_r($queue);
    echo "sold $qt shares successfully";
    //check if the shares are empty to delete the entry completely
    if ($account[$ch - 1]->quantity == 0) 
    {
        array_splice($account, ($ch - 1), 1);
    }
    fscanf(STDIN, "%s\n");
    $stockacc->account = $account;
    $stockacc->stack = $stack;
    $stockacc->queue = $queue;
    return $stockacc;
}
/**
 *  function to save the stocks to the file
 */
function save($stockacc)
{
    file_put_contents("AccountList.json", json_encode($stockacc));
}
//function to display the menu and run the program
function menu($stockacc)
{
    echo "Menu :\n";
    echo "Press 1 to Enter To Buy New Stock \nPress 2 to Sell Stocks\n";
    echo "Enter 3 to Print Stock Report\nEnter 4 to see Transaction History\nEnter anything else to exit\n";
    $choice = Utility::integer_Input();
    //switch case to run according to condition
    switch ($choice) 
    {
        case '1':
            $stockacc = buy($stockacc);
            echo "\n\n";
            menu($stockacc);
            break;
        case '2':
            $stockacc = sell($stockacc);
            echo "\n\n";
            menu($stockacc);
            break;
        case '3':
            report($stockacc);
            menu($stockacc);
            break;
        case '4':
            transactions($stockacc->queue);
            menu($stockacc);
            break;
        default:
            echo "press 1 to save";
            if (Utility::integer_Input() == 1) { 
                //var_dump($account); 
                save($stockacc);
                echo "Transaction saved\n";
            }
            echo "Exit  ..!!!\n";
            break;
    }
}
/**
 * function to display the report of the stocks
 */
function report($stockacc)
{
    $account = $stockacc->account;
        // /    var_dump($portfolio);
    $total = 0;
    echo "Stock Name | Per Share Price | No. Of Shares | Stock Price\n";
    foreach ($account as $key) {
        echo sprintf("%-10s | rs %-12u | %-13u | rs %u", $key->name, $key->price, $key->quantity, ($key->quantity * $key->price)) . "\n";
        $total += ($key->quantity * $key->price);
    }
    echo "Total Value Of Stocks is : " . $total . " rs\n";
    echo "enter to menu ";
    fscanf(STDIN, "%s\n");
}
function transactions($queue)
{
    echo "Transaction History :\n";
    foreach ($queue as $key) {
        echo $key."\n";
    }
    echo"\n enter to Menu\n";
    fscanf(STDIN, "%s\n");
}
//function to print the stock currently in the stock
function printAccount($stockacc)
{
    $account = $stockacc;
    echo "No | Stock Name | Share Price | No. Of Shares | Stock Price \n";
    $i = 0;
    foreach ($account as $key) {
        echo sprintf("%-2u | %-10s | rs %-8u | %-13u | rs %u", ++$i, $key->name, $key->price, $key->quantity, ($key->quantity * $key->price)) . "\n";
    }
}
/**
 * function to print the list the stocks available to buy
 */
function printStockList()
{
    $list = json_decode(file_get_contents("StockList.json"));
    echo "No | Stock Name | Share Price | Available\n";
    $i = 0;
    foreach ($list as $key) 
    {
        echo sprintf("%-1u. | %-10s | Rs %-12u | %-9u", ++$i, $key->name, $key->price, $key->Quantity) . "\n";
    }
    return $list;

}
// /**
//  * convert standard stdClass object to custom object cast
//  * @param $destination Object to which to convert
//  * @param stdClass $source Source std:class object
//  */
// function cast(&$destination, stdClass $source)
// {
//     $sourceRef = new ReflectionObject($source);
//     $sourceProperties = $sourceRef->getProperties();
//     foreach ($sourceProperties as $sourceProperty) {
//         $name = $sourceProperty->getName();
//         if (gettype($destination->{$name}) == "object") {
//             echo "rec";
//             cast($destination->{$name}, $source->$name);
//         } else {
//             $destination->{$name} = $source->$name;
//         }
//     }
// }
// /**
//  * function fixCast take two arguments which holds destination and source
//  */
// function fixCast(&$destination, $source)
// {
//     if (is_array($source)) {
//         $getClass = get_class($destination[0]);
//         $array = array();
//         foreach ($source as $sourceItem) {
//             $obj = new $getClass();
//             fixCast($obj, $sourceItem);
//             $array[] = $obj;
//         }
//         $destination = $array;
//     } else {
//         $sourceReflection = new \ReflectionObject($source);
//         $sourceProperties = $sourceReflection->getProperties();
//         foreach ($sourceProperties as $sourceProperty) {
//             $name = $sourceProperty->getName();
//             if (is_object(@$destination->{$name})) {
//                 fixCast($destination->{$name}, $source->$name);
//             } else {
//                 $destination->{$name} = $source->$name;
//             }
//         }
//     }
// }
//checking the user account
?>