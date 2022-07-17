<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login_header.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <link rel="stylesheet" href="https:/use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="login.css" >
    <title>Admin Login Form</title>
</head>
<body>
    <header>
      <div id="branding">
        <img src="Images/logo.png" alt="This is the logo">
      </div>
      <nav class="navigation">
        <ul id="id-1">
          <li><a href="#" >Home</a></li>
          <li><a href="#about-us">About Us</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="News.html">News</a></li>
        </ul>
      </nav>
    </header>
    <div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="registration.php" method="post">
			<h2>Create Account</h2>
			<input type="text" placeholder="Name" name="Name" />
			<input type="number" placeholder="Phone Number" name="Number" />
			<input type="email" placeholder="Email ID" name="Email" />
			<input type="password" placeholder="Password" name="Password" />
			<input type="password" placeholder="Confirm Password" name="C_password" />
			<button type="submit">Sign Up</button>
<!--
            <?php
            if(isset($_GET['result'])){if($_GET['result']==wrong){ echo "<script
type='text/jscript'>alert('Wrong Email!!.')</script>";}}
            ?>
-->


		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login_validation.php" method="post">
			<h1>Sign in</h1>
			<input type="email" placeholder="Email" name="Email"/>
			<input type="password" placeholder="Password" name="Password"/>
			<a href="#">Forgot your password?</a>
			<button type="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start this journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="login.js"> </script>
</body>
</html>
