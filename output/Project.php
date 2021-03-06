<?php
/**** @package    Basic MVC framework* @author     Jeremie Litzler* @copyright  Copyright (c) 2014* @license* @link* @since* @filesource*/// ------------------------------------------------------------------------
/**** Project Dao Class** @package     Application/PMTool* @subpackage  Models/Dao* @category    Project* @author      FWM DEV Team* @link*/
namespace Applications\PMTool\Models\Dao;if ( ! defined('__EXECUTION_ACCESS_RESTRICTION__')) exit('No direct script access allowed');
class Project extends \Library\Entity{  public     $project_id,    $project_name,    $project_number,    $project_desc,    $project_active,    $project_visible,    $pm_id;
  const     PROJECT_ID_ERR = 0,    PROJECT_NAME_ERR = 1,    PROJECT_NUMBER_ERR = 2,    PROJECT_DESC_ERR = 3,    PROJECT_ACTIVE_ERR = 4,    PROJECT_VISIBLE_ERR = 5,    PM_ID_ERR = 6;
  // SETTERS //  public function setProject_id($project_id) {      $this->project_id = $project_id;  }
  public function setProject_name($project_name) {      $this->project_name = $project_name;  }
  public function setProject_number($project_number) {      $this->project_number = $project_number;  }
  public function setProject_desc($project_desc) {      $this->project_desc = $project_desc;  }
  public function setProject_active($project_active) {      $this->project_active = $project_active;  }
  public function setProject_visible($project_visible) {      $this->project_visible = $project_visible;  }
  public function setPm_id($pm_id) {      $this->pm_id = $pm_id;  }
  // GETTERS //  public function project_id() {    return $this->project_id;  }
  public function project_name() {    return $this->project_name;  }
  public function project_number() {    return $this->project_number;  }
  public function project_desc() {    return $this->project_desc;  }
  public function project_active() {    return $this->project_active;  }
  public function project_visible() {    return $this->project_visible;  }
  public function pm_id() {    return $this->pm_id;  }
}