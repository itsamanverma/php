<?php
/**
* Create a JSON file having Inventory Details for Rice, Pulses and Wheats 
* with properties name, weight, price per kg.   
* @author amanverma
* @version 1.0
*Date: 08/02/2019
******************/

/* create the Inventory class with 3 non-static variable */
class inventory
{
    public $name;
    public $weight;
    public $price;
    
    /* Get the value of name */ 
    public function getName()
    {
        return $this->name;
    }
    /*
     * Set the value of name
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /* Get the value of weight */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /*
     * Set the value of weight
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /* Get the value of price */ 
    public function getPrice()
    {
        return $this->price;
    }

    /*
     * Set the value of price
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}