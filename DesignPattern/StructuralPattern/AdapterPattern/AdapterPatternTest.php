<?php
/**
 * @fileName  : AdapterPatternTest.php
 * @PURPOSE   : create the AdapterPatternTest class to test the Adapter Design Pattern 
 * @author    : AMAN VERMA
 * @version   : 1.0
 * @since     : 16/02/2019 
 */
 require('SocketAdapter.php');
 require_once('SocketClassAdapterImpl.php');
 include_once('Socket.php');
 require_once('Volt.php');
 require('/home/admin1/Desktop/BridgelabzProgram/DesignPattern/Utility.php');
 class AdapterPatternTest
 {   /* create the main function to class*/
     function main()
     {
         /*creating the instance of SocketClassAdapterImpl implementation class */
         $voltClassImpl = new SocketClassAdapterImpl();
         $volt4  = $voltClassImpl->get12Volt();
         $volt5  = $voltClassImpl->get3Volt();
 

         echo(" 12 volts" .$volt4."\n");
         echo(" 3 volts " .$volt5."\n");

         /*checking that weater mobile are charging or not */
         try{
             echo("enter the voltage\n");
             $v = Utility::getInteger();
             if($v == $voltClassImpl->get3Volt())
             {
                 echo("Mobile Charging...!\n");
             }else{
                 throw new Exception("Mobile not charging..!\n");
             }
         }catch(Exception $e)
         {
             echo $e->getMessage();
         }
     }
    //  /**
    //   * define the testClassAdapter function which give different volt value
    //   */
    //  private static function testClassAdapter()
    //  {   /* create the instace of SocketClassAdapterImpl implementation class*/
    //      SocketAdapter::$scokAdapter = new SocketClassAdapterImpl();
         
    //      /*assign the values */
    //      Volt::$volt3 = getVolt($scokAdapter,3);

    //      Volt::$volt12 = getVolt($scokAdapter,12);
 
    //      Volt::$volt120 = getVolt($scokAdapter,120);
         
    //      ehco("volt3 volts using Class Adapter=".$volt3->getVolts());
    //      ehco("volt12 volts using Class Adapter=".$volt12->getVolts());
    //      ehco("volt120 volts using Class Adapter=".$volt120->getVolts());
    //  }

    //  /**
    //   * create a private function to privide the volt value of Volt instance
    //   * @return volt value as per parameter
    //   */
    //   private static function getVolt(SocketAdapter $scokAdapter,int $i)
    //   {
    //       switch($i)
    //       {   /* return the 3volt value */
    //           case   3: return $scokAdapter->get3Volt();
    //           /* return the 12volt value */
    //           case  12: return $scokAdapter->get12Volt();
    //           /* return the 120volt value */
    //           case 120: return $scokAdapter->get120Volt();
    //           /* return the 120volt value */
    //           default : return $scokAdapter->get120Volt();
    //       }
        
    // }
 }
 $adapter = new AdapterPatternTest;
 $adapter->main();
