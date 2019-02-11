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
// set_error_handler(function($errNumber,$errMessage,$errfile,$errline)
// {
//   echo("!!!!!!Error Occurred.!!!!!!!!\n");
//   echo("Error:[$errNumber] $errMessage - $error_file:$error_line\n");
//   echo(" program Terminated.!!!!\n");
// });
// require('Utility.php');
// require_once('StockData.php');
// /* create the function to choose options */
// function choice($account)
// {
//         echo("choice the option\n");
//         $num = Utility::getInteger();
//         echo ("*************Commercial Data Processing*************\n");
//         echo "Enter 1 to create a new stock account from the file\n";
//         echo "Enter 2 to buy New Stock from the StockList\n";
//         echo "Enter 3 to Sell Stocks which is available at user\n";
//         echo "Enter 4 to Print Stock Report\n";
//         echo "Enter 5 to save the account and exit\n";
//         switch($num)
//         {
//             case 1:$newAccount = $account;
//             echo ("New stock account is \n");
//             /*to print the new account */
//             Utility::printAccount($account);
//             echo "\n";
//             break;
//             case 2:
//             /* calling function to buy a share and as per Operation adding or subtracting to account */
//             $account = Utility::buyStock($account);
//             echo "\n\n";
//             break;
//             case 3:
//             /* calling function to sell share from account */
//             $account = Utility::sellStock($account);
//             echo "\n\n";
//             break;
//             case 4:
//             //printing the report
//             echo "Printing the stock account details of customer\n\n";
//             Utility::stockReport($account);
//             break;
//             case 5: 
//             echo "Account Saved to file\n";
//             break;
//             default:
//             echo "enter a valid option\n";
//             break;
//         }
// }
// /*checking the User Account to know in detail */
// $file = "Account.json";
// $fileStr = file_get_contents($file);
// $account = json_decode($fileStr); 
// /*calling the function */
// choice($account);

set_error_handler(function ($number, $message, $error_file, $error_line) 
{
    echo "!.....Error Occured......!\n";
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
                        //to print the new account
                        Utility::printAccount($account);
                        echo "\n";
                        break;
 
            case 2 :
                        //calling function to buy a share and adding to account
                        $account = Utility::buy($account);
                        echo "\n\n";
                        break;
            case 3 :
                        //calling function to sell share from account
                        $account = Utility::sell($account);
                        echo "\n\n";
                        break;
            case 4 :
                        //printing the report
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
 
 
//checking the user account
$account = json_decode(file_get_contents("Account.json"));
//calling the user input
choice($account);
?>
 ?>
