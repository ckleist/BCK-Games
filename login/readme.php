<!DOCTYPE html>
<head>
	<title>Read Me</title>
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
<html>
    
<!--set background to proper image-->
<body background="ba.jpg">
    <!-- nav bar code -->    
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

    <!-- read me header-->
        <h2>Read Me</h2>

    <!-- keep read me comments in formatted box-->
        <div class=content>
            <p>Course: CGT 35600</p><br>
            <p>Names: Katie Adorable, Cheyenne Kleist, Bethany MaGee<p>
            <p>Extras: <p>
            <p>Explaination: This site has a hamburger navigation icon which will lead the users to the home page, login, and creating an account page. 
               The home page is the main page of the entire site. The login will allow you to login to your account and edit your account info. 
               The register page allows a user to make an account if the user doesn't have one. The navigation feature was made with a combination of HTML, CSS, and JavaScript. <p><br>
            <p>Notes: Bethany MaGee worked on the shipping and billing portion of the project. Unfortunately,
            we have been struggling to get those files to function properly. The files are included in our dropbox folder, but are not linked to the rest of the site.</p><br>
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
