<?php
/**
* StockData class to print a stock report for different stock 
* @author Amanverma
* @version 1.0
* Date: 10/02/2019
******************/
 //class to create object of stock
class StockData
{
     /* take a variable to stored the name of Stock */
    public $name;
     
     /*take a variable to stored the price of Stock */
    public $price;
     
     /* no of share in the particular stock */
    public $quantity;
     
     /*constructor to initialize the variables in the class*/
    function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

}
  