<?php
/**********
 * Implementation of Queue using Node 
 *@authour amanverma
 *@version 2.0
 *Date 11/01/2019
 ****************************************************************************************/
class QNode
{
    public $data;
    public $next;

    /**
     * Create the Construct Function
     * @param $data shows the data of Node  
     */
    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}
class Queue
{
    public $front;
    public $rear;
    public static $size = 0;

    /**
     * Create the Construct Function
     */
    public function __construct()
    {
        $this->front = $this->rear = null;
    }
    /**
     * create a function to add item in the Queue
     * @param $item shows the Data of node 
     */
    public function enqueue($data)
    {
        $new_node = new QNode($data);
        /**
         * checking the Queue is empty or not
         */
        if ($this->isEmpty()) {
            $this->front = $this->rear = $new_node;
        } else {
            $this->rear->next = $new_node;
            $this->rear = $new_node;
        }
        /**
         * increases the size by adding the elements
         */
        self::$size++;
    }

    /**
     * create a Function to check that Queue is Empty or Not 
     */
    public function isEmpty()
    {
        if ($this->front == null)
            return true;
    }
    /**
     * create a function to remove the item from Queue
     */
    public function deQueue()
    {
        if (!$this->isEmpty()) {
            $val = $this->front->data;
            $this->front = $this->front->next;
        } else {
            echo ("queue is UnderFlow..!");
        }
        if ($this->front == null) {
            $rear = null;
        }
        self::$size--;
        return $val;
    }
    /**
     * create a function to known the Size of Queue
     */
    public function size()
    {
        return self::$size;
    }
    /**
     * create the function to display the Queue 
     */
    public function display()
    {
        $temp = $this->front;
        while ($temp != null) {
            echo $temp->data . "\n";
            $temp = $temp->next;
        }
    }
    /**
     * create a function to getdata similar to toString method 
     */
    public function getData()
    {
        $str = "";
        $current = $this->front;
        while ($current != null) {
            $str = $str . $current->data;
            if ($current->next != null) {
                $str = $str . "->";
            }
        }
        $current = $current->next;
        return $str;
    }
    /**
     * create a function to show the pee valure of Queue
     */
    public function peek()
    {
        return $this->front->data;
    }
    /**
     * create the function remove or delete the date using Queue
     * in CalendarByQueue 
     */
    public function deQueue1()
    {
        if(!$this->isEmpty())
        {
          $val = $this->front->data();
          $this->front = $this->front->next;
        }
        else{
            echo("Queue is underFlow..!");
        }
        if($this->front == null)
        {
            $rear= null;
        }
        return $val;
    }
}