<?php
/**
* Stock Portfolio Class holding the list of Stocks read from the input file. 
* Have functions in the Class to calculate the value of each stock and the value of total stocks  
* @author amanverma
* @version 1.0
* Date: 08/02/2019
******************/
require('Utility.php');
require('stockReport.php');
class StockPortfolio extends Stock
{
            /* create the function to write the data to json file */
            public function writeJson($file) {
            $stock = new Stock();
            echo "enter number of stocks\n";
            $no = Utility::getInteger();
            for ($i = 0; $i < $no; $i++) {
            echo "Enter the Stock " . ($i + 1) . " details\n\n";
            echo "enter the stock name\n";
            $stockName = Utility::String_input();
            $stock->setStockName($stockName);
            echo "enter the number of shares \n";
            $nofShares = Utility::getInteger();
            $stock->setNumberOfShare($nofShares);
            echo "enter the share price\n";
            $sharePrice = Utility::getInteger();
            $stock->setSharePrice($sharePrice);
            $obj[] = array('stock name' => $stockName, 'no of shares' => $nofShares, 'share price' => $sharePrice);
            $jData = json_encode($obj);
            $jStr = file_put_contents($file, $jData);
            // $stck->writeJson($file);
               }
             } 
 
            /* create the function to read the data to json file */
            public function readJson($file)
             {
            $fileStr = file_get_contents($file);
            $jsonData = json_decode($fileStr, true);
            return $jsonData;
             }
 
             /*create the function to printData */
             public function printReport ($jsondata)
            {
            $totalStockValue = 0;
            echo "STOCK REPORT \n\n";
            foreach ($jsondata as $stock1) {
            $name = $stock1['stock name'];
            $noShares = $stock1['no of shares'];
            $price = $stock1['share price'];
            $shareValue = $noShares * $price;
 
            $totalStockValue += $shareValue;
            printf('Name : %s ' . "\t". 'number of shares : %d' . "\t" . 'price : %d ' ."\t". 'value : %d  ' . PHP_EOL, $name, $noShares, $price, $noShares * $price);
            }
            echo "Total stock value : " . $totalStockValue . "\n";
           }
 
}
$stockReport = new StockPortfolio();
$file = "jsonStock.json";
$stockReport->writeJson($file);
$data = $stockReport->readJson($file);
echo "\n";
$stockReport->printReport($data);