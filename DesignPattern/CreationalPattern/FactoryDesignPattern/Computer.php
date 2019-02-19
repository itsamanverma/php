<?php
/**
 * create the Computer class(Super class) as Interface or Abstract class which
 * further implemented by his Subclasses
 * @purpose: Using the Factory Design pattern
 * @author : AMAN VERMA
 * @date   : 15/02/2019   
 */
/* create the abstract class or Interface named as Computer */
interface IComputer
{
    /**
     * the Abstract function of IComputer class & all abstract function overriden 
     * in the sub-classes named as getRAM,getHDD,getCPU
     */
    public function setRAM($ram);
    public function getRAM();

    public function setHDD($hdd);
    public function getHDD();
    
    public function setCPU($cpu);
    public function getCPU();

}