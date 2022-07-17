<?php
  
// Starting the session, to use and
// store data in session variable
session_start();
if (!isset($_SESSION['Email_P'])) {
    //$_SESSION['msg'] = "You have to log in first";
    header('location: login_header.php');
}
   
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after loggin out
if (isset($_GET['logout'])) {
   session_destroy();
    unset($_SESSION['Email_D']);
    header("location: login_header.php");
}

?>
<?php include 'import.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Medical History Check</title>
	<link rel="stylesheet" href="FormDB.css?<?php echo rand();?>">
</head>
<body>
		<form action="Logincheck.php" method="post">
			<h4> Enter your details here</h4>

		<label>Enter Email ID :</label>
		<input type="text" placeholder=" Enter your Email ID" name="Email"value="<?php echo $_SESSION['Email_P']; ?>">

		<label>Enter Password :</label>
		<input type="password" placeholder=" Enter your Password" name="Password" >

		<input type="Submit" name="Submit">


	</form>
</body>
</html>
