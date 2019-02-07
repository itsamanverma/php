<?php
/**********
 *Program to Read the Text from a file, split it into words and arrange it as Linked List.
 *@authour amanverma
 *@version 2.0
 *Date 02/02/2019
 */
//requires method in Utility to take input and find flips of
require 'Utility.php';
require 'LinkedList.php';
class OrderedList
{
    /**
     * function to read ,search, add to the list
     */
    public static function Search()
    {
        /**
         * name of the file
         */
        $filename = "list.txt";
        $list = new LinkedList();
        /**
         * opens the file and reads the data
         */
        $file = fopen($filename, "r") or die("unable to open the file");
        if($file == false)
        {
            echo("Error in opening file");
            exit();
        }
        $filesize = filesize($filename);
        $filetext = fread($file,$filesize);
        /**
         * converting  string to array
         */
        $filearr = explode(" ", $filetext);
        $Sfilearr=sort($filearr);
        print_r($filearr);
        /**
         * adding to the list
         */
        for ($i = 0; $i < count($filearr); $i++) {
            $list->add($filearr[$i]);
        }
        echo " enter element to search \n";
        $elements = Utility::getInt();
        // echo " Enter the position ";
        // $pos = Utility::getInt();
        /**
         * searching the elemnt in the list
         *(===) used for identical values and returns true
         */
        if ($list->Search($elements) === true) {
            echo " element found \n removing element \n";
            /**
             * removing elements from list
             */
            $list->remove($elements);
            /**
             * getting the data from list
             */
            echo $list->getData();
        } else {
            echo "element not found & postion \n adding element \n";
            $list->add($elements);
            //$list->insert($pos,$elements);
            echo $list->getData();
        }
        /**
         * writing back to the file 
         */
        $file1 = fopen($filename, "w");
        $filewrite = fwrite($file1, $list->getData());
        // $fileWritearr=explode(" ",$filewrite);
        // $Sfilewrite = sort($filewrite);
        // print_r($Sfilewrite);
        // $Sfilearr=sort($filearr);
        // echo((String)$filearr);

    }
}
/**
 * calling the method
 */
OrderedList::Search();
