<?php
/**** @package    Basic MVC framework* @author     Jeremie Litzler* @copyright  Copyright (c) 2014* @license* @link* @since* @filesource*/// ------------------------------------------------------------------------
/**** Project_service Dao Class** @package     Application/PMTool* @subpackage  Models/Dao* @category    Project_service* @author      FWM DEV Team* @link*/
namespace Applications\PMTool\Models\Dao;if ( ! defined('__EXECUTION_ACCESS_RESTRICTION__')) exit('No direct script access allowed');
class Project_service extends \Library\Entity{  public     $project_id,    $service_id;
  const     PROJECT_ID_ERR = 0,    SERVICE_ID_ERR = 1;
  // SETTERS //  public function setProject_id($project_id) {      $this->project_id = $project_id;  }
  public function setService_id($service_id) {      $this->service_id = $service_id;  }
  // GETTERS //  public function project_id() {    return $this->project_id;  }
  public function service_id() {    return $this->service_id;  }
}