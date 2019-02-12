<?php
/**
 * Purpose : Design of simple Address Book.
 * @file : AddressBook.php
 * @author : AmanVerma
 * @version : 1.0
 * @since : 11/02/2019
 ******************************************************************************/
include 'Utility.php';
include_once 'AddressBookData.php';
class Person extends Contact
{
}
/**
 * function to create the person object asked by the user.
 * @param : details of the person stored to the AddressBook.json in array from.
 */
function createContact(&$addressBook)
{
/* creating the object.*/
/* takes user input for person object */
    $person = new Contact();
    echo "Enter Firstname \n";
    $fName = Utility::String_input();
    $person->setFName($fName);
    echo "Enter Lastname \n";
    $lName = Utility::String_input();
    $person->setLName($lName);
    echo "Enter State\n";
    $state = Utility::String_input();
    $person->setState($state);
    echo "Enter City\n";
    $city = Utility::String_input();
    $person->setCity($city);
    echo "Enter pinCode of $city\n";
    $pinCode = Utility::getInteger();
    $person->setPinCode($pinCode);
    echo "Enter Address\n";
    $address = Utility::getString();
    $person->setAddress($address);
    echo "Enter Mobile Number \n";
    $phoneNo = Utility::getInteger();
    $person->setPhoneNo($phoneNo);

/* storing the newly created object in to AddressBook.json file in array from */
    $person = new Contact($fName, $lName, $state, $city, $pinCode, $address, $phoneNo);
    $addressBook[] = $person;
}
/**
 * function to edit the details of a person
 * @param : person object to edit the details
 */
function edit(&$person)
{
    echo "Enter number to change the details of Person ";
    $choice = Utility::getInt();
    switch ($choice) {
        case '1':
            echo "Enter State\n";
            $person->state = Utility::String_input();
            echo "Enter City\n";
            $person->city = Utility::String_input();
            echo "Enter pinCode \n";
            $person->pinCode = Utility::getInt();
            echo "Enter Address\n";
            $person->address = Utility::String_input();
            echo "Address changes successfully \n";
            echo "Enter Mobile Number \n";
            $person->phoneNo = Utility::getInt();
            echo "Mobile no changed successfully\n";
            break;
    }
}
/**
 * Function to delete the object of person from the array
 */
function delete(&$arr)
{
    $i = search($arr);
    try {
        if ($i > -1) {
            array_splice($arr, $i, 1);
            echo "Contact Deleted\n";
        } else {
            throw new Exception("Contact not found\n");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    fscanf(STDIN, "%s\n");
}
/**
 * create the function to search the particular person based on the index of array
 * @param : $arr the array containing person detials in which, we have to search
 * @return : index of the searched item or -1 it indicates search element is not found
 */
function search($arr)
{
    echo "Enter firstName to search\n";
    $fName = Utility::String_input();
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i]->fName == $fName) {
            return $i;
        }
    }
    return -1;
}
/**
 * function to print the person details to the addressbook.json file as a mailing format
 */
function printBook($arr)
{
    try {
        if ($arr == null) {
            throw new Exception("Book is empty\n");
        } else {
            foreach ($arr as $person) {
                $i = 1;
                echo sprintf(" \tName : %s %s\n\tCity : %s\n\taddress : %s\n\tstate : %s\n\tpinCode - %u\n\tphoneNo- %u\n\n", $person->fName, $person->lName, $person->address, $person->city, $person->state, $person->pinCode, $person->phoneNo);
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
/**
 * function to sort the array by person object 
 * @techniquce - use insection sort for sorting
 * @param : arr the array containing person object to sort
 */
function sortBook(&$arr, $val)
{
    for ($i = 1; $i < count($arr); $i++) {
/* getting value for back element */
        $j = ($i - 1);
/* saving it in temperary variable;*/
        $temp = $arr[$i];
        while ($j >= 0 && $arr[$j]->{$val} >= $temp->{$val}) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $temp;
    }
}
/**
 * function to save the person details in AddressBook.json file
 * @param :in the array format what to save in the json file
 */
function save($addressBook)
{
    file_put_contents("AddressBook.json", json_encode($addressBook));
    echo "contact saved successfully\n";
}
/**
 * function act as a default menu for the program
 */
function option($addressBook)
{
    echo "\nEnter\t1 to add contact\n\t2 Edit Contact\n\t3 Delete Contact\n\t4 sort\n\t5 Display\n";
    $ch = Utility::getInt();
    switch ($ch) {
        case '1':
            createContact($addressBook);
            save($addressBook);
            option($addressBook);
            break;
        case '2':
            printBook($addressBook);
            $k = 2;
            while (($i = search($addressBook)) === -1) {
                var_dump($i);
                echo "No entries Found 1 to exit to MENU or Else to search again\n";
                fscanf(STDIN, "%s\n", $k);
                if ($k == 1) {
                    break;
                }
            }
            if ($k == 1) {
                option($addressBook);
            } else {
                $addressbook[$i] = edit($addressBook[$i]);
                save($addressBook);
            }
            option($addressBook);
            break;
        case '3':
            printBook($addressBook);
            delete($addressBook);
            save($addressBook);
            option($addressBook);
            break;
        case '4':
            $c = 1;
            if ($c == 1) {
                sortBook($addressBook, "fName");
                save($addressBook);
                printBook($addressBook);
            } else {
                option($addressBook);
            }
            fscanf(STDIN, "%s\n");
            option($addressBook);
            break;
        case 5:
            printBook($addressBook[0]);
            break;
    }
}
$jsonFile = "AddressBook.json";
$arr = json_decode(file_get_contents($jsonFile));
option($arr);
?>