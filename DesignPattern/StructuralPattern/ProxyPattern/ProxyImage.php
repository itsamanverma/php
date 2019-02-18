<?php
/**
 * @FileName  :ProxyImage.php
 * @purpose   :create the Concrete classes which implementing the Image interface.
 * @author    :AMAN VERMA
 * @version   :1.0
 * @since     :18/02/2019 
 */
require_once('RealImage.php');
/*create the implementation class named as ProxyImage */
class ProxyImage implements Image
{
  /*create private  instance & member */
  private $realImage;
  private $fileName;
 
/**
 * create the constructor to provide the rumtime value
 * @param $fileName
 */
 public function __Consturct($fileName)
 {
   $this->fileName = $fileName;
 }
 /**
  * @Override
  * override the abstract function named as display
  */
  public function display()
  {
      if($realImage == null)
      {
        $realImage = new RealImage($fileName);
      }
      $realImage->display();
  }
}