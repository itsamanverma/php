<?php 
/**
 * @FileName  :- CommentService.php
 * @purpose   :- create the Implementation class named as CommentService which implments 
 *               SplObserver interface. SplObserver interface is used the SplSubject to implement
 *               the Observer Design Pattern.
 * @author    :- AMAN VERMA
 * @version   :- 1.0
 * @since     :-26/02/2019
 */

namespace Service;
/* create the implementation class CommentService  */
class CommentService implements SplObserver
{   /**
     * function to receive the update from subject,if any changes occurs 
     * in any Observers     
     */
    public function update(SplSubject $post)
    {
        $subject = "New comment posted!";
        $message = "A comment has been made on a post entitled " .
            $post->getTitle();
        //C$headers = "From: " Notification Syste m" <notify@example.com>rnMIME-Version: 1.0rn";
        if (!@mail("admin@example.com", $subject, $message, $headers)) {
            throw new RuntimeException("Unable to send the update.");
        }
    }
}
?>