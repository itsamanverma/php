<?php
/**
 * @FileName  :RealImage.php
 * @purpose   :create the Concrete classes which implementing the Image interface.
 * @author    :AMAN VERMA
 * @version   :1.0
 * @since     :18/02/2019 
 */
/*create the implementation class named as RealImage */
 class RealImage implements Image
 {
   /*create the private member variable named as RealImage */
   private $fileName;
   
   /**
    * create the constructor to provide runtime value
    * @param $fileName 
    */
    public function __Construct($fileName)
    {
      $this->fileName = $fileName;
      loadFromDisk($fileName);
    } 

    /**
     *@Override
     * override the Image abstract function named as display  
     */
     public function display()
     {
         echo("Displaying fileName:".$fileName);
     }

     /**
      * create a private function named as loadFromDisk
      * which is used to loading fileName from disk
      * @param $fileName
      */
      private function loadFromDisk($fileName)
      {
          echo("Loading FileName:".$fileName);
      }
 }