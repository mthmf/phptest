<?php
class Element{
    private $conn;
    private $table_name = "tasks";

    public $id;
    public $name;
 
    public function __construct($db){
        $this->conn = $db;
    }
	function read(){ 
		$sql = "SELECT id, name FROM ".$this->table_name ;	 
		$result = mysqli_query($this->conn, $sql);
		return $result;
	}
	function rowCount(){ 
		$sql = "SELECT * FROM ".$this->table_name ;	 
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
	
	function create(){
		$sql = "INSERT INTO ".$this->table_name." (name) VALUES ('".$this->name."') "; 
		if(mysqli_query($this->conn, $sql)){
			return true;
		} else {
			return false;
		}
	}
	
	function update(){
		$sql = "UPDATE ".$this->table_name." set name='".$this->name."' WHERE id = ".$this->id; 
		if(mysqli_query($this->conn, $sql)){
			return true;
		} else {
			return false;
		}
	}
	
	function deletar(){
		$sql = "DELETE FROM ".$this->table_name." WHERE id = ".$this->id; 
		if(mysqli_query($this->conn, $sql)){
			return true;
		} else {
			return false;
		}
	}
}
	
?>
