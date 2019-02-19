<?php
/**
 * @fileName   :SoftwareVisitee.php
 * @purpose    :create tha base class with visitee(Elementxxx) function for each element drived type
 *              add an accept(visitor) function to the Element hierarchy
 * @author     : AMAN VERMA
 * @version    : 1.0
 * @since      : 19/02/2019
 */
require_once('Visitee.php');
require_once('Visitor.php');
/* create the SoftwareVisitor extend Visitee */
class SoftwareVisitee extends Visitee 
{
    /*takes private member variable */
    private $title;
    private $softwareCompany;
    private $softwareCompanyURL;
    /**
     * create the function conctructor to initialization
     * @param $title_in
     * @param $softwareCompany_in
     * @param $softwareCompanyURL_in
     */
    function __construct($title_in, $softwareCompany_in, $softwareCompanyURL_in) {
        $this->title  = $title_in;
        $this->softwareCompany = $softwareCompany_in;
        $this->softwareCompanyURL = $softwareCompanyURL_in;
    }
    /**
     * create the function to get the SoftwareCompany value
     */
    function getSoftwareCompany() 
    {
        return $this->softwareCompany;
    }
    /**
     * create the function to get the SoftwareCompanyURL value
     */
    function getSoftwareCompanyURL() 
    {
        return $this->softwareCompanyURL;
    }
    /**
     *create the function to get the Title value  
     */
    function getTitle() 
    {
        return $this->title;
    }
    /**
     * create the accept(visitor) function to the Element hierarchy
     * the implementation in each element  derived class is always same
     * accept(Visitor) function, because of cylic dependencies.
     * @param $visitorIn
     */
    function accept(Visitor $visitorIn) {
        $visitorIn->visitSoftware($this);
    }
}
?>