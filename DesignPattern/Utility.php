<?php
/**@fileName:Utility.php
 * Helper function in the Utility class 
 * @author: Amanverma
 * @version:1.0
 * @date:14/02/2019
 */
class Utility
{
    /**
     * To get Strings array
     */
    public static function getStringArray()
    {
        return trim(fgets(STDIN));
    }
    /**
     * to get String as Input 
     */
    public static function String_input()
    {
        fscanf(STDIN, "%s\n", $str);
        while (!(strlen($str) > 0) || (is_numeric($str)) || $str == null) {
            echo "Enter a valid String \n";
            $str = Utility::String_input();
        }
        return $str;
    }
    /* 
     * to get input unless its an Integer 
     * @return Integer value
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
     * to get input unless its an String
     * @return String value
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
     * to get input unless its an boolean value
     * @return Boolean value
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
     * @return Double Value
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
     * to get integer as input
     */
    public static function getInteger()
    {
        fscanf(STDIN, "%s", $val);
        while (!is_numeric($val) || $val > (int)$val) {
            echo ("enter the valin integer\n");
            fscanf(STDIN, "%s", $val);
        }
        return $val;
    }
}