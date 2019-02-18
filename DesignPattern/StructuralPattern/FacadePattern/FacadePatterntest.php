<?php
/**
 * @FileName   :FacadePatternTest
 * @purpose    :provide a Wrapper interface on the top of the existing interfeace 
 *             ,this unified interface enables an Objects to access to subsystems.
 * @author     :AMAN VERMA
 * @version    :1.0
 * @since      :18/02/2019
 */
/*create the class shareFacade which work as a Wrapper interface */
class shareFacade
{
  /* Holds a reference to all of the classes.*/
    protected $twitter;
    protected $google;
    protected $reddit;

    /**
     * The objects are injected to the constructor.
     * @param $twitterObj
     * @param $googleObj 
     * @param $reddit 
     */
    function __construct($twitterObj, $gooleObj, $redditObj)
    {
        $this->twitter = $twitterObj;
        $this->google = $gooleObj;
        $this->reddit = $redditObj;
    }

    /**
     * One function makes all the job of calling all the share methods that
     * belong to all the social networks.
     * @param $url
     * @param $title
     * @param $status
     */
    function share($url, $title, $status)
    {
        $this->twitter->tweet($status, $url);
        $this->google->share($url);
        $this->reddit->reddit($url, $title);
    }
}
/*create the class CodeTwit */
class CodeTwit
{
    /**
     * create  the functio Tweet  
     * @param $status
     * @param $url
     */
    function tweet($status, $url)
    {
        echo "Tweeted:" . $status . " from:" . $url;
    }
}

/**
 *  Class to share on Google plus.
 */
class Googlize
{    /**
      *create the function share 
      *@param $url
      */
    function share($url)
    {
        echo "\nShared on Google plus:" . $url;
    }
}

/**
 * Class to share in Reddit.
 */
class Reddiator
{
    /**
     * creata the function reddit 
     * @param $url
     * @param $tittle
     */
    function reddit($url, $title)
    {
        echo "\nReddit! url:" . $url . " title:" . $title;
    }
}


/**
 *  Create the objects from the classes.
 */
$twitterObj = new CodeTwit();
$gooleObj = new Googlize();
$redditObj = new Reddiator();
 
/* Pass the objects to the class facade object. */
$shareObj = new shareFacade($twitterObj, $gooleObj, $redditObj);
 
/* Call only 1 method to share your post with all the social networks. */
$shareObj->share('url --http://www.example.co.in', 'title --example ', 'status --getit');
?>