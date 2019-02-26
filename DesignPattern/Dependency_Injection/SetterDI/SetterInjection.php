<?php
 /**
 * @fileName:  SetterInjection.php
 * @purpose :  using the class UserManager to inject an instance of mailer
 * @author  :  AMAN VERMA
 * @version :  1.0
 * @since   :26/02/2019 
 */
 class SetterInjection
 {    /* private member */
      private $stockitem;
      private $user;
      /**
       * create the function constructer 
       * @param $user
       */
      public function __construct($user)
      {
       $this->user = $user;
      } 

      /**
       * Get the value of stockitem
       */ 
      public function getStockitem()
      {
            return $this->stockitem;
      }

      /**
       * Set the value of stockitem
       * @return  self
       */ 
      public function setStockitem(Stockitem $stockitem)
      {
            $this->stockitem = $stockitem;
            return $stockitem;
      }

      /**
       * Get the value of user
       */ 
      public function getUser()
      {
            return $this->user;
      }
 }

 $setter = new SetterInjection("status");
 $userDetails = $setter->setStockitem(new Stockitem("items of stock","status shows :success"));
 print_r($userDetails);
