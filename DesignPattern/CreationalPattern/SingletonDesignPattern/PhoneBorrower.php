<?php
/**
 * @fileName:-PhoneBorrower.php
 * create the PhoneBorrower class which implements the Singleton Pattern
 * @purposre using the Single instance of that class access to the different classes  
 * @author  AmanVerma
 * @version:1.0
 * @Date-14/02/2019
 */
/**
 * set top level Exception handler function to handle exception
 */
set_exception_handler(function ($e) {
        echo ("\n!.....Exception Occurred ...!");
        echo $e - getMessage();
    });
require('PhoneSingleton.php');
class PhoneBorrower
{   /*membre function of PhoneBorrower class */
    private $borrowedPhone;
    private $havePhone;

    /**
     * constructor for initialized 
     */
    public function __construct($brand,$model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    /**
     * create the function to show the brand & model
     */
    public function getBrandAndModel()
    {
        if(True == $this->havePhone)
        {
           return $this->borrowedPhone->getBrandAndModel();
        }else{
            echo("I don't have Phone");
        }
    }

    /**
     * create the function of eagar initailization 
     */
     public function borrowPhone($brand,$model)
     {
        $this->borrowedPhone = PhoneSingleton::borrowPhone($brand,$model);
        if($this->borrowedPhone == NULL)
        {
          $this->havePhone = FALSE;
        }else{
            $this->borrowedPhone = TRUE;
        }
     }

     /**
      *craete the Function to return the phone
      * @return borrowedPhone  
      */
      public function returnPhone()
      {
          $this->borrowedPhone->returnPhone($this->borrowedPhone);
      }
}