<?php
/**
 * @purpose-create the Node class to stored the data & next node address
 * @authuor -amanverma
 * date - 10/02/2019
 */
class Node
{
  /* variable of node class */
  public $data;
  public $next;

  /*create the constructer function to initialize the varilables at runtime */
  function __Construct($data,$next)
  {
      $this->data = $data;
      $this->next = $next;
   }
}
?>
