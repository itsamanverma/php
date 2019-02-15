<?php
/**
 * create the test Factory class for testing the factory pattern 
 * @author  :AMAN VERMA
 * @version :1.0
 * @date    :15/02/2019
 */
require_once('ComputerFactory.php');
require_once('Computer.php');
require_once('/home/admin1/Desktop/BridgelabzProgram/DesignPattern/Utility.php');
class TestFactory
{  
    static function test()
    {
    echo("FACTORY DESIGN PATTERN \n\n");
    /* taking the user input for ram ,hdd,cpu for PCImpl */
    echo("taking the user input for ram ,hdd,cpu for PCImpl\n");
    echo("Computer Ram:");
    $ram = Utility::getInteger();
    echo("Computer HDD:");
    $hdd = Utility::getInteger();
    echo("Computer cpu:");
    $cpu = Utility::getDouble();   

    /* taking the user input for ram ,hdd,cpu for ServerImpl */
    echo ("taking the user input for ram ,hdd,cpu for ServerImpl\n");
    echo ("Computer Ram:");
    $ram = Utility::getInteger();
    echo ("Computer HDD:");
    $hdd = Utility::getInteger();
    echo ("Computer cpu:");
    $cpu = Utility::getDouble();

    /**
     * calling the static function getComputer from ComputerFactory class
     * to get the instance of the particular class
     */
     $pc    = ComputerFactory::getComputer("PCImpl",$ram,$hdd,$cpu);
     $server = ComputerFactory::getComputer("ServerImpl",$ram,$hdd,$cpu);

     /**
      * using the reflectionObject to get properties of PCImpl
      */
      echo("the reflectionObject gives the properties of PCImpl");
      $ref = new ReflectionObject($pc);
      /* printing the property of pc */
      print_r($ref->getProperties());
      
      /**
       * using the reflectionObject to get Properties of ServerImpl
       */
      echo("the reflectionObject gives the Properties of ServerImpl");
      $ref1 = new ReflectionObject($server);
      /* printing the property of pc */
      print_r($ref1->getProperties());
    }
}
TestFactory::test();