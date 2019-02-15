<?php
/**
 * @fileName:-PhoneSingleton.php
 * create the PhoneSingleton class which implements the Singleton Pattern
 * @purposre using the Single instance of that class access to the different classes  
 * @author  AmanVerma
 * @version: 1.0
 * @Date -14/02/2019
 */
/**
 * class MobileSingleton which implements Singleton pattern
 */
class MobileSingleton
{
    /**
     * memeber functions of MobileSingleton class
     */
    private $company = 'SamSung';
    private $model = 'SamSung C7Pro';

    /**
     * private static variable ie the only instance of the class
     */
    private static $mobile = null;
    private static $status = false;

    /**
     * private constructor to restrict instantiation of the class from other classes
     */
    private function __construct()
    {
    }

    /**
     * Static Function of Lazy Initialization that returns the instance of the class
     * @return mobile instance of the MobileSingleton class
     */
    public static function borrowMobile()
    {
        if (false == self::$status) {
        /*checking the instance of that class present or not */
            if (null == self::$mobile) {
            /*if no instance of that class found the create the instance of class */
                self::$mobile = new MobileSingleton();
            }
            self::$status = true;
        /* return the object of that class */
            return self::$mobile;
        } else {
        //else returning null
            return null;
        }
    }

    /**
     * create the function return the status of phone 
     * @return if phone is returned,the variable is set to False
     */
    function returnMobile()
    {
        /* if mobile is returned the variable is set to false */
        self::$status = false;
    }

    /**
     * create the function get the Brand details
     * @return Brand Details
     */
    function getCompany()
    {
        return $this->company;
    }

    /**
     * create the functon to get the model
     * @return model details
     */
    function getModel()
    {
        return $this->model;
    }

    /**
     * create the function to get the both value
     * @return brand & model of Phone instance 
     */
    function getCompanyAndModel()
    {
        return $this->getModel() . ' by ' . $this->getCompany();
    }
}
?>