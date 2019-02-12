<?php
/**********
 * Data structure queue with its method implemented on linked list 
 * @authour amanverma
 * @version 2.0
 * Date 11/01/2019
 ****************************************************************************************/

require_once ('E.php');
class Queue
{ 
  public $front;
  public $rear;
  public $size; 
  
    /**
     * Constructor function to initialize the variable at runtime 
     **/
  public function __construct()
  {
        $this->front = null;
        $this->rear = null;
        $this->size = null;
  
  }
  
  /**
     * Function to check if the queue is empty or not
     * @return boolean true of false
     */
  public function isEmpty()
  {
    return $this->front == null;
  }
  
    /**
     * function to push data at the end of the queue
     * @param item the item to be pushed
     */
     public function enqueue($value)
    {
    $oldback = $this->back;
    /* last pointing to new node */
    $this->back = new Element(); 
    $this->back->value = $value;
    if($this->isEmpty())
    {
      //if empty both first and last point to the new node
      $this->front = $this->back;
      $this->size++; 
    }
    else
    {
      //else last point to new node
      $oldback->next = $this->back;
      $this->size++; 
    }
  }
  
    /**
     * Function to remove the item from the start of the list
     */
  public function dequeue()
  {
    if($this->isEmpty())
    {
      echo "the queue is empty\n";
      return null; 
    }
    //removing first value and modifying queue 
    $removedValue = $this->front->value;
    $this->front = $this->front->next;
    $this->size--;
    return $removedValue;
  }

  /**
     * Function to check the size of queue
     * @return size the size of the queue
     */
  public function size()
  {
    return $this->size;
  }

  public function getData()
  {
    $temp = $this->front;
    $str = "";
    while($temp)
    {
        $str = $str.$temp->value;
        if($temp->next!=null)
        {
            $str = $str." ";
        }
        $temp = $temp->next;
    }
    return $str;
  }
}
?>