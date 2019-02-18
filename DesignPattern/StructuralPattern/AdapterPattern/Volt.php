<?php
/**
 * @fileName  : Volt.php
 * @PURPOSE   : create the Adapter class name in which I have a function 
 *              named as charging() and other class named as Laptop as PC class uses 
 *              this method through interface
 * @author    : AMAN VERMA
 * @version   : 1.0
 * @since     : 16/02/2019 
 */
    class Volt 
    {
    /* create the private variable to the voltage value */
    private $volt;
    /** 
     * create the function constructor to provide runtime value
     * @return volt value  
     */
     function __construct($v)
     {
         $this->volt = $v;
     }
     /**
      * to get the value create funcion getvolts
      */
     public function getVolts()
     {
        return $this->volt;
     }
     /**
      * to set the volt value
      * @return self
      */
      public function setVolts($volt)
      {
          $this->volt =$v;
      }
}
?>