<?php
/**********
 *Implementation of deQue using Node 
 *@authour amanverma
 *@version 2.0
 *Date 04/01/2019
 ****************************************************************************************/
/**
 * create the class of Node to stored the Data 
 * And node Address
 */
class DNode
{
    public $data;
    public $next;
    public $prev;
    /**
     * create the Construct function to provide 
     * the value to the varibles 
     */
    public function __Construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->prev=null;
    }
}
/**
 * Create the class of deQue which two node to manipulate the 
 * deQue 
 */
class deQue
{
    public $head;
    public $tail;

    /**
     * Create a function to add the Item at front of DeQue.
     */

    public function addFront($item)
    {
        $new_node = new DNode($item);
        if ($this->isEmpty()) {
            $this->head = $this->tail = $new_node;
        } else {
            $this->head->prev = $new_node;
        }
        $new_node->next = $this->head;
        $this->head = $new_node;
    }
    /**
     * Function to add the remove from front
     */
    public function removeFront()
    {
        $temp = $this->head;
        if ($this->head == $this->tail) {
            $this->tail = null;
        }
        if ($this->isEmpty()) {
            echo "underflow\n";
        } else {
            $this->head->next->prev = null;
        }
        $this->head = $this->head->next;
        $this->temp->next = null;
    }
    /**
     * Function to add the remove from Rear
     */
    public function removeRear()
    {
        $temp = $this->tail;
        if ($this->head == $this->tail) {
            $this->head = null;
        } else {
            $this->tail->prev->next = null;
        }
        $val = $this->tail->data;
        $this->tail = $this->tail->prev;
        $temp->prev = null;
        return $val;
    }
    /**
     * Function to add the add from front
     */
    public function addRear($item)
    {
        $new_node = new DNode($item);
        if (!$this->isEmpty()) {
            $this->tail->next = $new_node;
        } else {
            $this->head = $new_node;
        }
        $new_node->prev = $this->tail;
        $this->tail = $new_node;
    }
    /**
     * Function to check node is Empty
     */
    public function isEmpty()
    {
        if ($this->head == null) {
            return true;
        }
        return false;
    }
    /**
     * Function to add the display from front
     */
    public function displayForward()
    {
        $temp = $this->head;
        if ($temp == null) {
            echo "underflow \n";
        }
        while ($temp != null) {
            echo $temp->data . " ";
            $temp = $temp->next;
        }
    }
    /**
     * Function to add the display from rear
     */
    public function displayReverse()
    {
        $temp = $this->tail;
        while ($temp != null) {
            echo $temp->data . " ";
            $temp = $temp->prev;
        }
    }
}