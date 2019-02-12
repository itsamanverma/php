<?php
class Contact
{
    public $fName;
    public $lName;
    public $address;
    public $city;
    public $state;
    public $pinCode;
    public $phoneNo;
    public function __construct()
    {
        $NoOfArguments = func_num_args(); //return no of arguments passed in function
        $arg = func_get_args();
        switch ($NoOfArguments) {
            case 1:
                $contact = new Contact();
                return $contact;
                break;
            case 7:
                self::construct1($arg[0], $arg[1], $arg[2], $arg[3], $arg[4], $arg[5], $arg[6]);
                break;
        }
    }
    public function construct1($fName, $lName, $state, $city, $pinCode, $address, $phoneNo)
    {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->pinCode = $pinCode;
        $this->phoneNo = $phoneNo;
    }
   /* Get the value of fName */
    public function getFName()
    {
        return $this->fName;
    }
    /**
     * Set the value of fName
     * @return  self
     */
    public function setFName($fName)
    {
        $this->fName = $fName;
        return $this;
    }
    /* Get the value of lName */
    public function getLName()
    {
        return $this->lName;
    }
    /**
     * Set the value of lName
     * @return  self
     */
    public function setLName($lName)
    {
        $this->lName = $lName;
        return $this;
    }
     /* Get the value of address */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set the value of address
     * @return  self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    } 
      /* Get the value of city */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set the value of city 
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
       /* Get the value of state */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set the value of state
     * @return  self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
        /* Get the value of pinCode */
    public function getPinCode()
    {
        return $this->pinCode;
    }
    /**
     * Set the value of pinCode
     * @return  self
     */
    public function setPinCode($pinCode)
    {
        $this->pinCode = $pinCode;
        return $this;
    }
         /* Get the value of phoneNo */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }
    /**
     * Set the value of phoneNo
     * @return  self
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;
        return $this;
    }
}