<?php

//database location
$db_host="localhost";
//database name
$db_name="multi_login";
//database table
$db_table="billing";
//database username
$db_username="ckleist";
//database password
$db_password="d5xL2thg";


//connecting to the database
$conn= new mysqli($db_host, $db_username, $db_table, $db_password, $db_name);

//finding out if the connect was succeeded or failed
if($con->connect_error)

{
  die("Connection failed: " . $conn->connect_error);
}

else{
  echo "Connected Succesfully";
}

?>
