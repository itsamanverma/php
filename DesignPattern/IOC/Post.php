<?php
/**
 * @FileName  :- Post.php
 * @purpose   :- entirely a responsibility of the observers rather than the subject.
 * @author    :- AMAN VERMA
 * @version   :- 1.0
 * @since     :-26/02/2019
 */

namespace Model;
/* create the implementation class named as Post which implements PostInterface,SplSubject*/

class Post implements PostInterface, SplSubject
{  /* private members of Post Implementation class */
    private $title;
    private $content;
    private $comments  = [];
    private $observers = [];

    /**
     * create the constructor function 
     * @param $title
     * @param $content 
     */
    public function __construct($title, $content)
    {
        $this->setTitle($title);
        $this->setContent($content);
    }
    /**
     * @Override 
     * override the Abstract function of PostInterface to set the value
     * @param $title
     */
    public function setTitle($title)
    {
        if (
            !is_string($title)
            || strlen($title) < 2
            || strlen($title) > 100
        ) {
            throw new InvalidArgumentException(
                "The post title is invalid."
            );
        }
        $this->title = $title;
        return $this;
    }
    /**
     * @Override
     * Override the abstract function to get the value
     */
    public function
    getTitle()
    {
        return $this->title;
    }

    /**
     * @Override 
     * override the Abstract function of PostInterface to set the value
     * @param $content
     */
    public function setContent($content)
    {
        if (!is_string($content) || strlen($content) < 10) {
            throw new InvalidArgumentException(
                "The post content is invalid."
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
     * override the Abstract function of PostInterface to set the value
     * @param $comment
     */
    public function setComment(CommentInterface $comment)
    {
        $this->comments[] = $comment;
        $this->notify();
    }

    /**
     * @Override
     * Override the abstract function to get the value
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * 
     */
    public function attach(SplObserver $observer)
    {
        $id = spl_object_hash($observer);
        if (!isset($this->observers[$id])) {
            $this->observers[$id] = $observer;
        }
        return $this;
    }

    public function detach(SplObserver $observer)
    {
        $id = spl_object_hash($observer);
        if (!isset($this->observers[$id])) {
            throw new RuntimeException(
                "Unable to detach the requested observer."
            );
        }
        unset($this->observers[$id]);
        return $this;
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
 