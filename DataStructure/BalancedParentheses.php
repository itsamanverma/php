<?php

/**********
 * To Ensure parentheses must appear in a balanced fashion.
 *@authour amanverma
 *@version 2.0
 *Date 03/02/2019
 */
/**
 * requried to get input from another class
 */
require 'Utility.php';
require 'Stack.php';
try {
    $stack = new Stack;
//$str="";
//$expression = "(5+6)∗(7+8)/(4+3)(5+6)∗(7+8)/(4+3)";
    echo "enter the Arthamatic Expression \n";
    $expression = Utility::String_input();
    /**
     * splitting the expression
     */
//$arr = str_split($expression);
    $exp = true;
    for ($i = 0; $i < strlen($expression); $i++) {
        $ch = $expression[$i];
        /**
         * condition to push the elemnts
         */
        if ($ch == '(' || $ch == '{' || $ch == '[') {
            $stack->push($ch);

        } elseif ($ch == ')') {
            $res = $stack->pop();
            if ($res != '(')
                $exp = false;
        } elseif ($ch == '}') {
            $res = $stack->pop();
            if ($res != '{')
                $exp = false;
        } elseif ($ch == ']') {
            $res = $stack->pop();
            if ($res != '[')
                $exp = false;
        }
    }
    if ($stack->isEmpty()) {
        echo ("Expression is Balanced..!");
    } else {
        echo ("Expression is Not Balanced..!");
    }
} catch (Throwable $th) {
    echo ("Invalid input..!");
}
?>
 