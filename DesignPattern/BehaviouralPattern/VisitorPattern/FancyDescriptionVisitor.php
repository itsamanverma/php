<?php
/**
 * @fileName   :FancyDescriptionVisitor.php
 * @purpose    :create the derived class named as PlainDescriptionVisitor, extends Visitor
 *              the client create the  Visitor Object $ passes each to element Object by 
 *              calling accepts function
 * @author     :AMAN VERMA
 * @version    :1.0
 * @since      :19/02/2019
 */
require_once('Visitor.php');
require_once('BookVisitee.php');
require_once('SoftwareVisitee.php');
/**create the derived class FancyDescriptionVisitor  */
class FancyDescriptionVisitor extends Visitor
{   /*takes the private member & initialized by null */
    private $description = null;
    /**
     *function for get the value of description 
     */
    function getDescription()
    {
        return $this->description;
    }
    /**
     * function to set the description value
     */
    function setDescription($descriptionIn)
    {
        $this->description = $descriptionIn;
    }
    /**
     * @Override 
     * Override the abstract function 
     * @param $bookVisiteeIn
     */
    function visitBook(BookVisitee $bookVisiteeIn)
    {
        $this->setDescription($bookVisiteeIn->getTitle() .
            '...!*@*! written !*! by !@! ' . $bookVisiteeIn->getAuthor());
    }
    /**
     * @Override 
     * Override the abstract function 
     * @param $softwareVisiteeIn
     */
    function visitSoftware(SoftwareVisitee $softwareVisiteeIn)
    {
        $this->setDescription($softwareVisiteeIn->getTitle() .
            '...!!! made !*! by !@@! ' . $softwareVisiteeIn->getSoftwareCompany() .
            '...www website !**! at http://' . $softwareVisiteeIn->getSoftwareCompanyURL());
    }
}