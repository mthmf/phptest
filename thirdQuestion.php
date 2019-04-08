<?php

class MyUserClass
{
	public function getUserList()
	{
		$dbconn = new DatabaseConnection('localhost','user','password');
		$results = $dbconn->query('select name from user');
		$result = mysqli_fetch_assoc($results);
		sort($result);
		return $result;
	}
}
?>