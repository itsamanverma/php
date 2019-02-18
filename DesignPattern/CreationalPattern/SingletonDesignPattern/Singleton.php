<?php
/********************************************************************************************
 * Purpose  : Use Singleton Pattern to create a Book and Author deatils borrow or return by
 *           Book Borrower.
 * File Name: SingletonPaterrn.php
 * @author  : AmanVerma
 * Since    :14/02/2019 
 *****************************************************************************************/
/** 
 *require following to work
 */
require_once('MobileBorrower.php');
require_once('/home/admin1/Desktop/BridgelabzProgram/DesignPattern/Utility.php');
/**
 *testing the singleton implementation
 */
class Singleton
{
    static function main()
    {
echo "\n SINGLETON PATTERN\n\n";

echo("enter the Company name\n");
$company =Utility::String_input();
echo("enter the model name\n");
$model = Utility::String_input();
/**
 *instatiating MobileBorrower class
 */
$mobileBorrower1 = new MobileBorrower($company,$model);
$mobileBorrower2 = new MobileBorrower($company,$model);
 
/* First borrower borrowing the mobile */
$mobileBorrower1->borrowMobile($company,$model);
echo "First borrower making request to borrow the mobile\n";
echo "First borrower's mobile with Company and Model: \n";
/* getting the model and company details */
echo $mobileBorrower1->getCompanyAndModel() . "\n\n";
 
/* Second borrower borrowing the mobile */
$mobileBorrower2->borrowMobile($company,$model);
echo "Second borrower making request to borrow the mobile\n";
echo "Second borrower's mobile with Company and Model: \n";
/* getting the model and company details */
echo $mobileBorrower2->getCompanyAndModel() . "\n\n";
 
/* First borrower returning the mobile */
echo "First borrower returned the mobile to Company\n\n";
$mobileBorrower1->returnMobile();
 
/* Second borrower again borrowing the mobile */
$mobileBorrower2->borrowMobile($company,$model);
echo "Second borrower again making a request to borrow the mobile afer first borrower returned it\n";
echo "Second borrower's Company and Model: \n";
/* getting the model and company details */
echo $mobileBorrower1->getCompanyAndModel() . "\n\n";
 
/* gets class as a reflection class */
$reflector = new ReflectionClass('MobileSingleton');
 
/* getting the properties of the class as an array */
$properties = $reflector->getProperties();
echo "printing properties of class\n";
print_r($properties);
  
/* getting the default properties of the class */
$defaults = $reflector->getDefaultProperties();
echo "printing properties of class\n";
print_r($defaults);
    }
}
Singleton::main();
?>