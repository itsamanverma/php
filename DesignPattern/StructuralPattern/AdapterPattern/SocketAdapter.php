<?php
/**
 * @fileName  : SocketAdapter.php
 * @PURPOSE   : create the SocketAdapter interface to communicate between to incompatiable class 
 * @author    : AMAN VERMA
 * @version   : 1.0
 * @since     : 16/02/2019 
 */
/*create the ScoketAdapter interface */
interface SocketAdapter
{
   /*
    * create the abstract function 
    */
   public function get120Volt();

  /*
   * create the abstract function 
   */
   public function get12Volt();

   /*
    * create the abstract function 
    */
   public function get3Volt();
}
?>