<?php
require_once 'models.php';
require_once '../common/dal.php';
//class model to replicate table in DB    
            
Class EmployeeModel extends Model implements JsonSerializable{

private $employee_id;
private $employee_name;
private $start_empoyment;

function __construct($params) 
{
   $this->tableName =`employee`;
   $this->employee_id= $params["employee_id"];
   $this->employee_name=$params["employee_name"];
   $this->start_employment=$params["startemployment"];
   }


public function getID()
{
    return $this->employee_id;
}

function getName()
{
    return $this->employee_name;
}

function getDate()
{
    return $this->start_employment;
}

function jsonSerialize(){
    return[
      "employee_id"=>$this->getID(),
       "employee_name"=>$this->getName(),
       "startemployment"=>$this->getDate()
    ]; 
     
    }

}

?>