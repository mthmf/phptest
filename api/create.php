<?php
	// required headers
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	// required includes 
	include_once 'database.php';
	include_once 'element.php';	
	
	$database = new Database();
	$db = $database->getConnection();
 
	$element = new Element($db);
 
	// get posted data
	$data = json_decode(file_get_contents("php://input")); 
    $element->name = $data->name;
    
    if($element->create()){
		header("HTTP/1.1 200 OK");
        echo json_encode(array("message" => "Element was created"));
    }
    else{
		header("HTTP/1.0 500 Internal Server Error");
        echo json_encode(array("message" => "Unable to create element."));
    }
?>