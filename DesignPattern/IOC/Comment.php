<?php
/**
 * @FileName  :- Comment.php
 * @purpose   :- create the implementation class named as Comment which implements CommentInterface
 * @author    :- AMAN VERMA
 * @version   :- 1.0
 * @since     :-26/02/2019
 */
namespace Model;

class Comment implements CommentInterface
{   /* private members */
    private $content;
    private $author;
    /**
     * Constructor function 
     * @param $content
     * @param $ author
     */
    public function __construct($content, $author)
    {
        $this->setContent($content);
        $this->setAuthor($author);
    }
    /**
     * @Override 
     * override the Abstract function of CommentInterface to set the value
     * @param $content
     */
    public function setContent($content)
    {
        if (!is_string($content) || strlen($content) < 10) {
            throw new InvalidArgumentException(
                "The comment is invalid."
            );
        }
        $this->content = $content;
        return $this;
    }
    /**
     * @Override
     * Override the abstract function to get the value
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * @Override 
     * override the Abstract function of CommentInterface to set the value
     * @param $author
     */ 
    public function setAuthor($author)
    {
        if (
            !is_string($author)
            || strlen($author) < 2
            || strlen($author) > 50
        ) {
            throw new InvalidArgumentException(
                "The author is invalid."
            );
        }
        $this->author = $author;
        return $this;
    }
    /**
     * @Override
     * Override the abstract function to get the value
     */
    public function getAuthor()
    {
        return $this->author;
    }
}

