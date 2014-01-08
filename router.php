<?php
	$query=str_replace('/','',$_SERVER['REQUEST_URI']);
	//uncomment this line if your api is case insensitive
	//$query=strtolower($query);
	$query=str_replace('.php','',$query);
	//if a php file is found in the root folder, use it
	if (file_exists("$query.php"))
	{
		if ($query!='router')
			include ("$query.php");
		die();
	}
	//if a php file exists in the api folder, call its function
	if (file_exists("api/$query.php"))
	{
		if (function_exists($query))
		{
			$data = file_get_contents("php://input");
			$objData = json_decode($data);
			$arr=call_user_func($query,$objData);
			echo json_encode($arr);
			die();
		}
	}
	//handle 404 error
	echo 'file not found';
?>