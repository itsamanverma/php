<?php

/**********
 * Helper function containing methods to use in other php classes
 *@authour amanverma
 *@version 2.0
 *Date 23/01/2019
 */
class Util
{
    /**
     * to get input unless its an integere
     */
    public static function getInteger()
    {
        fscanf(STDIN, "%s \n", $val);
        if ($val == 0) {
            while (!is_numeric($val)) {
                echo "invalid input enter again\n";
                fscanf(STDIN, " %s\ n ", $val);
            }
            return $val;
        } else {
            while (!is_numeric($val) || $val / (int)$val > 1) {
                echo "invalid input enter again\n";
                fscanf(STDIN, " %s\n ", $val);
            }
            return (int)$val;
        }
    }
    /**
     * to get input unless its an boolean value
     */

    public static function getBoolean()
    {
        fscanf(STDIN, "%s\n", $val);
        while ($val !== 't' && $val !== 'f') {
            echo "invalid input enter again\n";
            fscanf(STDIN, " %s\n ", $val);
        }
        return $val;
    }
    /**
     * to get input unless its an decimal value
     */
    public static function getDouble()
    {
        fscanf(STDIN, "%f\n", $val);
        while (!is_float($val)) {
            echo "invalid input enter again\n";
            fscanf(STDIN, " %f\n ", $val);
        }
        return $val;
    }
    /**
     * to get input unless its an Intarr;
     */
    public static function getIntArr()
    {
        echo "enter array size \n ";
        $size = utility::getInt();
        $arr = array();
        echo "enter array value \n ";
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = utility::getInt();
        }
        return $arr;
    }
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
     * FUNCTION for gambler
     */
    /*  public static function gambler($stack,$goal,$times){
    $wins=0;
    $bets=0;
    //loop to gamble no of time given by user
    for($i = 0 ; $i <= $times ; $i++){
    $cash = $stack ;
    //loop till player got broke or win
    while($cash>0&&$cash<$goal){
    $bets++;
    $val=rand(0,1);
    if($val<0.5){   //checking the condition
    $cash++;
    }
    else{
    $cash--;
    }
    if($cash==$goal){
    $wins++;
    }
    }
    }
    // display results of gamble
    echo $wins." wins out of ".$times;
    echo "\n total bets : ".$bets."\n" ;
    echo "wins % is ".($wins/$times * 100)."%\n";
    } */
    public static function gambler($stake, $goal, $trials)
    {
        $wins = 0;
        $bets = 0;
        //iterating the loop from 1 to the no of trials user have entered
        for ($index = 1; $index <= $trials; $index++) {
            // assigning the user stake value to cash
            $cash = $stake;
            //checking the condition
            while ($cash > 0 && $cash < $goal) {
                $bets++;
                // genearting the random value by using rand method between 0 and 1
                $value = rand(0, 1);
                echo $value . " \n";
                if ($value < 0.5) {
                    //incrementing the cash value;
                    $cash++;
                } else {
                    // decrementing the cash value;
                    $cash--;
                }
            }
            // comparing the cash and goal values
            if ($cash == $goal) {
                $wins++;
            }
        }
        //printing the no of wins of trials
        echo " the total number of wins  " . $wins . " of trials " . $trials . "\n";
        echo "the percentage of wins is \n" . ($wins / $trials * 100) . "\n";
    }
    /** function to arrange the el3ements in 2D array*/
    public static function twoArray($rows, $cols)
    {
       // echo" Read the 2D array from user ";
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $twoDArr[$i][$j] = Util::getInteger();
            }
        }
        echo " print the Two dimentional  array is : \n";
        $arr = array_values($twoDArr);
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                echo $arr[$i][$j] . " ";
            }
            echo "\n";
        }
    }
    /**
     * function to find nth value of harmonic value
     */
    public static function getHarmonic($value)
    {
        //echo "enter the harmonic number \n";
        //$value =utility::getInt();
        $harmonic = 0.0;
        for ($i = 1; $i <= $value; $i++) {
            $harmonic = $harmonic + (1.0 / $i);
            echo "1" . "/" . $i;
            if ($i < $value)
                echo "+";
        }
        //secho "\n";
        echo "=" . $harmonic . "\n";
    }
    /**
     * function to find the permutation of a String
     */
    public static function stringPermutation($str)
    {
        echo "permution words are \n";
        //trim=removing characters from both sides
        $str1 = trim($str);
        if (!empty($str)) {
            utility::permuation("", $str1);
        } else {
            echo "enter alteast one character \n";
        }
    }
    public static function permuation($perm, $word)
    {
        if (empty($word)) {
            echo $perm . $word . "\n";
            for ($i = 0; $i < strlen($word); $i++) {
                utility::permuation($perm . $word {
                    $i}, substr($word, 0, $i) . substr($word, $i + 1, strlen($word)));
            }
        }
    }
    /**
     * Function to find if no is prime or not
     * @param n the no to check
     * @return true/false if prime or  not
     */
    public static function isPrime($n)
    {
        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    // wind chill
    public static function wind($t, $v)
    {
        if ($t < 50 && $t > 3) {
            $windchill = 35.74 + 0.6215 * $t + (0.4275 * $t - 35.75) * (pow($v, 0.16));
            echo $windchill;
        }
    }
    // Quadratic
    public static function roots($a, $b, $c)
    {
        $Delta = ($b * $b) - (4 * $a * $c);
        $root1 = (-$b + sqrt($Delta)) / 2 * $a;
        $root2 = (-$b - sqrt($Delta)) / 2 * $a;
        echo " the roots are " . "\n";
        echo $root1 . "\n";
        echo $root2 . "\n";
    }
    /**
     * Create the function to calculate the triples of integer in the given integer array
     * @param $ar shows integer array taken by user
     * @param $n shows the size of array 
     */
    public static function findTriplets($ar, $n)
    {
        $found = true;
        for ($i = 0; $i < $n - 2; $i++) {
            for ($j = $i + 1; $j < $n - 1; $j++) {
                for ($k = $j + 1; $k < $n; $k++) {
                    if ($ar[$i] + $ar[$j] + $ar[$k] == 0) {
                        echo "Triplets are :" . $ar[$i], " ",
                            $ar[$j], " ",
                            $ar[$k], "\n";
                        $found = true;
                    }
                }
            }
        }
        if ($found == false)
            echo " not exist ", "\n";
    }
    /**
     * create a static function named as checkLeapyear to check the leap year
     * @param $year shaws the parameter to
     */
    public static function checkLeapyear($year)
    {
        return (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0));
    }
    /**
     * prints Power of 2
     */
    public static function powersof2($n)
    {
        for ($i = 1; $i <= $n; $i++) {
            echo (pow(2, $i) . "\n"); // calcuating the power value
        }
    }
    /****
     *Function to find flip
     * @param head the no to check no of times it flips
     * @param tais the no to check no of times it flips
     */
    public static function flip($trails)
    {
        $head = 0;
        $tails = 0;
        for ($is = 0; $is < $trails; $is++) {
            if (rand(0, 1) > 0.5) {
                $head++;
            } else {
                $tails++;
            }
        }
        echo "heads is " . $head . "\n";
        echo "tails is " . $tails;
        $tailPercent = ($tails / $trails) * 100;
        $headsPercent = 100 - $tailPercent;
        echo "tails percentage" . $tailPercent . PHP_EOL;
        echo "heads percentage" . $headsPercent . PHP_EOL;
    }
    /****
     * create a Function to find primefactor
     * @param $num shows that number which prime factor we wants to find.
     * @param $even shows the number 
     */
    public static function primeFactors($number)
    {
        //firstly dividing the num by 2 until the loop terminates
        while ($number % 2 == 0) {
            echo "2";
            // again the number is dividing by 2 to get quotient value
            $number = $number / 2;
        }
        //iterates the loop with only prime numbers
        for ($index = 3; $index <= $number; $index = $index + 2) {
            while ($number % $index == 0) {
                if ($index < $number)
                    echo (",");
                if ($index <= $number) {
                    echo $index;
                    echo "\n";
                }
                // if($index<$number)
                // echo(",");
                //dividing the number by index of prime value
                $number = $number / $index;
            }
        }
    }
    /****
     * create a Function to find primefactor
     * @param $num shows that number which prime factor we wants to find.
     * @param $even shows the number 
     */
    public static function findFactor($num)
    {
        $even = 2;
        while ($num > $even * $even) {
            if ($num % $even == 0) {
                echo ("$even");
                $num = $num / $even;
            } else
                $even = $even + 1;
        }
        echo ($num);
    }

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
     * 2D array for integer
     * Create the function twoDArrayForInteger() to stored the Integer value: 
     */
    public static function twoDArrayForInteger()
    {
        echo "enter row size" . "\n";
        $m = Util::getInt();
        echo "enter colums size" . "\n";
        $n = Util::getInt();
        $arr = array();//create a array to stroed the Integer 
        echo "enter valus" . "\n";
        for ($i = 0; $i < $m; $i++) {
            $iArr = array();
            for ($j = 0; $j < $n; $j++) {
                $iArr[$j] = trim(fgets(STDIN));
            }
            array_push($arr, $iArr);
        }
        echo ("print the stored Integer\n ");
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                echo $arr[$i][$j] . " ";
            }
            echo "\n";
        }
    }
    /**
     * 2D array for double
     * Create the function twoDArrayForDouble() to stored the double value: 
     */
    public static function twoDArrayForDouble()
    {
        echo "enter row size" . "\n";
        $m = Util::getInt();
        echo "enter colums size" . "\n";
        $n = Util::getInt();
        $arr = array();
        echo "enter valus" . "\n";
        for ($i = 0; $i < $m; $i++) {
            $iArr = array();
            for ($j = 0; $j < $n; $j++) {
                $iArr[$j] = Util::getDouble();
            }
            array_push($arr, $iArr);
        }
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                echo $arr[$i][$j] . " ";
            }
            echo "\n";
        }
    }
    /**
     * 2D array for boolean
     * Create the function twoDArrayForBoolean() to stored the double value: 
     */
    public static function twoDArrayForBoolean()
    {
        echo "enter row size" . "\n";
        $m = Util::getInt();
        echo "enter colums size" . "\n";
        $n = Util::getInt();
        $arr = array();
        echo "enter valus" . "\n";
        for ($i = 0; $i < $m; $i++) {
            $iArr = array();
            for ($j = 0; $j < $n; $j++) {
                $iArr[$j] = Util::getBoolean();
            }
            array_push($arr, $iArr);
        }
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                echo $arr[$i][$j] . " ";
            }
            echo "\n";
        }
    }
    /****
     * create a Function to find euclideanDistance to calculate the distance from origine 
     * @param $x shows the abscissa from origine
     * @param $y shows the ordinate from origine
     * @return distance from origine
     */
    public static function euclideanDistance($x, $y)
    {
        //sqrt is the inbiuld function of php which return the float value. 
        return sqrt($x * $x + $y * $y);
    }
    /****
     * create a Function to find Permutation of String 
     * @param $str  shows the String taken by User..!
     * @param $l shows the Zeroth index character of String.
     * @param $r shows the last index  character of String.
     */
    public static function permute($str, $l, $r)
    {
        if ($l == $r)
            echo $str . "\n";
        else {
            for ($i = $l; $i <= $r; $i++) {
                $str = Util::swap($str, $l, $i);
                Util::permute($str, $l + 1, $r);
                $str = Util::swap($str, $l, $i);
            }
        }
    }
    /****
     * create a Function to swap the character accordind to condition
     * @param $st  shows the String taken by User..!
     * @param $i shows the Zeroth index character of String.
     * @param $j shows the last index  character of String.
     */
    public static function swap($st, $i, $j)
    {
        $temp;
        $charArray = str_split($st);
        $temp = $charArray[$i];
        $charArray[$i] = $charArray[$j];
        $charArray[$j] = $temp;
        return implode($charArray);
    }
    /****
     * create a Function stopWatch to calculate elapsedtime in b/w the start time & stop time 
     * @param $start time taken by User..!
     * @param $stop time taken by User..!.
     */
    public static function stopWatch($start, $stop)
    {
        $elapsedTime = (int)$stop - (int)$start;
        return $elapsedTime;
    }
    /****
     * create a Function to calculate the quadratic root of equation.
     * @param $a shows the Coeffieient of x^2 taken by User..!
     * @param $b shows the Coeffieient of x^1 taken by User..!
     * @param $c shows the Coeffieient of x^0 taken by User..!
     */
    public static function quadratic($a, $b, $c)
    {
        if ($a === 0) {
            echo "Invalid result: ";
            return;
        }
        $delta = $b * $b - 4 * $a * $c;
        $result = sqrt(abs($delta));
        if ($result > 0) {
            echo " The roots are real and different \n";
            echo " Positive value of given root is: " . (-$b + $result) / (2 * $a) . "\n" . " Negative value of given root is: " . (-$b - $result) / (2 * $a) . "\n";

        } else if ($delta == 0) {
            echo "Roots are real and same:\n";
            echo -$b / (2 * $a);
        } else {
            echo "Roots are complex \n";
            echo -$b / (2 * $a) . "+i" . $result . "\n" . -$b / (2 * $a) . "-i" . $result . "\n";
        }
    }
    /****
     * create a Function to take the flaot as a input.
     */
    public static function getFloat()
    {
        fscanf(STDIN, "%f\n", $val);
        while (!is_float($val)) {
            echo "invalid input enter again\n";
            fscanf(STDIN, " %f\n ", $val);
        }
        return $val;

    }

    /**
     * create  the function to check the Value at position
     * @param $ar shows 2D array in which comp or user enter the value 
     * @param $index shows that random position on the matrix
     */
    public static function valueAtPosition($ar, $index)
    {
        switch ($index) {
            case 1:
                return $ar[0][0];
            case 2:
                return $ar[0][1];
            case 3:
                return $ar[0][2];
            case 4:
                return $ar[1][0];
            case 5:
                return $ar[1][1];
            case 6:
                return $ar[1][2];
            case 7:
                return $ar[2][0];
            case 8:
                return $ar[2][1];
            case 9:
                return $ar[2][2];
            default:
                return 1;
        }
    }
    /**
     * create  the function to enter the value at position by computer
     * @param $ar shows 2D array in which computer or user enter the value
     * @param $index shows the random position in the matrix
     * @param $num show that it comp chance or user chance 
     * @return the 2D matrix with enter value on the positions
     */

    public static function enter($ar, $index, $num)
    {
        switch ($index) {
            case 1:
                $ar[0][0] = $num;
                return $ar;

            case 2:
                $ar[0][1] = $num;
                return $ar;

            case 3:
                $ar[0][2] = $num;
                return $ar;

            case 4:
                $ar[1][0] = $num;
                return $ar;

            case 5:
                $ar[1][1] = $num;
                return $ar;

            case 6:
                $ar[1][2] = $num;
                return $ar;

            case 7:
                $ar[2][0] = $num;
                return $ar;

            case 8:
                $ar[2][1] = $num;
                return $ar;

            case 9:
                $ar[2][2] = $num;
                return tac;
        }
        return $ar;
    }
    /**
     * create  the function to check that who won comp or user
     * @param $ar shows 2D array in which computer or user enter the value
     * @param $val show that it comp chance or user chance 
     * @return the integer value which is show the comp won or user
     */

    public static function checkIfWon($ar, $val)
    {
        $flag = 0;

        if (($ar[0][0] == $val && ($ar[0][1] == $val && $ar[0][2] == $val) || ($ar[1][0] == $val && $ar[2][0] == $val)))
            $flag = 1;
        else if (($ar[1][1] == $val && ($ar[0][0] == $val && $ar[2][2] == $val) || ($ar[0][2] == $val && $ar[2][0] == $val)))
            $flag = 1;
        else if (($ar[1][0] == $val && $ar[1][1] == $val && $ar[1][2] == $val))
            $flag = 1;
        else if ($ar[2][0] == $val && $ar[2][1] == $val && $ar[2][2] == $val)
            $flag = 1;
        else if (($ar[0][2] == $val && $ar[1][2] == $val && $ar[2][2] == $val) || ($ar[0][1] == $val && $ar[1][1] == $val && $ar[2][1] == $val))
            $flag = 1;

        return $flag;
    }
    /**
     * create  the function named as printGame who's show that the condition of won or loose  
     * @param $ar shows 2D array in which computer or user enter the value
     */
    public static function printGame($ar)
    {
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($ar[$i][$j] == 0)
                    echo ("X");
                else if ($ar[$i][$j] == 1)
                    echo ("O");
                else
                    echo ("-");
            }
            echo ("\n");
        }
    }
    /**
     * create  the function named as checkIfEnd who's shows that in these situation who is win comp or user
     * @param tac shows 2D array in which computer or user enter the value
     */
    public static function checkIfEnd($ar)
    {
        $won = 1;

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($ar[$i][$j] == 0 || $ar[$i][$j] == 1)
                    continue;
                else
                    $won = 0;
            }
        }
        if ($won == 1)
            echo ("Game Over..!");
        return $won;
    }

    /**
     * Create the Method To Check String is Anagram Or Not
     * @param $string_1 shows the users giver string
     * @param $string_2 shows the users giver string
     * @return boolean value in terms of true of false
     */

    public static function is_anagram($string_1, $string_2)
    {
        if (count_chars($string_1, 1) == count_chars($string_2, 1))
            return 'Anagram';
        else
            return 'Not a anagram';
    }
}
?>