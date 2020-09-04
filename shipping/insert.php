<?php
session_start();
include("includes/openDBConn.php");
if(empty($_SESSION["errormessage"])){
	$_SESSION["errormessage"]= "";
}
echo("<?xml version=\"1.0\" encoding=\"UTF-8\"?>");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8" />
	<title>Insert Shipping Address</title>
	<meta http-equiv="Content-Type" content="text/html; UTF-8" />
	<style type="text/css">
		ul{ list-style:none; margin-top:5px;}
		ul li{ display:block; float:left; width:100%; height:1%;}
		ul li label{ float:left; padding:7px; color:#6666ff}
		ul li input, ul li textarea{ float:right; margin-right:10px; border: 1px solid #ccc; padding:3px; font-family: Georgia, Times New Roman, Times, serif; width:60%;}
		li input:focus, li textarea:focus{ border: 1px solid #666; }
		fieldset{ padding:10px; border:1px solid #ccc; width:400px; overflow:auto; margin:10px;}
		legend{ color:#000099; margin:0 10px 0 0; padding:0 5px; font-size:11pt; font-weight:bold; }
		label span{ color:#ff0000; }
		fieldset#billing {position:absolute; top:60px; left:20px; }
		
		fieldset#submit { position: absolute; top:540px; left:20px; width:840px; text-align:center; }
		fieldset input#SubmitBtn{ background:#E5E5E5; color:#000099; border:1px solid #ccc; padding:5px; width:150px;}
	</style>
</head>
<body>
<h1 style="font-size:14pt; text-indent:360px;">Insert Shipping Address</h1>
<?php
	include("includes/menu.php");
	
	?>
<form id="form0" method="post" action="insertDO.php">
	<fieldset id="billing">
		<legend>Insert Into Shipping Addresses</legend>
		<ul>
			<li> <label title="UniqueId" for="UniqueId">UniqueID <span>*</span></label> <input type="text" name="uniqueid" id="uniqueid" size="30" maxlength="30"  /></li>
			
			<li> <label title="Name" for="Name">Address <span>*</span></label> <input type="text" name="name" id="name" size="30" maxlength="30" /></li>
			
			<li> <label title="Color" for="Color">City <span>*</span></label> <input type="text" name="color" id="color" size="30" maxlength="30" /></li>
			
			<li> <label title="Role" for="Role">State<span>*</span></label> <input type="text" name="role" id="role" size="30" maxlength="30" /></li>
			
			<li> <label title="KillCount" for="KillCount">Zip <span>*</span></label> <input type="text" name="killcount" id="killcount" size="30" maxlength="30"  /></li>
			
			<li><span><?php echo $_SESSION["errormessage"];  ?></span></li>
			
		</ul>
	</fieldset>
	
	
	
	<fieldset id="submit">
		<input id="SubmitBtn" name="SubmitBtn" type="submit" value="Proceed" />
	</fieldset>
</form>

<div id="errorMsg:"><?php if(!empty($_SESSION["errorMessage"])) {echo($_SESSION["errorMessage"]); } ?></div>

<script type="text/javascript">
	document.getElementById("uniqueid").focus();
</script>


<?php
	include("includes/closeDBConn.php");	
	?>
























</body>
</hmtl>