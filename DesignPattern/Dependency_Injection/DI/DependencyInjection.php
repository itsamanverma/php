<?php
/**
 * @FileName :- DependencyInjection.php
 * @purpose  :- usung the one class as a instance to the another class
 *              by creating the  instantiate a new instance of that Class.
 * @author   :- AMAN VERMA
 * @version  :- 1.0
 * @since    :- 26/02/2019
 */
class Mailer
{
    /* private member */
    private $recipient;
    private $content;

    /**
  * create the construct function
  * @param $recipient
  * @param $content
  */
    public function __construct($recipient, $content)
    {
        $this->recipient = $recipient;
        $this->content = $content;
    }

//   /**
//    * create the function for mailing
//    * @param $recipient
//    * @param $content 
//    */
//     public function mail($recipient, $content)
// {
//      echo("send an email to the recipient");
// }
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
