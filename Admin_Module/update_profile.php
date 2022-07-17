<style>
.pr6
    {
        margin-top: 80px;
        margin-left: 500px;
    }
</style>


<style>
<?php include 'table.css'; ?>
</style>
<?php include 'import.php'; ?>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "13579";
$db = "roundtheclock";
$con = new mysqli($dbhost, $dbuser, $dbpass,$db);
error_reporting (E_ALL ^ E_NOTICE);

if(isset($_POST["Submit"]))
{

$Email=$_POST['Email'];
$Password=$_POST['Password'];

$sql_query="select * from `login` where Email = '$Email' && Password = '$Password'";
$result=mysqli_query($con,$sql_query);
$num=mysqli_num_rows($result);

if($num==1)
{
    header('location: update_profile_details.php');
}
else
{
    echo '<div class="pr6">';
		echo "Invalid username or password.Please try again";
    echo '</div>';
}
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Medical History Check</title>
	<link rel="stylesheet" href="FormDB.css">
</head>
<body>
		<form action="update_profile.php" method="post">
			<h4> Enter your details here</h4>

		<label>Enter Email ID :</label>
		<input type="text" placeholder=" Enter your Email ID" name="Email" >

		<label>Enter Password :</label>
		<input type="password" placeholder=" Enter your Password" name="Password" >

		<input type="Submit" name="Submit">


	</form>
</body>
</html>
