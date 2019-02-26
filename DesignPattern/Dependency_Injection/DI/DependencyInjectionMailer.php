<?php
/**
 * @FileName   :-DependencyInjectorMailer.php
 * @purpose    :-this is the class where use the class mailer 
 *               as instance of other class
 * @author     :-AMAN VERMA
 * @version    :-1.0
 * @since      :-26/02/2019 
 */
 require('DependencyInjection.php');
 class UserManager
  {
   private $mailer;
   private $user;

   /**
    * create the construct function 
    * @param $mailer
    * @param $user
    */
    public function __construct($user,Mailer $mailer)
    {
        $this->mailer = $mailer;
        $this->user = $user;
    }
    // /**
    //  * create the function for email
    //  * @param $email
    //  * @param $password
    //  */
    //  public function regiter($email,$password)
    //  {
    //    $this->mailer->mail($email,"hello & welcome");
    //  }
   /**
    * Get the value of mailer
    */ 
    public function getMailer()
    {
      return $this->mailer;
    }

   /**
    * Get the value of user
    */ 
    public function getUser()
    {
      return $this->user;
    }
 }
    $ref = new ReflectionClass('Mailer');
    print_r($ref);

 
   /* getting the properties of the class as an array */ 
   $properties = $ref->getProperties();
   echo "printing properties of class\n";
   print_r($properties);

    $u = new UserManager("aayushi",new Mailer( "send an email to the recipient","valid email"));

  //  /* getting the default properties of the class */
  //  $defaults = $ref->getDefaultProperties();
  //  echo "printing properties of class\n";
   print_r($u);
  
?>