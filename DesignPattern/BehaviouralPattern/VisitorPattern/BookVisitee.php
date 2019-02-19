<?php
/**
 * @fileName   :BookVisitee.php
 * @purpose    :create tha base class with visitee(Elementxxx) function for each element drived type
 *              add an accept(visitor) function to the Element hierarchy
 * @author     : AMAN VERMA
 * @version    : 1.0
 * @since      : 19/02/2019
 */
require_once('Visitee.php');
require_once('Visitor.php');
/*create the BookVisitee class which extends the Visitee Abstract class */
class BookVisitee extends Visitee
{
    /* take a private member varibale */
    private $author;
    private $title;
    /**
     * create the constructor function to initailization
     * @param $title_in
     * @param $author_in
     */
    function __construct($title_in, $author_in)
    {
        $this->author = $author_in;
        $this->title = $title_in;
    }
    /**
     * create the function to get Author value
     */
    function getAuthor()
    {
        return $this->author;
    }
    /**
     * create the function to get the Title value
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
    function accept(Visitor $visitorIn)
    {
        $visitorIn->visitBook($this);
    }
}
?>