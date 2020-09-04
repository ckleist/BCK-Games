<?php
session_start();
include("/shipping/includes/openDBConn.php");
echo("<?xml version=\"1.0\" encoding=\"UTF-8\"?>");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8" />
	<title>Shipping - Select</title>
</head>

<body>



<h1 style="text-align:center;">Shipping - Select</h1>
	
	<?php
	//sql
	$sql= "SELECT UniqueId, Name, Color, Role, KillCount FROM Shipping";
	$result=$conn->query($sql);
	include("includes/menu.php");
	if ($result->num_rows > 0){
	//	echo "num of rows" 	. $result->num_rows;
			$num_results=$result->num_rows;
	}
	
	else{
	 $num_results=0;
	}
	?>

	<div style="font-style:italic; text-align:center; font-size:9px;">this set of pages validates as HTML5 compliant <br />&nbsp;</div>

	<table style="border:1px; width:500px; padding:0px; margin:0px auto; border-spacing:0px;" title="Pathfinder Goblins Campaign">
		<thead>
			<tr>
				<th colspan="5" style="font-weight:bold; background-color:#C40505; text-align:center; text-decoration:underline;">Shipping Addresses</th>
			</tr>
			<tr>
				<th style="background-color:#C40505; font-weight:bold">Shipping</th>
				<th style="background-color:#C40505; font-weight:bold">Address</th>
				<th style="background-color:#C40505; font-weight:bold">City</th>
				<th style="background-color:#C40505; font-weight:bold">State</th>
				<th style="background-color:#C40505; font-weight:bold">Zip</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5" style="text-align:center; font-style:italic;">Shipping information</td>
			</tr>
		</tfoot>
		<tbody>
<?php 
			for($i = 0; $i<$num_results; $i++){
				$row=$result->fetch_assoc();
			
			
?>

			<tr>
				<td style="background-color:#EAE58F; border-right:1px solid #000000;"><?php echo(trim($row["UniqueId"]));   ?></td>
				<td style="background-color:#EAE58F; border-right:1px solid #000000;"><?php echo(trim($row["Name"]));   ?></td>
				<td style="background-color:#EAE58F; border-right:1px solid #000000;"><?php echo(trim($row["Color"]));   ?></td>
				<td style="background-color:#EAE58F; border-right:1px solid #000000;"><?php echo(trim($row["Role"]));   ?></td>
				<td style="background-color:#EAE58F;"><?php echo(trim($row["KillCount"]));   ?></td>
				
			</tr>
<?php
			}
			include("includes/closeDBConn.php");
			echo $_SESSION["errormessage"];
?>
		</tbody>
	</table>

</body>
</html>
