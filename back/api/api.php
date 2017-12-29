<?php
    require_once 'employeeApi.php';
    $method = $_SERVER['REQUEST_METHOD']; // verb
       
    if($method == 'PUT' || $method == 'DELETE') {
        parse_str(file_get_contents("php://input"),$post_vars);
        $params = $post_vars['employeesArray']; 
    }
    else{
        $params = $_REQUEST['employeesArray'];
    }
    while ($_REQUEST["ctrl"]='employee'){
           
            $eapi = new EmployeeApi();
            $result  = $eapi->gateway($method,['id'=> $_REQUEST["id"]]);
            echo json_encode($result);
    }
          
           
    
   
?>