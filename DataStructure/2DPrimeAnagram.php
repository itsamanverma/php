/** *********************************************************************************************
 * program to  Store the prime numbers  and Anagrams in a 2D Array
 * @author amanverma
 * @version 1.0
 *Date: 06/02/2019
 ***********************************************************************************************************/ 
/**
 * requried to get input from another class
 */
require ('Utility.php');
require ('LinkedList.php');
echo "enter the number \n";
$number = Utility::getInt();
$primeArr = Utility::primes($number);
$primeAnagram = Utility::printAnagrams($primeArr);
$twoDArr = array();
$linkedList1 = new LinkedList();
for ($i = 0; $i < sizeof($primeArr); $i++) {
    $linkedList1->add($primeArr[$i]);
}
for ($i = 0; $i < $linkedList1->size(); $i++) {
    $j = 0;
    if ($linkedList1->search($primeAnagram[$i])) {
        $linkedList1->remove($primeAnagram[$i]);
    } 
}
$linkedList1->display();
echo "\n";
/**
 * convering linkedlist to array
 */
$arr = $linkedList1->llToArr();
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 170; $j++) {
        $twoDArr[$i][$j] = -2;
    }
}
for ($i = 0; $i < sizeof($primeAnagram); $i++) {
    $twoDArr[0][$i] = $primeAnagram[$i];
}
for ($j = 0; $j < sizeof($arr); $j++) {
    $twoDArr[1][$j] = $arr[$j];
}
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < sizeof($primeAnagram); $j++) {
        if ($twoDArr[$i][$j] < 0) {
            echo "\t";
        } else if ($twoDArr[$i][$j] > 0) {
            echo $twoDArr[$i][$j] . " ";
        }
    }
    echo "\n";
}
?>