<?php
/**
 * we can write our factory class named as ComputerFactory 
 * Factory class Singleton or we can keep the method that returns the subclass as static.
 * based on the input parameter, different subclass is created and returned.
 * getComputer is the factory method.
 * @author : AMAN VERMA
 * @version: 1.0
 * @date   : 15/02/2019
 */
 require_once('Computer.php');
 require_once('PersonalComputer.php');
 require_once('Server.php');
 /* create factory class */
 class ComputerFactory
 {
    /**
     * ObjectCreation Logic
     * create the factory/helper function which is responsible
     * which implementation class object will be created
     * generally helper/factory method takes String type input
     * @param type
     * @param ram
     * @param hdd
     * @param cpu
     * @return one of the implementation class object will be returned 
     */
     public static function getComputer($type,$ram,$hdd,$cpu)
     {
         /*if the object is PCImpl type the create the instance*/
        if(strcasecmp("PCImpl",$type) == 0)
        {
            /* implementation object of PCImpl implementation class */
            return new PCImpl($ram,$hdd,$cpu);
        }
        /*if the object is ServerImpl type the create the instance*/
        elseif(strcasecmp("ServerImpl",$type) == 0)
        {
            /* implementation object of ServerImpl implementation class */
            return new ServerImpl($ram,$hdd,$cpu);
        }
        else
        {
            return null;
        }
     }

 }
 ?>