<?php
/**
 * @fileName:-SingletonPattern.php
 *  implementation of the Singleton Pattern
 * @purposre using the Single instance of that class access to the different classes  
 * @author  AmanVerma
 * @version: 1.0
 * @Date -14/02/2019
 */
/**
 * set top level Exception handler function to handle exception
 */
set_exception_handler(function ($e) {
    echo ("\n!.....Exception Occurred ...!");
    echo $e - getMessage();
});
require('PhoneBorrower.php');
require_once('Utility.php');
class Singleton
{
    function main()
    {
        echo("enter the brand name..!");
        $brand = Utility::getStringArray();
        echo("enter the model name..!");
        $model = Utility::getStringArray();

        echo("BEGIN TESTING SINGLETON PATTERN\n\n");
        $phoneBorrower1 = new PhoneBorrower();
        $phoneBorrower2 = new PhoneBorrower();
        $phoneBorrower1->borrowPhone($brand,$model);
        echo("phoneBorrower1 asked to borrow the phone:\n");
        echo("phoneBorrower1 brand and model:\n");
        echo($phoneBorrower1->getBrandAndModel()."\n\n$");

        $phoneBorrower2->borrowPhone($brand, $model);
        echo ("phoneBorrower2 asked to borrow the phone:\n");
        echo ("phoneBorrower2 brand and model:\n");
        echo ($phoneBorrower2->getBrandAndModel() . "\n\n");

        $phoneBorrower1->returnPhone();
        echo("phoneBorrower1 returned the phone");

        $phoneBorrower2->borrowPhone();
        echo("phoneBorrower2 Brand and Model:");

        echo($phoneBorrower1->getBrandAndModel()."\n\n");

        echo("END TESTING SINGLETON PATTERN\n");

    }
}
Singleton::main();
?>