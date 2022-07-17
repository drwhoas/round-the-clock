<?php include 'import.php'; ?>
<style>
<?php include 'FormDB.css'; ?>
</style>
<?php error_reporting (E_ALL ^ E_NOTICE);?> 
<?php
if(isset($_POST["Submit"]))
{

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "13579";
    $db = "roundtheclock";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

    $id=$_POST["id"];

    $check = 1;

if(empty($_POST["id"]))
{
  $check=0;
}
 if($check===1)
 {
    $query="DELETE FROM `patient_details` WHERE `Patient_id`='$id' ";

    $result=mysqli_query($conn,$query);

    if($result)
    {
        echo '<div class="quote">';
        echo 'Record Deleted Successfully';
        echo '</div>';
    }
    else
    {
        echo '<div class="quote">';
        echo'An unknown error occured';
        echo '</div>';
    }
 }
    else
    {
        echo '<div class="quote">';
        echo '<p>The ID has not been filled. Please fill the ID again</p>';
        echo '</div>';
    }
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Delete Doctor Details</title>
	<link rel="stylesheet" href="update_doctors.css">
</head>
<body>

		<form action="delete_patient.php" method="post">
		<label>Patient ID to be deleted</label>
		<input type="text" placeholder=" Patient ID" name="id" >

		<input type="Submit" name="Submit" value="Delete">

	</form>
</body>
</html>
