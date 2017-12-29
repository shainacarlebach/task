<?php

require_once 'controller.php';
require_once '../models/employeeModel.php';
require_once '../common/bl.php';
require_once '../common/validations.php';

class EmployeeController extends Controller{
       private $tableName='employee';
       private $model;

// Get all employees to display to client       

function getAllEmployees(){
$bl = new BL();	
$employeeArray=array();	
$allemployees=$bl->getAllTable($this->tableName);


foreach($allemployees as $row){
	$employees= new EmployeeModel ($row);
array_push($employeeArray,$employees->jsonSerialize());
}
 return $employeeArray;
}

function getEmployeeById(){
 $bl=new BL();
 $getEmployee=$bl->idCheck($this->tableName);
 while ($employees= new EmployeeModel ($row))
 {
    if ($employee_id==$row["employee_id"])
    {
     $Employee = "Employee's name is:".$row["employee_name"]."\n".
     "commenced employment on:".$row["start_employment"];       
     echo $Employee; 
     return $Employee;  
     }
 }
}
function insertEmployee(){
    $bl=new BL();
    $values=array();
$newEmployee=$bl->Insert($this->tableName);

$newEmployee->execute(array(
"employee_id"=>$values['id'],
"employee_name"=>$values['name'],
"start_employment"=>$values['start_date']));
return $newEmployee;
}

function updateEmployee(){
    $bl=new BL();
    $row=array();
    $employees= new EmployeeModel ($row);
    $validation = new Validation();
     
    if(isset($_POST['update']))
    {    
        $id = $employees->getID();
        
        $employee_name = $_POST['name'];
        $start_employment = $_POST['start_date'];
        
        $msg = $validation->check_empty($_POST, array('name', 'start_date'));
        $check_name = $validation->is_name_valid($_POST['name']);
        $check_date = $validation->is_date_valid($_POST['date']);
        
        // checking empty fields
        if($msg) {
            echo $msg;        
            //link to the previous page
            echo "<br/><a href='index.html';'>Go Back</a>";
        } else if (!$check_name) {

            echo 'Please provide proper name.';
        } elseif (!$check_date) {
            echo 'Please provide proper date.';    
        } else {    
            //updating the table
            $result = $bl->updateData("UPDATE 'employee' SET employee_name='$name',start_employment='$start_date' WHERE employee_id=$id");
            
            //redirectig to the display page. In our case, it is index.php
            header("Location: index.html");
        }
    } 
}
function deleteEmployee(){
    
$id = $_GET['employee_id'];
$bl=new BL();
//deleting the row from table
$del = $bl->deleteData('employee',$employee_id);
$del->execute(array(':employee_id' => $id));

//redirecting to the display page (index.php in our case)
header("Location:index.html");
}
}
?>












    
   
