<?php
/**
 * @fileName:-PhoneBorrower.php
 * create the PhoneBorrower class which implements the Singleton Pattern
 * @purposre using the Single instance of that class access to the different classes  
 * @author  AmanVerma
 * @version:1.0
 * @Date-14/02/2019
 */
require_once('MobileSingleton.php');

/**
 * Mobile Borrower Class 
 */
class MobileBorrower
{
     /*membre function of MobileBorrower class */
    private $borrowedMobile;
    private $haveMobile = false;

    /**
     * private constructor to restrict instantiation of the class from other classes
     */
    function __construct()
    {
    }

    /**
     * function to get both model and company Details
     * @return modelbycompany model and company name of mobile
     */
    function getCompanyAndModel()
    {
      /*if borrower have the phone the return the details */
        if (true == $this->haveMobile) {
            return $this->borrowedMobile->getCompanyAndModel();
        } else {
        /* else return the message */
            return "I don't have the Mobile";
        }
    }

    /**
     * Function to borrow the mobile 
     * uses eager initialization
     */
    function borrowMobile()
    {
      /* getting the instance of MobileSingleton class */
        $this->borrowedMobile = MobileSingleton::borrowMobile();
        if ($this->borrowedMobile == null) {
        /* set to false if not object returned */
            $this->haveMobile = false;
        } else {
        /* set to true if object returned */
            $this->haveMobile = true;
        }
    }

    /**
     * this function returns mobile ie borrower returns back the mobile
     */
    function returnMobile()
    {
        $this->borrowedMobile->returnMobile();
    }
}
?>