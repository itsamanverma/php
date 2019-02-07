<?php
class Util
{

    /**
     * to get input unless its an String
     */
    public static function getString()
    {
        fscanf(STDIN, "%s\n", $val);
        while (!is_string($val)) {
            echo "Invalid input Try again: ";
            fscanf(STDIN, "%s\n", $val);
        }
        return $val;
    }
    /**
     * Create the function to check the anagram.
     * @param $string_1 shows string taken by user
     * @param $string_1 shows string taken by user     
     */
    public static function is_anagram($string_1, $string_2)
    {
        if (count_chars($string_1, 1) == count_chars($string_2, 1))
            return 'Anagram';
        else
            return 'Not a anagram';
    }
    /**
     * to get input unless its an Integer
     */
    public static function getInt()
    {
        fscanf(STDIN, "%d\n", $val);
        while (!is_numeric($val)) {
            echo ("invalid input enter the valid input..!");
            fscanf(STDIN, "%d\n", $val);
        }
        return $val;
    }
    /**
     * Create the function to check the prime number
     * @param $n shows the number taken by User   
     */
    public static function IsPrime($n)
    {
        for ($i = 2; $i < $n; $i++) {
            $count = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $count++;
                }
            }
            if ($count == 2) {
                return $i;
		        //echo $i." is a prime Number\n";
            }
        }
    }
    /**
     * Function to find the primenumbers
     */
    public static function primes($number)
    {
        $index = 0;
        /**
         * declaring an array
         */
        $primesnumbers = array();
        /**
         * iterations through the loop
         */
        for ($indexi = 1; $indexi <= $number; $indexi++) {
            /**
             * used to check the status of a number
             */
            $count = 0;
            for ($indexj = $indexi; $indexj >= 1; $indexj--) {
                /**
                 *  condition of primenumber
                 */
                if ($indexi % $indexj == 0) {
                    $count++;
                }
            }
            /**
             * equating with 2
             */
            if ($count == 2) {
                $primesnumbers[$index] = $indexi;
                $index++;
            }
        }
        for ($index = 0; $index < sizeof($primesnumbers); $index++) {
            echo $primesnumbers[$index] . " ,";
        }
        return $primesnumbers;
    }
    /**
     * Function to find the primePalindrome Number
     * @param $primenarray shows the list of Prime number
     */
    public static function palindrome($primearray)
    {
        $rev = 0;
        $index = 0;
        echo " palindromes are: \n";
        for ($indexi = 0; $indexi < sizeof($primearray); $indexi++) {
            $num = $primearray[$indexi];
            $rev = strrev("$num");
            if ($num == $rev) {
                echo $primearray[$indexi] . "  ";
            }
        }
    }

    /**
     * Function to find the primenumbers
     */
    public static function primeanagrams($prime)
    {
        echo "  prime anagrams are \n:";
        $index = 0;
        for ($indexi = 0; $indexi < sizeof($prime); $indexi++) {
            for ($indexj = $indexi + 1; $indexj < sizeof($prime); $indexj++) {
                $num = $prime[$indexj];
                $arrayOne = str_split("$num");
                sort($arrayOne);
                $rev = implode("", $arrayOne);
                if ($prime[$indexi] == $rev) {
                    echo $prime[$indexi] . " ";
                    echo $prime[$indexj] . " ";
                }
            }
        }
    }
    /**
     * Create the function for to get Integer array from User.
     */
    static function getIntArr()
    {
        echo "enter array size : ";
        $size = Util::getInt();
        $arr = [];
        echo "enter array value : ";
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = trim(fgets(STDIN));
        }
        return $arr;
    }
    /**
     * Create the function for binary serach for integer.
     * @param &$arr shows referance of integer array taken by user
     * @param $x shows elements taken by user for search.    
     */

    function binarySearch(&$arr, $x)
    {
        try {
    // check for empty array 
            if (count($arr) === 0) {
                throw new Exception('No elements in Array');
            }
            return false;
        } catch (Exception $e) {
            echo 'Caught Exception:', $e->getMessage(), "\n";
        }
        $low = 0;
        $high = count($arr) - 1;
        while ($low <= $high) { 
        // compute middle index
            $mid = (floor($low + $high) / 2); 
        // element found at mid 
            if ($arr[$mid] == $x) {
                return true;
            }
            if ($x < $arr[$mid]) { 
            // search the left side of the array 
                $high = $mid - 1;
            } else { 
            // search the right side of the array 
                $low = $mid + 1;
            }
        } 
    // If we reach here element x doesnt exist 
        return false;
    }

     //To get Strings array
    public static function getArrayString()
    {
        return trim(fgets(STDIN));
    }
    /**********
     *wrtie the static method for insertion sort 
     *@authour amanverma
     *@version 2.0
     *Date 30/01/2019
     */
    public static function insertionSort(&$arr, $n)
    {
        for ($i = 1; $i < $n; $i++) {
            $key = $arr[$i];
            $j = $i - 1; 
	
		// Move elements of arr[0..i-1], 
		// that are greater than key, to 
		// one position ahead of their 
		// current position 
            while ($j >= 0 && $arr[$j] > $key) {
                $arr[$j + 1] = $arr[$j];
                $j = $j - 1;
            }

            $arr[$j + 1] = $key;
        }
    }
    /**********
     *wrtie the static print the Sorted Array
     *@param &$arr shows the reference of integer Array
     *@param $n shows the length of array ttaken by user. 
     *@authour amanverma
     *@version 2.0
     *Date 30/01/2019
     */
    public static function printArray(&$arr, $n)
    {
        for ($i = 0; $i < $n; $i++) {
            echo $arr[$i] . " ";
        }
        echo "\n";
    }
    /**
     * create the method for Insertion sorting Algorithm
     * @param &$arr shows the array reference of integer type 
     * @param $n shoes the length of array..!
     */
    public static function insertionSort2(&$arr, $n)
    {
        for ($i = 1; $i < $n; $i++) {
            $ch1 = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $ch1 < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $ch1;
        }
		// echo("String After the Insertion sort :\n");
		// for($i=0;$i<$n;$i++)
		// {
		// 	echo($arr[$i]+" ");
		// }
    }

    /**
     * Function to sort an array of string
     * @param $arr array to be sorted
     * @return $arr sorted array
     */
    public static function insertionSortFile(&$arr)
    {
        for ($index = 1; $index < sizeof($arr); $index++) {
            $key = $arr[$index];
            $j = $index - 1;
            while ($j >= 0) {
                if (strcmp($arr[$j], $key) < 0) {
                    break;
                }
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $key;
        }
        echo "After sorting the elements in the file \n";
        for ($index = 0; $index < sizeof($arr); $index++) {
            echo $arr[$index] . "\n";
        }
    }
    /**
     * Function to bubble sort an array of integer
     * @param $arr shows the array to be sorted
     * @return $arr sorted array
     */
//  public static function bubbleSort(&$arr) 
//  { 
//      $n = sizeof($arr); 
 
//      // Traverse through all array elements 
//      for($i = 0; $i < $n; $i++) 
//      { 
//          // Last i elements are already in place 
//          for ($j = 0; $j < $n - $i - 1; $j++) 
//          { 
//              // Swap if the element found is greater than the next element
              
//              if ($arr[$j] > $arr[$j+1]) 
//              { 
//                  $t = $arr[$j]; 
//                  $arr[$j] = $arr[$j+1]; 
//                  $arr[$j+1] = $t; 
//              } 
//          } 
//      } 
//      return $arr ;
//  } 
    /**
     * create the method for bubble sorting Algorithm
     * @param ar shows the array of Integer type 
     */
    public static function bubbleSorting(&$ar)
    {
        for ($i = 0; $i < sizeof($ar); $i++) {
            for ($j = $i + 1; $j < sizeof($ar); $j++) {
                if ($ar[$i] > $ar[$j]) {
                    $t = $ar[$i];
                    $ar[$i] = $ar[$j];
                    $ar[$j] = $t;
                }
            }
        }	
		// echo("Array after the Down Bubble Sort");
		// for($i=0;$i<sizeof($ar);$i++)
		// {
		// echo($ar[$i]+" ");
		// }

    }

    /**
     * create the method named findNumber to find the user think No..
     * @param no shows the number which is nothing but based on power of 2
     */

//     public static function findNumber()
//     {
//         $flag = true;
//         $input;
//         $low;
//         $high;
//         $mid;
//         echo ("Enter the no Which is Power Of 2..!");
//         $input = Util::getString();
//         try{
//         while ($flag) 
//         {
//             if (Util::isNumber($input)) 
//             {
//                 $flag = false;
//             } else 
//             {
//                 echo("Enter the correct type of Number no Which is Power Of 2..!");
//                 $input =Util::getString();
//             }
//         }

//     }
//     catch(Throwable $th)
//     {
//           $no =(int)($input);
    
//          $flag1 = check2Power($no);
//         while ($flag1 == 0) {
//             echo("please!, Enter the no Which is a power Of @ only..! ");
//             $no = Util::getInt();
//             $flag1 = check2Power($no);
//         }
//         $ar = new $ar($no);
//         for ($i = 0; $i < $no-1; $i++)
//             $ar[$i] = $i;
//         $low = 0;
//         $high = $no-1;

//         for (; $pw > 0; $pw --) 
//         {
//             $mid = ($low + $high) / 2;

//             echo("Geuss..!,is the Number" + $ar[$mid] + "If yes type 'true' or if No type 'false'..!!");
//             if (is_bool()== true) {
//                 echo("!!..You Won..!!");
//                 return;
//             } else {
//                 echo("Geuss..! if the Number more than " + $ar[$mid] + "If yes type 'true' or if No type 'false'..!!");

//                 if (is_bool()== true)
//                     $low = $mid + 1;
//                 else
//                     $high = $mid;
//             }
//         }
//     }
// }

    /**
     * create the function for to find the guessNumber 
     */
    public static function GuessNumber()
    {
        $low = 0;
        $high = 10;
        for ($index = 0; $index < 10; $index++) {
            while ($low <= $high) {
                $mid = round(($low + $high) / 2);
                echo "If your no is bw " . $low . " and " . $mid . " press 1\n";
                echo "If your no is bw " . $mid . " and " . $high . " press 2\n";
                 //get user no for choice
                $s = Util::getInt();
                /**
                 * user enters 2 and 1 according to output
                 */
                 //if low is high then the no is found
                if ($high == $mid) {
                    echo "your no is " . $high;
                    return $high;
                } else if ($s != 1) {
                    $low = $mid;
                } else {
                    $high = $mid;
                }
            }
        }

    }

    public static function mergeSort($input)
    {
        $len = count($input);
            /*
         * if input size is 1 then return
         *
         */
        if (count($input) == 1) {
            return $input;
        }
        /**
         * calculate mid
         */
        $mid = floor(count($input) / 2);
        /**
         * divide array into two halves until is size is 1
         */
        $left = array_slice($input, 0, $mid);
        $right = array_slice($input, $mid, $len - 1);
        $left = Util::mergeSort($left);
        $right = Util::mergeSort($right);
        /**
         * merge sort the subarrays
         */
        return Util::merge($left, $right);
    }
    /**
     * function to find  merge operation
     */
    public static function merge($left, $right)
    {
        $res = array();
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] > $right[0]) {
                $res[] = $right[0];
                /**
                 * The array_slice() function returns selected parts of an array.
                 * returns the values after index 1
                 */
                $right = array_slice($right, 1);
            } else {
                $res[] = $left[0];
                /**
                 * returns the values after index 1
                 */
                $left = array_slice($left, 1);
            }
        }
        while (count($left) > 0) {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
        while (count($right) > 0) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $res;
    }
    /**
     * create the function named calculateNotes to calculate the no of notes ..!
     * @param $i shows the integer taken by User..!
     * @param $monry shows the amount taken by the User..!
     * @param $notes shows the array of notes..! 
     * @param &$tatal shows the reference of total no of notes in for a particular amounts..!
     */
    public static function calculateNotes($i, $money, $notes, &$total)
    {
        $rem = 0;
        if ($money == 0) {
            return;
        } else {
            if ($money >= $notes[$i]) {
        // logic for Calculating The notes
                $calNotes = (int)($money / $notes[$i]);
                $rem = $money % $notes[$i];
                $money = $rem;
                $total += $calNotes;
                echo $notes[$i] . " Notes -----> " . $calNotes . " \n";
            }
            $i++;
            return Util::calculate($i, $money, $notes, $total);
        }
    }
    /**
     * create the function named daysOfWeek to calculate the no of days ..!
     * @param $d shows the date taken by User..!
     * @param $m shows the month taken by the User..!
     * @param $y shows the year taken by the user..!
     */
    public static function dayOfWeek($d, $m, $y)
    {
        $y0 = floor($y - (14 - $m) / 12) + 1;
        $x = floor($y0 + $y0 / 4 - $y0 / 100 + $y0 / 400);
        $m0 = ($m + 12 * floor(((14 - $m) / 12)) - 2);
        $d0 = floor(($d + $x + floor((31 * $m0) / 12)) % 7);
        return $d0;
    }
    /**
     *  create a function for Temperature conversion program
     * @param $C shows the Celsius tempareture 
     * @param $F shows the Fahrenheit tempareture
     */
    public static function tempConversion($C, $F)
    {
        $C2F = 0;
        $F2C = 0;
        $C2F = ($GLOBALS['C'] * (9 / 5)) + 32;
        $F2C = ($GLOBALS['F'] - 32) * (float)(5 / 9);
        echo " Celsius to Fahrenheit : " . $C2F . "\n ";
        echo " Fahrenheit to Celsius : " . $F2C . "\n";
    }
    /**
     * create a function for Calculate the Monthly Payment
     * @param $y shows the year taken by user..! 
     * @param $r shows the rate of interest taken by user..!
     * @param $p shows the principle amount taken by user..!
     */
    public static function monthlyPayment($y, $r, $p)
    {
        $n = 12 * $y;
        $R = $r / (12 * 100);
        $payment = ($p * $R) / (1 - pow((1 + $R), -$n));
        echo "Monthly Payment " . $payment . "\n";
    }
    /**
     * create a function for Calculate sqrt by newton method.!
     * @param $c shows the nonnegative number taken by user..! 
     */
    public static function squareRoot($c)
    {
        $epsilon = 1e-15;
        $t = $c;
        while (abs($t - $c / $t) > abs($epsilon * $t)) {
            $t = ($c / $t + $t) / 2.0;
        }
        return $t;
    }
    /**
     * create the function to count the notes according to money enter by user
     * @param $money shows money enter by user
     * @param $arrayOne array 
     */
    public static function calcnotes($arrayOne, $money)
    {
        $index = 0;
        while ($money > 0) {
            while ($money >= $arrayOne[$index]) {
                $notes = floor($money / $arrayOne[$index]);
                echo $arrayOne[$index] . " notes are " . $notes . "\n";
                $money = floor($money % $arrayOne[$index]);
            }
            $index++;
        }
    }
    /**
     * create the function to convert the decimal number into binary number 
     * @param $num shows decimal number taken by user 
     */
    function toBin($num)
    {
        $bin = "";
        while ($num >= 1) {
            $bin = ($num % 2) . $bin;
            $num = round($num / 2, 0, PHP_ROUND_HALF_DOWN);
        }
        return $bin;
    }

}
?>