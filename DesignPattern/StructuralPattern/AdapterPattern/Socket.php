<?php
/**
 * @fileName  : Socket.php
 * @PURPOSE   : create the Scoket class 
 * @author    : AMAN VERMA
 * @version   : 1.0
 * @since     : 16/02/2019 
 */
  /*CREATE THE SCOKET CLASS */
require_once('Volt.php');
class Socket
{
    /**
     * no parameter constructor
     */
    function __Construct()
    {}
    /**
     * create the function to get the default value
     * @return volt
     */
    public function getVolt()
    {
          /* create the new instance with parameter */
        return new Volt(240);
    }
}
?>