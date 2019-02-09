<?php
/**
* Read in the following message: Hello <<name>>, We have your full name 
* as <<full name>> in our system. your contact number is 91-xxxxxxxxxx.
* replace any date in the Format xx/xx/xxxx.    
* @author amanverma
* @version 1.0
* Date: 08/02/2019
******************/
require('Utility.php');
$str = 'Hello <<name>>,We have your full name as <<full name>> in our system.your contact number is 91-xxxxxxxxxx.replace any date in the Format xx/xx/xxxx';

/*write the Coustom regex format to match the pattern and replace with proper value*/
$regex = array("/<{2}\w+>{2}/","/<{2}\w+\s\w+>{2}/","/\d{2}\-x{10}+/","/\x*\/x*\/\x*/");

/*enter the name which is replace with full name */
echo("enter the name which is replace with full name \n");
$name = Utility::String_input();
$str = preg_replace($regex[0],$name,$str);

/* enter the full name  */
echo("enter the full name\n");
$fullName = Utility::String_input();
$str = preg_replace($regex[1],$fullName,$str);

/*enter the phone number which is replace */
echo("enter the phone number which is replace\n");
$phNum = Utility::getInteger();
$str = preg_replace($regex[2],$phNum,$str);

/*replace any date in the Format xx/xx/xxxx*/
$date = date();
$str = preg_replace($regex[3],$date,$str);
echo("\n");
echo($str);
/*validation for phone Number*/
try{
   if(strlen($phNum)<10 || strlen($phNum)>10)
   {
      throw new Exception("enter phone is not valid");
   }
 }catch(Exception $e)
 {
   echo $e->getMessage();
 }
?>