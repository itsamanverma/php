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
}