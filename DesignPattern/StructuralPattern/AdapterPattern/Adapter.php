<?php
/**
 * @fileName  : Volt.php
 * @PURPOSE   : create the Adapter class name in which I have a function 
 *              named as  charging() and other class named as Laptop as PC class uses 
 *              this method through interface
 * @author    : AMAN VERMA
 * @version   : 1.0
 * @since     : 16/02/2019 
 */
   class Moblie
   {
    /* create the private variable to the voltage value */
     private $cvolt;

     /**
      * @var Integer 
      * create the function constructor to provide runtime value
      * @return cvalt value  
      */
      function __construct(int $cvolt)
      {
          $this->cvolt = $cvolt;
      }

      /**
       * create the function named as charging 
       * @param cvolt
       * 
       * 
       */
   }