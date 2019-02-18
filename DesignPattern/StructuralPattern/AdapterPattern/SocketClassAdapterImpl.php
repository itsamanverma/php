<?php
/**
 * @fileName  : ScoketClassAdapterImpl.php
 * @PURPOSE   : create the implementation class ScoketClassAdapterImpl of SocketAdapter interface to 
 *              communicate between to incompatiable class 
 * @author    : AMAN VERMA
 * @version   : 1.0
 * @since     : 16/02/2019 
 */
require_once('SocketClassAdapterImpl.php');
require_once('Socket.php');
require_once('Volt.php');
/*create the implementation class for Using inheritance for adapter pattern */
class SocketClassAdapterImpl extends Socket implements SocketAdapter
{
  /**
   * Override the Abstarct function to get the 120volt value
   * @return volt value;
   * @Override
   */
   public function get120Volt()
   {
      return getVolt();
   }
   /**
   * Override the Abstarct function to get the 12volt value
   * @return volt value;
   * @Override
   */
  public function get12Volt()
  {
     $volt2 = Socket::getVolt();
     return SocketClassAdapterImpl::convertVolt($volt2,20);
  }
  /**
   * Override the Abstarct function to get the volt value
   * @return volt value;
   * @Override
   */
   public function get3Volt()
   {
    $volt3 = Socket::getVolt();
    return SocketClassAdapterImpl::convertVolt($volt3,80);
   }
   /**
    * create the private function to convertVolt 
    * @param $volt
    * @param $i
    * @return converted volt value
    */
    public function convertVolt($volt, $val)
    {
        return($volt->getVolts()/$val);
    }
}