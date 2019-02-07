<?php
/**********
 * Implementation of banking Cash Counter Using Queue 
 *@authour amanverma
 *@version 2.0
 *Date 03/01/2019
 ****************************************************************************************/
require('Utility.php');
require('Queue.php');
/**
 * create the Object of Queue to access the properties of Queue class
 */
$queue = new Queue();
/**
 * now Cash Counter person decides the How Many person
 * come in the Queue to deposite Or withdraw the amount
 */
echo ("Enter the Number of People will be Stand in the Queue..!\n");
$people = Utility::getInt();
$str = "";
/**
 * shows the amount present the bank all ready
 */
// echo ("Available amount in the BankAccount..!\n");
// $amount = Utility::getInt();
$amonut=1000;
/**
 * now enter the name of people come to deposite or withdraw the money..!
 */
echo ("Enter the name of people who come in Queue..!\n");
for ($i = 0; $i < $people; $i++) {
    /**
     * Read the name of people by user..!
     */
    $name = Utility::getString();
    /**
     * now add these peoples into queue.
     */

    $queue->enQueue($name);
}
echo ("People in the Queue..!\n");
$queue->display();
/**
 * now the people one by one come to deposite or withdraw 
 * the amount as per amount present in the bank account means start Traversing one by one 
 */$r=0;
for ($i = 0; $i < $people; $i++) {
    $qname = $queue->deQueue();
    $r++;
    echo "($r) .-->.$qname .\n";
    
   
    /**
     * now create the choise to choose the people want to deposite or withdraw
     */
    echo "1 - deposite: \n";
    echo "2 - Withdraw: \n";
    echo "3 - PresentAmount: \n";
    echo "4 - Quit: \n";
    $choice = Utility::getInt();
    switch ($choice) {
        case 1:
            echo ("Enter the amount u want to deposite..!\n");
            $depositeAmount = Utility::getInt();
            while($depositeAmount < 0) {
                echo ("Enter the amount greater the Zero..!\n");
                $depositeAmount = Utility::getInt();
            }
            $amount = $depositeAmount + $amount;
            echo ("Updated Amount:" . $amount . "\n");
            break;
        case 2:
            echo ("Enter the amount u Want to withdraw..!\n");
            $withdrawAmount = Utility::getInt();
            while ($withdrawAmount > $amount) {
                if ($withdrawAmount < 0) {
                    echo ("Enter the withdraw amount greater than zero & lessor the available amount.!\n");
                    $withdrawAmount = Utility::getInt();
                }
                echo ("Enter the lessor withdraw available amount..!\n");
                $withdrawAmount = Utility::getInt();
            }
            echo ("Withdraw Amount:" . $withdrawAmount . "\n");
            $amount = $amount - $withdrawAmount;
            echo ("Updated Amount:" . $amount . "\n");
            break;
        case 3:
            echo ("Available Amount in the Bank\n");
            echo ($amount . "\n");
            break;
        case 4:
            break;
        default:
            echo ("Enter the valid option. \n");
    }
    //echo ((int)$qname ." " +"deQueued from Row..!" . "\n");
}
?>