<?php
/**
 * @FileName   : Subject.php
 * @purpose    : create the subject interface which contain list of Observers to notify
 *               of any change in its state.
 * @author     : AMAN VERMA
 * @version    :1.0
 * @since      :18/02/2019
 */
/*create the interface named as Subject */
interface Subject
{
    /**
     * it has some abstract function named as register
     * @param Observer instance
     */
    public function register(Observer $obj);

    /**
     * it has some abstract function named as unregister
     * @param Observer instance
     */
    public function unregister(Observer $obj);

    /**
     * function to notify observers of change
     * it has some abstract function named as notifyObservers
     * @param Observer instance
     */
    public function notifyObservers();

    /**
     * function to get updates from subject
     * it has some abstract function named as register
     * @param Observer instance
     */
    public function getUpdate(Observer $obj);
}