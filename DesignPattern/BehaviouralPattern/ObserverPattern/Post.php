<?php
/**
 * @FileName   : Post.php
 * @purpose    : create a class Post 
 * @author     : AMAN VERMA
 * @version    : 1.0
 * @since      :18/02/2019
 */
class Post
{
    /**
     * @var String $title
     */
    private $title;

    /**
     * create the function for constructor
     * @param $title
     */
    public function __Construct($title)
    {
        $this->title = $title;
    }

    /**
     * create the toString function to get the string value
     */
    function __toString()
    {
        return $this->title;
    }
}
?>