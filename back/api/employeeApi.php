<?php
    require_once 'abstractApi.php';
    require_once '../controllers/employeeController.php';

    class EmployeeApi extends Api{
        function GetById(){
            $e = new EmployeeController;
            $e->getEmployeeById($params);
            return $e; 
        } 
        
        function Create($params) {
            $e = new EmployeeController;
            $e->insertEmployee($params);
            return $e;
        }

        function Read($params) {
            $e = new EmployeeController;
            $employees=$e->getAllEmployees(); 
            return $employees;
                            
        }   
        

        function Update($params) {
            $e = new EmployeeController;
            $employees=$e->updateEmployee($params); 
                return $employees;      
        }
        

         function Delete($params) {
            $e = new EmployeeController; 
            $emp=$e->deleteEmployee($params);
                return $emp;
         }
         
            }
?>

