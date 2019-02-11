<?php

/**********
 *Helper functions for the implementations of Stack
 *@authour amanverma
 *@version 2.0
 *Date 11/02/2019
 */
class Node
{
    /**
     *  Link to next node
     */
    public $next;
    /*
     *Data to hold
     */
    public $data;
    /**
     * Node constructor
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}
class Stack
{
    /**
     * top value
     */
    public $top;
    /**
     * size of the stack intially
     */
    private static $size = 0;
    /**
     * function for adding the elements to the stack
     */
    public function push($item)
    {
        //$iteam;
        $new_node = new Node($item);
        /**
         * checking the stack and inserting the data
         */
        if ($this->top == null) {
            $this->top = $new_node;
        } else {
            $new_node->next = $this->top;
            $this->top = $new_node;
        }
        //echo "top->data";
        /**
         * increases the size
         */
        self::$size++;
    }
    /**
     * function for removing r deleting the elements from the stack
     */
    public function pop()
    {
        if ($this->top == null) {
            /**
             * throws exception is stack is empty
             */
            echo("Stack is Empty..! \n");
        }
        $val = $this->top->data;
        $this->top = $this->top->next;
       // echo"from pop\n";
        self::$size--;
        return $val;
    }
    /**
     * function to display the data
     */
    public function display()
    {
        $current = $this->top;
        if ($current == null) {
            echo("Stack is Empty..! \n");
        }
        while ($current != null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
    /**
     * function to return the size of stack
     */
    public function size()
    {
        return self::$size;
    }
    /**
     * function to check stack is empty r not
     */
    public function isEmpty()
    {
        return $this->top == null;
    }
    /**
     * function to get peek number
     */
    public function peek()
    {
        if (!$this->isEmpty()) {
            return $this->top->data;
        } else {
            throw new RuntimeException("Stack is Empty..! \n");
        }
    }
}