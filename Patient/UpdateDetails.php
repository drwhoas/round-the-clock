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
		<form action="Display.php" method="post">
		<h5> Enter your updated details here </h5>
		<div class="form-1">
            
		<label>Enter Name :</label>
		<input type="text" placeholder="Name" name="Name" >

		<label>Enter Age :</label>
		<input type="number" placeholder="Age" name="Age" >

		<label>Enter Phone Number :</label>
		<input type="number" placeholder="Updated Phone Number." name="Phone" >

		<label>Enter Email ID :</label>
		<input type="Email" placeholder="Original Email ID." name="Email"value="<?php echo $_SESSION['Email_P']; ?>" >


		<input type="Submit" name="Submit">
            </div>


	</form>
</body>
</html>
