<?php
/**
 * @FileName  :ProxyPatternDemo.php
 * @purpose   :create the ProxyPatternDemo for testint the ProcyPattern.
 * @author    :AMAN VERMA
 * @version   :1.0
 * @since     :18/02/2019 
 */
/* create the proxypatternDemo class */
require_once('Image.php');
require_once('ProxyImage.php');
class ProxyPatternDemo
{
    function main()
    {
        $image =new ProxyImage("test_19mb.jpg");
         
        /* image will be loaded from disk */
        $image->display();
        echo("\n");
        /*image will be not loaded from disk */
        $image->dispaly();
    }
}
?>