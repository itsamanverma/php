<?php
 /**
 * @FileName  :- PostInterface.php
 * @purpose   :- entirely a responsibility of the observers rather than the subject.
 * @author    :- AMAN VERMA
 * @version   :- 1.0
 * @since     :-26/02/2019
 */
namespace Model;
/* Create the interface named as CommentInterface */
interface CommentInterface
{ 
    /**
    * abstract function to set the Content value
    * @param $content
    */
    public function setContent($content);
    /**
     * abstract function to get the content values
     */
    public function getContent();

    /**
    * abstract function to set the author value
    * @param $author
    */
    public function setAuthor($author);

    /**
     * abstract function to get the author values
     */
    public function getAuthor();
}

