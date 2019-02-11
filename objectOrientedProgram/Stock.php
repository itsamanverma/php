<?php
/** Stock class that contains name,number of shares and price of a stock **/
class Stock
{
 /* member variables of stock class */
 protected $stockName = null;
 protected $numberOfShares = 0;
 protected $price = 0;
 
 /*constructor to initialize values */
  public function __construct($stockName,$numOfShares,$price)
  {
      //initializing member variable
        $this->stockName = $stockName;
        $this->numberOfShares = $numOfShares;
        $this->price = $price;
  }

        /**
         * Get the value of stockName
         */ 
        public function getStockName()
        {
                return $this->stockName;
        }

        /**
         * Set the value of stockName
         * @return  self
         */ 
        public function setStockName($stockName)
        {
                $this->stockName = $stockName;
                return $this;
        }

        /**
         * Get the value of numOfShares
         */ 
        public function getNumOfShares()
        {
                return $this->numOfShares;
        }

        /**
         * Set the value of numOfShares
         * @return  self
         */ 
        public function setNumOfShares($numOfShares)
        {
                $this->numOfShares = $numOfShares;
                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;
                return $this;
        }
        /*getter function for stock value*/
        public function stockValue()
        { 
        /*calculates and returns stock value*/
         return ($this->getNumberOfShares() * $this->getPrice());
        }
}
?>