<?php 
/**
 * Write a Stopwatch Program for measuring the time that elapses between the start and end clicks
 * @authour amanverma
 *@version 2.0
 *Date 25/01/2019
 */
require ("Util.php");
$start  = round(microtime(true)*1000);
echo $start."\n";
sleep(7);
$stop = round(microtime(true)*1000);
echo $stop."\n";              
$result = Util::stopWatch($start,$stop);
echo "Elapsed Time Between Start and End is : ".$result."\n";
?>