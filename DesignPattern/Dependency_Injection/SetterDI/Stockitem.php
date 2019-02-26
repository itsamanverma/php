<?php
 /**
 * @FileName  :- Stockitem.php
 * @purpose   :-usung the one class as a instance to the another class
 *              by creating the  instantiate a new instance of that Class.
 * @author
 */
 class Stockitem
{
    private $recipient;
    private $content;

    /**
       * create the constructor function
       * @param $recipient;
       * @param $content;
       */
    public function __construct($recipient, $content)
    {
        $this->recipient = $recipient;
        $this->content = $content;
    }

    /**
       * Get the value of recipient
       */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
       * Get the value of content
       */
    public function getContent()
    {
        return $this->content;
    }
}
?>