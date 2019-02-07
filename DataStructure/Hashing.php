<?php
/**********
 *Create a Slot of 10 to store Chain of Numbers that belong to each Slot to
 *efficiently search a number from a given set of number 
 *@authour amanverma
 *@version 2.0
 *Date 04/01/2019
 ****************************************************************************************/
require('Utility.php');
require('LinkedList.php');
/**
 * now we the data from file named as filename
 */
$filename="number.txt";
$str =file_get_contents($filename);
/**
 * now read data from spilt into character separate by comma;
 */
$nArr = explode(" ",$str);
/**
 * create a growable Array and the data using LinkedList
 * in which data slipt by space 
 */
$array = [];
/**
 * since the bydefault hashtable size is 11
 */
for($i=0;$i<11;$i++)
{
    /**
     *create the array of LinkedList where remainder takes as keys of array index.
     */
    $array[$i] = new LinkedList();
}
for($i=0;$i<count($nArr);$i++)
{
    /**
     * now as per question data store in the slot(array) divide by 11 and 
     * what evre remainder get stored the array which created the LinKedList as per remainder  
     */
    $li = (int)$nArr[$i]%11;
    $array[$li]->add($nArr[$i]); 
}
/**
 * create the function to print the list of array which Keys takes as array index
 * index calculate no/no of address in the array..!
 * @param $array takes as parameter 
 * @return the list of the array as per index using Chainning method 
 */
function listArr($array)
 {
     $st = "";
     for($i=0;$i<count($array);$i++)
     {
        /**
         * check the condition and add the data in the particular index array using linkedlist
         * as per the hashtable data can be print from top to bottom &
         * within the slot from right to left 
         */
        if($array[$i]->getString1()!=null)
        $st = $st.$array[$i]->getString1()." ";
     }
     return substr($st,0,-1)."\n";
     }
echo ("List is \n".listArr($array));
/**
 * now enter the nummber to serach in the hashtable
 * if no present than remove it $ if not than add in the hashtable
 */
echo("Enter the Number to search \n");
$no = Utility::getInt();
/**
 * now whatever no taken by user divided by 11 to get the keys nothing but index
 */
$r = (int)$no%11;
if($array[$r]->search($no))
{
    echo("if enter no is found \n");
    $array[$r]->remove($no);
}
else
{
   echo("if enter no is not found");
   $array[$r]->add($no);
}
$file =fopen($filename,"w") or die("Unable to open file");
fwrite($file,listArr($array));
fclose($file);
?>