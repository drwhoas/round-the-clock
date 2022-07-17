<?php
  
// Starting the session, to use and
// store data in session variable
//session_start();
//if (!isset($_SESSION['Email_D'])) {
//    //$_SESSION['msg'] = "You have to log in first";
//    header('location: login_header.php');
//}
   
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
<?php include 'import1.php'; ?>

<style>
<?php include 'updatedoctors.css'; ?>
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
	
</head>
<body>

		<form action="FeedbackDB.php" method="post">
			<h3> Give your feedback here </h3><br>


		<div class="patientp">
		<label>Enter Name :</label>
		<input type="text" placeholder=" Enter your name" name="Name">
		</div>

		
		<label>Enter Email Id :</label>
		<input type="email" placeholder=" Enter your email id" name="Email"value="<?php echo $_SESSION['Email_D']; ?>">
            <br><br>
        <table class="b">
            <tr>
                <td><input type="radio" name="Opt"></td>
                <td width="120px">Doctor</td>
                <td><input type="radio" name="Opt"></td>
                <td>Patient</td>
            </tr>
        </table>

            <table>
            <tr>
                <td width="175px"><label>Your Feedback :</label></td>
            </tr>
                <tr>
                <td width="1000px"><textarea rows="5" cols="50" name = "Feedback"></textarea></td>
                </tr>
            
            </table>
     	
     	
		<div class="patientp">
		<input type="Submit" name="Submit">
		</div>
	</form>
</body>
</html>
