<?php 
require_once 'dal.php';

class BL{
private $tableName;
private $dal;

function __construct(){ 
	$this->dal=new DAL();

} 
//create sql queries to run on database tables 
 public function getAllTable($tableName){
$alldata = $this->dal->query("SELECT * FROM `".$tableName."`");
return $alldata;
}
// Getting the name based on id

public function idCheck($tableName,$id){
$check=$this->dal->query("SELECT * FROM`".$tableName."`WHERE id='$id");
$stmt->execute([$employee_id]);
$check = $stmt->fetchColumn();
}

public function Insert($tableName,$column,$values){
  $insert = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$insert=$this->dal->query("INSERT INTO `".$tableName."`(".$column.") VALUES(".$values.")");
return $insert;	
	}

public function updateData($tableName,$values){
	$update=$this->dal->query("UPDATE `".$tableName."` SET ".$values."WHERE id='$id' ");
	return $update;
}

 public function deleteData($tableName,$id) {
	$remove=$this->dal->query("DELETE FROM`".$tableName."`WHERE id='$id' ");
	return $remove;
}


}
?>
