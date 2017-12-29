<?php
require_once 'dal.php';

class Validation 
{
    public function check_empty($data, $fields)
    {
        $msg = null;
        foreach ($fields as $value) {
            if (empty($data[$value])) {
                $msg .= "$value field empty <br />";
            }
        } 
        return $msg;
    }
 
    public function is_name_valid($name){
        //if is alphanumeric charcters
        if (preg_match("/^[a-zA-Z'-]+$/"))
     {
        return true;
        }
        return false;
    }
    public function is_date_valid($date)
    {     
         //if (is_numeric($date)) {
        if (preg_match("^([0]?[1-9]|[1|2][0-9]|[3][0|1])[./-]([0]?[1-9]|[1][0-2])[./-]([0-9]{4}|[0-9]{2})$", $date)) {    
            return true;
        } 
        return false;
    }
    
    
    }
    ?>