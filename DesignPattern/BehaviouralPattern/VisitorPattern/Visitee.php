<?php
/**
 * @fileName   :Visitee.php
 * @purpose    :create the abstract class named as Visitee, which has accept(Visitor) function
 *              Element hierarchy is coupled only to the visitor base class 
 * @author     :AMAN VERMA
 * @version    :1.0
 * @since      :19/02/2019
 */
/*create the abstract class named as Visitee */
abstract class Visitee
{   /**
      * take a abstract function named as accept
      * @param $visitorIn    
      */
    abstract function accept(Visitor $visitorIn);
}
?>