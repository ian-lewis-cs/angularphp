<?php
        $query=$_GET['api'];
        //if a php file exists in the api folder, call its function
        if (file_exists("api/$query.php"))
        {
                include ("api/$query.php");
                if (function_exists($query))
                {
                        $data = file_get_contents("php://input");
                        $objData = json_decode($data);
						if (json_last_error() == JSON_ERROR_NONE)
							$arr=call_user_func($query,$objData);
						else
							$arr=call_user_func($query,$data);
                        echo json_encode($arr);
                        die();
                }
        }
        //handle 404 error
        echo 'file not found';
?>
