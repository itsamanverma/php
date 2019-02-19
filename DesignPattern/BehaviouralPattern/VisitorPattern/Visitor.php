<?php
/**
 * @fileName   :Visitor.php
 * @purpose    :create the abstract class named as Visitor, which has some function
 *              to be performed on the Element's Object ,implementation will rely on the 
 *              element's public interface 
 * @author     :AMAN VERMA
 * @version    :1.0
 * @since      :19/02/2019
 */
require_once('BookVisitee.php');
require_once('SoftwareVisitee.php');
/*create the abstract class named as Visitor */
abstract class Visitor 
{   /**
     *takes a abstract function named as visitBook
     *@param $bookVisitee_In
     */
    abstract function visitBook(BookVisitee $bookVisitee_In);
    /**
     * takes a abstract function named as visitSoftware
     * @param $softwareVisitee_In
     */
    abstract function visitSoftware(SoftwareVisitee $softwareVisitee_In);
}
?>