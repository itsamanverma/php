<?php
/**
 * @fileName  : SubObject.php
 * creating the SubObject Class which is require factory method
 * @author    : AmanVerma
 * @version   :1.0
 * @since     :16/02/2019
 */
class SubObject
{
    static $instances = 0;
    public $instance;
    /**
     * create the consrtuctor 
     * take a incremental static instances, which each time increament at the time of
     * Object create and storing in the Instance
     */
    public function __construct()
    {
        $this->instance = ++self::$instances;
    }
    /**
     * 
     */
    public function __clone()
    {
        $this->instance = ++self::$instances;
    }
}
