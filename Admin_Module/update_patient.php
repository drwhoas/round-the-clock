<?php include 'import.php'; ?>
<style>
<?php include 'FormDB.css'; ?>
</style>

<?php
if(isset($_POST["Submit"]))
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "13579";
    $db = "roundtheclock";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

    $id=$_POST["id"];
    $Name=$_POST["Name"];
    $Age=$_POST["Age"];
    $Email=$_POST["Email"];
    $Phone=$_POST["Phone"];

    $check = 1;

if(empty($_POST["id"]))
{
  $check=0;
}
if(empty($_POST["Name"]))
{
  $check=0;
}
if(empty($_POST["Age"]))
{
  $check=0;

}
if(empty($_POST["Phone"]))
{
  $check=0;
}
if(empty($_POST["Email"]))
{
  $check=0;
}
    if($check===1)
    {

     $query="UPDATE `patient_details` SET `Patient_Name`='$Name',`Age`='$Age',`Phone`='$Phone',`Email`='$Email' WHERE `Patient_id`='$id'";


    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo '<div class="quote">';
        echo 'The details have been updated.';
        echo '</div>';
    }
    else
    {
        echo '<div class="quote">';
        echo 'The details have not been updated';
        echo '</div>';
    }
    }
    else
    {
        echo '<div class="quote">';
        echo 'All Fields have not been filled. Please fill the details again';
        echo '</div>';
    }
    mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Doctor Details</title>
	<link rel="stylesheet" href="update_doctors.css">
</head>
<body>

		<form action="update_patient.php" method="post">
			<h4> Enter your details here</h4>
		<label>Doctor ID to be updated</label>
		<input type="text" placeholder=" Doctor ID" name="id" >
		<label>Enter Name to be updated :</label>
		<input type="text" placeholder="Enter new name" name="Name" >
		<label>Enter Age to be updated :</label>
		<input type="text" placeholder=" Enter new age" name="Age" >
		<label>Enter Email to be updated :</label>
		<input type="text" placeholder=" Enter new Email ID" name="Email" >
		<label>Enter Phone Number to be updated :</label>
		<input type="number" placeholder=" Enter new Phone Number" name="Phone" >


		<input type="Submit" name="Submit" value="Update">


	</form>
</body>
</html>
