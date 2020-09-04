<?php

session_start();
include("includes/openDBConn.php");
$sql="DELETE FROM Shipping WHERE UniqueId=2";
$result=$conn->query($sql);
include("includes/closeDBCon.php");

header("Location:select.php");

?>