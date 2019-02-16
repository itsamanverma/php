<?php

/********************************************************************************************
 * Purpose  : Program Shows The Implementation of FActory desingn pattern in php
 * File Name: Prototype.php
 * Author   : AmanVerma
 * Since    : 16/02/2019
 **********************************************************************************************/
require_once('MyCloneable.php');
require_once('SubObject.php');

  /**
    *testing the prototype implementation
    */
    echo "\n PROTOTYPE PATTERN\n\n";
 
    /* creating an object of MyCloneable class */
     $obj = new MyCloneable();

   /**
    * instantiating SubObject class twice
    * ie member variable of MyCloneable class is now objects of SubObject class
    */
    $obj->object1 = new SubObject();
    $obj->object2 = new SubObject();
 
    /*cloning the obj to get a new object without using new and passing to obj2 variable */
    $obj2 = clone $obj;
 
    /* obj is the original object*/
    print("Original Object:\n\n");
    /*printing original object*/
    echo "no of object 1 instance variable = " . $obj->object1->instance . "\n";
    echo "no of object 2 instance variable = " . $obj->object2->instance . "\n";
 
    /* obj2 is the new object */
    print("\nCloned Object:\n\n");
    /* printing original object */ 
    echo "no of object 1 instance variable = " . $obj2->object1->instance . "\n";
    echo "no of object 2 instance variable = " . $obj2->object2->instance . "\n";
?>