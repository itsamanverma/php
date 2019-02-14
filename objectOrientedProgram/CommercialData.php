<?php
/**
* StockAccount.java implements a data type that
* might be used by a financial institution to keep track of customer information.
* the StockAccount class implements following methods  
* @author Amanverma
* @version 1.0
* Date: 08/02/2019
******************/
/**
 * Set the top level error handler function to handle the error occurence during the runtime 
 */
set_error_handler(function ($number, $message, $error_file, $error_line) 
{
    echo "!.......Error Occured......!\n";
    echo "Error: [$number] $message - $error_file:$error_line \n";
    echo " !.......program Terminating.....!\n";
    die();
});
 
/* require the files from the below files */
require ("Utility.php");
require_once ('StockData.php');
 
function choice($account)
{
    $ch = 0;
    while($ch!=5)
    {
        //menu shown to the user
        echo "*************Commercial Data Processing*************\n";
        echo "Enter 1 to create a new stock account from the file\n";
        echo "Enter 2 to buy New Stock from the StockList\n";
        echo "Enter 3 to Sell Stocks\n";
        echo "Enter 4 to Print Stock Report\n";
        echo "Enter 5 to save the account and exit\n";
        $ch = Utility::getInteger();
        //switch case to run according to condition
        switch ($ch) 
        {
            case 1 :    $newAccount = $account;
                        echo "New stock account is \n";
                        /*to print the new account*/
                        Utility::printAccount($account);
                        echo "\n";
                        break;
            case 2 :
                        /*calling function to buy a share form Utility and subtract the amount to user account*/
                        $account = Utility::buy($account);
                        echo "\n\n";
                        break;
            case 3 :
                        /*calling function to sell share from Utility and adding amount as per share price to the account*/
                        $account = Utility::sell($account);
                        echo "\n\n";
                        break;
            case 4 :
                        /* calling the printing the report function from the Utility class*/
                        echo "Printing the stock account details of customer\n\n";
                        Utility::report($account);
                        break;
            case 5 : 
                        echo "Account Saved to file\n";
                        break;
           default :
                        echo "enter a valid option\n";
                        break;
        }
    }
}
 
 
/* checking the user account (no of share available to the user and amount )*/
$account = json_decode(file_get_contents("Account.json"));
/*calling the choice function to takes user input what he want */
choice($account);
?>
