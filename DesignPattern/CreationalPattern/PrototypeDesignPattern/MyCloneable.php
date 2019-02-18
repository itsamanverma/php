<?php
/**
 *@Filename   : MyCloneable.php
 *@purpose    : create the Cloneable interface which provide the customized implementation 
 *              that create the copy of an exiting Object
 * @author    : AMAN VERMA
 * @version   : 1.0
 * @date      : 16/02/2019 
 */
  class MyCloneable
  {
    public $object1;
    public $object2;
    /**
     * create the clone function to clone the existing Object 
     */
    function __clone()
    {
        /* Force a copy of this->object, otherwise it will point to same object.*/
        $this->object1 = clone $this->object1;
    }
  }
?>