<?php
/**
 * @FileName   : MyTopicImpl.php
 * @purpose    : create a implementation class MyTopicImpl which implements 
 *               Subject interface
 * @author     : AMAN VERMA
 * @version    : 1.0
 * @since      :18/02/2019
 */
/*create the implementation class named as MyTopicImpl */
class MyTopicImpl implements Subject
{
    /* create the private member */
    private $message;
    private $observers = array();
    private $post;

    /**
     * create the functionn constructor 
     * @param $name
     */
    public function __Construct($name)
    {
        $this->name = $name;
    }

    /**
     * @Override 
     * Override the abstract function of Subject interface
     * @param instance of Object $obj
     */
    public function register(Observer $obj)
    {
        if($obj == null)
        {
            throw new Exception("Null Observers..!\n");
        }
        $this->observers[] =$obj;
    }

    /**
     * @Override 
     * Override the abstract function of Subject interface
     * @param instance of Object $obj
     */
    public function unregister(Observer $obj)
    {
     /*
      * now we check the Observer in the register observer list
      * if observer found that pass that otherwise register him 
      */
      $key = array_search($obj,$this->observers,true);
      if($key !== false)
      {
          unset($this->observers[$key]);
      }
    }
    /*
     * Notify All Registered Observers
     * 
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }

    /**
     * Return the Post Data
     */
    public function getUpdate()
    {
        return $this->post . " ({$this->name})";
    }

    /**
     * new post published
     */
    public function postMessage(Post $post)
    { 
        ECHO("Message Posted to Topic:$post\n");
        $this->post = $post;
        $this->notifyObservers();
    }
}