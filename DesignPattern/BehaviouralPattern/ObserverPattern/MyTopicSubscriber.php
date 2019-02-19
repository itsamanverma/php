<?php
/**
 * @FileName   : MyTopicSubscriber.php
 * @purpose    : create a implementation class MyTopicSubscriber which implements 
 *               Subject interface
 * @author     : AMAN VERMA
 * @version    : 1.0
 * @since      :18/02/2019
 */
require_once 'Observer.php';
require_once 'Post.php';
require_once 'MyTopicImpl.php';
require_once 'Subject.php';
class MyTopicSubs implements Observer
{
 
    /*string name*/
    private $name;
    /**
     * create the function constructor
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * updates posted
     * @param $subject
     */
    public function update(Subject $subject)
    {
        echo sprintf(
            "%s has received a notification for post: %s \n\n",
            $this->name,
            $subject->getUpdate()
        );
    }
    /**
     * create the function to setSubject 
     * @param $subj
     */
    public function setSubject(Subject $subj)
    {}
    /**
     * create the function to get the name 
     */ 
    public function getName()
    {
        return $this->name;
    }
}

echo "Begin Testing Observer Pattern \n\n";
 
/* Create Subject*/
$blog = new MyTopicImpl(' Blog');
 
/* Create Readers*/
$sona = new MyTopicSubs(' SONA');
$mini = new MyTopicSubs(' MINI');
$manju = new MyTopicSubs(' MANJU');
 
// Add Observer (Reader) to Subject
$blog->register($sona);
$blog->register($mini);
$blog->register($manju);
 
// Remove an observer
$blog->unregister($manju);
 
// Create New post
$blog->postMessage(
    new Post("Learning Observer Pattern in PHP")
);



?>