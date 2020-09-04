<?php
	include('functions.php');
	if (!isLoggedIn()){
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!--<link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
	  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	  
	  <style>
        body {
          background-image: url(ba.jpg);
          background-size: cover;
          background-repeat:none;
          font-family: 'Roboto Condensed', sans-serif;
          font-weight: bold;
          height: 100vh;
        }
      </style>  
</head>

<body background="ba.jpg">
	<div class="header">
		<h2>Home Page</h2>
	</div>

	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile">
			<h2>Welcome, <?php echo $_SESSION['user']['username']; ?></h2> <br>
			<p>Name: <?php echo $_SESSION['user']['name']; ?> <br>
					Email: <?php echo $_SESSION['user']['email']; ?> </p><br>
						<a href="update.php">Update Your Profile</a>
		</div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<p><?php echo $_SESSION['user']['username']; ?></p>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
