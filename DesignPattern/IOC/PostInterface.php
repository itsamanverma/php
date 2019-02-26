<?php
 /**
 * @FileName  :- PostInterface.php
 * @purpose   :- entirely a responsibility of the observers rather than the subject.
 * @author    :- AMAN VERMA
 * @version   :- 1.0
 * @since     :-26/02/2019
 */
  namespace Model;

  interface PostInterface
  {
    /**
     * abstract function of PostInterface to set the value
     * @param $title
     */
    public function setTitle($title);
    /**
     * abstract function to get the value
     */
    public function getTitle();

    /**
     * abstract function of PostInterface to set the value
     * @param $content
     */
    public function setContent($content);
    /**
     * abstract function to get the value
     */
    public function getContent();

    /**
     * abstract function of PostInterface to set the value
     * @param $comment
     */
    public function setComment(CommentInterface $comment);
    /**
     * abstract function to get the value
     */
    public function getComments();
  }
?>