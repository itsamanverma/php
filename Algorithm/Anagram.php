<?php
/**
 * @authour amanverma
 * @version 2.0
 * Date 25/01/2019
 * One string is an anagram of another if the second is simply a rearrangement of the first. For example, 'heart' and 'earth' are anagrams...
 */
    require ("Util.php");
    echo "Enter first string: ";
    $str  = Util::getString();
    echo "Enter second string: ";
    $str2  = Util::getString();
    $res = Util::is_anagram($str,$str2); 
    echo $res;
?> 