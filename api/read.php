<?php
	// required headers
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	// required includes 
	include_once 'database.php';
	include_once 'element.php';	
	
	// instantiate database and product object
	$database = new Database();
	$db = $database->getConnection();
 
	// initialize object
	$element = new Element($db);
	$result = $element->read();
		
	$products_arr=array();
	$products_arr["records"]=array();
	
	while($row = mysqli_fetch_array($result)){	
		extract($row);
		$element_item = array(
			"id" => $id,
			"name" => $name
		); 
		array_push($products_arr["records"], $element_item);
	}
	
	header("HTTP/1.1 200 OK");
	echo json_encode($products_arr);
		
?>