<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Info</title>
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
	<header>        
		<div class="container">
		<div id="logo">BCK GAMES</div>
		
		<div class="navigation-wrapper">
		<div class="navigation-button">
			<i class="fa fa-bars"></i>
		</div>

		<div class="navigation-menu">
			<ul>
				<li><a href="../index.html">HOME</a></li>
				<li><a href="login.php">LOGIN</a></li>
				<li><a href="register.php">CREATE AN ACCOUNT</a></li>
				<li><a href="readme.php">READ ME</a></li>
			</ul>
		</div>
		</div>
	</header>
<div class="header">
	<h2>Update</h2>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Name</label>
		<input type="name" name="name" value="<?php echo $name; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Update</button>
	</div>
	<script>
		var navButton = document.querySelector('.navigation-button');
		var navMenu = document.querySelector('.navigation-menu');
		var win = window;

		function openMenu(event) {
			
			navButton.classList.toggle('active');
			navMenu.classList.toggle('active');

			event.preventDefault();
			event.stopImmediatePropagation();
		}
			
		function closeMenu(event) {
			if (navButton.classList.contains('active')) {
			navButton.classList.remove('active');
			navMenu.classList.remove('active');
			}
		}
			navButton.addEventListener('click', openMenu, false);

		win.addEventListener('click',closeMenu, false);
  </script>
</body>
</html>

