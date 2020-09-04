<?php include("includes/menu.php"); ?>

<!DOCTYPE html>
<html>
<head>
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

	<title>Shipping</title>
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
          <li><a href="../login/login.php">LOGIN</a></li>
          <li><a href="../login/register.php">CREATE AN ACCOUNT</a></li>
          <li><a href="../login/readme.php">READ ME</a></li>
          <li><a href="shipping.php">SHIPPING</a></li>
        </ul>
      </div>
      </div>
	</header>

    <h2>Shipping</h2>
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
