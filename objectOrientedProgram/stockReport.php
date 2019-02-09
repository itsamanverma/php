<?php
/**
* Write a program to read in Stock Names, Number of Share, Share Price.
* Print a Stock Report with total value of each Stock and the total value of Stock.    
* @author amanverma
* @version 1.0
* Date: 08/02/2019
******************/
class Stock
{
    private $stockName;
    private $numberOfShare;
    private $sharePrice;

    /* Get the value of stockName */ 
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

    /* Get the value of numberOfShare */ 
    public function getNumberOfShare()
    {
        return $this->numberOfShare;
    }

    /**
     * Set the value of numberOfShare
     * @return  self
     */ 
    public function setNumberOfShare($numberOfShare)
    {
        $this->numberOfShare = $numberOfShare;
        return $this;
    }

    /* Get the value of sharePrice */ 
    public function getSharePrice()
    {
        return $this->sharePrice;
    }

    /**
     * Set the value of sharePrice
     * @return  self
     */ 
    public function setSharePrice($sharePrice)
    {
        $this->sharePrice = $sharePrice;
        return $this;
    }
}