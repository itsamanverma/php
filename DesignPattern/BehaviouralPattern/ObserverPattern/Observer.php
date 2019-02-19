<?php
/**
 * @fileName   :Observer.php
 * @purpose    :create the Observer interface which have a method to set the Object to 
 *              watch & another method that will be used by subject to notify them of any Updates
 * @author     :Aman Verma
 * @version    :1.0
 * @since      :18/02/2019
 */
require_once('Subject.php');
/* create the interface class Observer */
interface Observer
{
 /**
  * it has a some abstract function named Update
  */
  public function update(Subject $subject);
  /**
   * create the function for attach with subject to Observer
   * @param instance of subject
   */
   public function setSubject(Subject $sub);
}
?>