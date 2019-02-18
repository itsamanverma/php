<?php
/**
 * @FileName  :Image.php
 * @purpose   :create the Image interface, which is use to represent the functionality
 *             of one class from the another class. we create Object having Original Object
 *             to interface its functionality to outer world
 * @author    :AMAN VERMA
 * @version   :1.0
 * @since     :18/02/2019 
 */
/* create a interface named as Imgae */
interface Image
{
  /**
   * these interface has a abstract function named as display
   */
   public function display();
}
?>
