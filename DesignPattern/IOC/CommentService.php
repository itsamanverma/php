<?php
namespace Service;

class CommentService implements SplObserver
{
    public function update(SplSubject $post)
    {
        $subject = "New comment posted!";
        $message = "A comment has been made on a post entitled " .
            $post->getTitle();
        //$headers = "From: " Notification Syste m" <notify@example.com>rnMIME-Version: 1.0rn";
        if (!@mail("admin@example.com", $subject, $message, $headers)) {
            throw new RuntimeException("Unable to send the update.");
        }
    }
//https://www.sitepoint.com/inversion-of-control-the-hollywood-principle/
}
?>