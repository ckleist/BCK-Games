<?php
$db_host="142.93.64.17";
$db_name="project1magee9";
$db_username="auser";
$db_password="123";

$conn=new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
else{
//	echo "Connected Successfully";
}


?>