<?php
session_start();
$uniqueid = $_POST["uniqueid"];
$name = $_POST["name"];
$color = $_POST["color"];
$role = $_POST["role"];
$killcount = $_POST["killcount"];


include("../shippingincludes/openDBConn.php");

if (empty($uniqueid)){
	header("Location:shipping/select.php");
}

$sql= "UPDATE Members SET Name='".$name."' , Color='".$color."' , Role='".$role."' , KillCount='".$killcount."' WHERE UniqueId=".$uniqueid;
$result=$conn->query($sql);



include("includes/closeDBConn");

header("Location:shipping/select.php");


?>