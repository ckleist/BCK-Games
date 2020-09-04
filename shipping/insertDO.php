<?php
session_start();
$uniqueid = $_POST["uniqueid"];
$name = $_POST["name"];
$color = $_POST["color"];
$role = $_POST["role"];
$killcount = $_POST["killcount"];
//test variables working
//echo $uniqueid . $name . $color . $role . $killcount;

if (($uniqueid == "") || ($name== "") || ($color == "") || ($role == "" ) || ($killcount == "")){
	$_SESSION["errormessage"]= "You must enter a value for all boxes!";
	header("Location:insert.php");
	exit;
}
else{
	$_SESSSION["errormessage"]= "";
}

include("includes/openDBConn.php");
$sql= "SELECT UniqueId FROM Shipping WHERE UniqueId=". $uniqueid;
$result=$conn->query($sql);

if ($result->num_rows > 0){
	$num_results = $result->num_rows;
}
else{
	$num_results = 0;
}

if ($num_results != 0){
	$_SESSION["errormessage"] = "The shipping address you are trying to create already exists.";
	header("Location:shipping/insert.php");
	exit;
}
else{
	$_SESSION["errormessage"]="";
}
$sql="INSERT INTO `Shipping` (`UniqueId`, `Name`, `Role`, `Color`, `KillCount`) VALUES (".$uniqueid.", '".$name."', '".$role."', '".$color."', '".$killcount."')";
$result=$conn->query($sql);
include("includes/closeDBConn.php");
header("Location:shipping/select.php");

?>