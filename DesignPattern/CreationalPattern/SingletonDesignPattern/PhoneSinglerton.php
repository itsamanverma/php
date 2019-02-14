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
 * set top level Exception handler function to handle exception
 */
set_exception_handler(function ($e) {
        echo ("\n!.....Exception Occurred ...!");
        echo $e - getMessage();
    });
class PhoneSingleton
{
    /**
     * member function of PhoneSingleton class
     */
    private $brand;
    private $model;
    /**
     * take a private static variable ie only one instance of that class allow 
     * @param $phone shows the instance of that class
     * @param $status shows that status of instance
     */
    private static $phone = null;
    private static $status = false;
    /**
     * create a private Constructor to restrict the instantaition of class object to other class 
     * @param $brand shows that one of member function of the class
     * @param $model shows that second member function of the class
     */
    private function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
    /**
     * static function of Lazy Initialization that return the instance of the class
     * @return phone instance of the PhoneSingleton class
     */
    public static function borrowPhone($brand, $model)
    {
        if (false == self::$status) {   
            /*checking the instance of that class present or not */
            if (null == self::$phone) {
                  /*if no instance of that class found the create the instance of class */
                self::$phone = new PhoneSingleton($brand, $model);
            }
            self::$status = true;
              /* return the object of that class */
            return self::$phone;
        } else {
            return null;
        }
    }
    /**
     * create the function return the status of phone 
     * @return if phone is returned,the variable is set to False
     */
    public function returnPhone(PhoneSingleton $phoneReturned)
    {
        self::$status = false;
    }
    /**
     * create the function get the Brand details
     * @return Brand Details
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * create the functon to get the model
     * @return model details
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * create the function to get the both value
     * @return brand & model of Phone instance 
     */
    public function getBrandAndModel()
    {
        return $this->getBrand() . ' by ' . $this->getModel();
    }
}