<?php
/**
 * Title: Single linked list
 * Description: Implementation of a single linked list in Php
 * @author amanverma
 * @version 1.0
 *Date: 02/01/2019
 */
class Node
{
    /**
     * Data to hold
     */
    public $data;
    /*
     *Link to next node
     */
    public $next;
    /*
     *  Node constructor
     */
    public function __construct($d)
    {
        $this->data = $d;
        $this->next = null;
    }
}
class LinkedList
{
    private static $size = 0;
    public $head;
    /*
     * function to add the data of Linked list
     */
    public function add($data)
    {
        if ($this->head == null) {
            $this->head = new Node($data);
        } else {
            $n = $this->head;
            while ($n->next != null) {
                $n = $n->next;
            }
            $n->next = new Node($data);
        }
        self::$size++;
    }
    /*
     * function to check if the list is empty or not
     */
    public function isEmpty()
    {
        return $this->head == null;
    } 
    /*
     * function to remove the data given as argument removes only if data is there
     */
    public function remove($key)
    {
        $current = $previous = $this->head;
        while ($current->data != $key) {
            $previous = $current;
            $current = $current->next;
        }
        /**
         * For the first node
         */
        if ($current == $previous) {
            $this->head = $current->next;
        }
        $previous->next = $current->next;
        self::$size--;
    }
    /**
     * function to search  the data of Linked list
     */
    public function search($data)
    {
        $current = $this->head;
        while ($current != null) {
            if (($current->data) == $data) {
                return true;
            }
            $current = $current->next;
        }
        return false;
    }
    /**
     * function to add the data  at a particular index number of Linked list
     */
    public function index($data)
    {
        $current = $this->head;
        $i = 0;
        while (($current->data) == $data) {
            $i++;
            $current = $current->next;
        }
        return $i;
    }
    /**
     * function to delete r remove data from  Linked list
     */
    public function pop()
    {
        $current = $this->head;
        while ($current != null) {
            $current->next = null;
        }
        if (head == null) {
            echo "underflow\n";
        }
    }
    /**
     * function to display the size  of Linked list
     */
    public function size()
    {
        return self::$size;
    }
    /**
     * function to display the data of Linked list
     */
    public function display()
    {
        $current = $this->head;
        while ($current != null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
    /**
     * function to return the data of Linked list
     */
    public function getData()
    {
        $str = "";
        $current = $this->head;
        while ($current != null) {
            $str = $str.$current->data . " ";
            $current = $current->next;
        }
        return $str;
    }
    /**
     * function to conver linked list to array
     */
    public function llToArr()
    {
        $arr = array();
        $temp = $this->head;
        while ($temp != null) {
            for ($i = 0; $i < self::$size; $i++) {
                $arr[$i] = $temp->data;
                $temp = $temp->next;
            }
        }
        return $arr;
    }
    /**
     * create the function to add node in sorted from..
     */
    public function sortedInsert($node)
    {
        $curr;
        if($this->head == null || $this->head->data>=$node)
        {
            $node->next = $this->head;
            $this->head = $node;
        }
        else
        {
           $curr = $this->head;
           while($curr->next!=null && $curr->next->data < $node->data)
           {
               $curr = $curr->next;
               $node->next = $curr->next;
               $curr->next = $node;
           }
        }
    }

    /**
     * create a function to create empty List;
     */
    public function OrderedList()
    {
        function __construct()
        {
            $list1 = new LinkedList();
        }
        return $list1;
    }

    /**
     * create a function to getString 
     */
    public function getString1()
    {
        $st ="";
        $current = $this->head;
        while ($current != null) {
            $st = $st.$current->data . " ";
            $current = $current->next;
        }
        return $st=substr($st,0,-1);
    }
}