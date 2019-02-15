<?php
/**
 * create the Implementation class of Computer, named as PCImpl
 * and Override all the Abstract methods of Computer class
 * @author  : AMAN VERMA
 * @version : 1.0
 * @date    : 15/02/2019
 */
class PCImpl implements IComputer
{
  /*take the three private member function of PCImpl(implementation class) */
  private $ram;
  private $hdd;
  private $cpu;

   /**
   * override the abstract function to set the value 
   * @param ram
   */
    public function setRAM($ram)
    {
        $this->ram = $ram;
    }
   /**
    * override the abstract function to get the value
    * @return self
    */
    public function getRAM()
    {
        return $this->ram;
    }
    /**
     * override the abstract function to set the value
     * @param hdd 
     */
    public function setHDD($hdd)
    {
        $this->hdd = $hdd;
    }
    /**
     * override the abstract function to get the value
     * @return self
     */
    public function getHDD()
    {
        return $this->hdd;
    }
    /**
     * override the abstract function to set the value
     * @param cpu 
     */
    public function setCPU($cpu)
    {
        $this->cpu = $cpu;
    }
    /**
     * override the abstract function to get the value
     * @return self
     */
    public function getCPU()
    {
        return $this->cpu;
    }

}