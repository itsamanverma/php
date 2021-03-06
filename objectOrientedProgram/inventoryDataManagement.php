<?php
/**
* The InventoryManager will call each Inventory Object in its list to calculate 
* the Inventory Price and then call the Inventory Object to return the JSON String.   
* @author amanverma
* @version 1.0
* Date: 08/02/2019
************************************************************/
require('Utility.php');
require('inventory.php');
/* create the class which extends the inventoryDetail class */
class inventoryDataManagement extends inventory
{ 
    /**
      * create the to read the data from json  
      */
        public function readJson($file){
        $fileStr = file_get_contents($file);
        $jsonData = json_decode($fileStr,true);
        return $jsonData;
    }
      /**
       * create the function to write the json to the file 
       */
        public function writeJson($file){
        $inventory = new inventoryDataManagement();
        echo "enter no of inventories\n";
        $no = Utility::getInteger();
        for($i=0;$i<$no;$i++){
            // echo "enter category\n"; 
            // $cat = Oops::getString();
            
            echo "enter name\n";
            $name = Utility::String_input();
            $inventory->setName($name);
            echo "enter weight\n";
            $weight = Utility::getInteger();
            $inventory->setWeight($weight);
            echo "enter price\n";
            $price = Utility::getDouble();
            $inventory->setPrice($price);
            $jData[] = array('name'=>$inventory->getName(),'weight'=>$inventory->getWeight(),'price'=>$inventory->getPrice());     
            $data = json_encode($jData);    
            file_put_contents($file,$data);
            
            echo "\n";
        }
        // file_put_contents($file,$data);
        $jdata = $inventory->readJson($file);
        $inventory->print($jdata);
        
    }
        /* create the function to print the json data in jsonfile */
        function print($jsonData){
                foreach($jsonData as $grocery){
                $name = $grocery['name'];
                $weight = $grocery['weight'];
                $price = $grocery['price'];
                printf('Name : %s '.PHP_EOL.'weight : %d'.PHP_EOL. 'price : %d '.PHP_EOL.'inventaoryTotalPrice : %d  '.PHP_EOL.PHP_EOL, $name,$weight,$price, $weight*$price);
            }
    }
}
$file = "jsonFile.json";
$inventory = new inventoryDataManagement();
$inventory->writeJson($file);
$jData = $inventory->readJson($file);
 