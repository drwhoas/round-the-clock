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
    $Qual=$_POST["Qual"];
    $Spec=$_POST["Spec"];


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
    if(empty($_POST["Qual"]))
{
  $check=0;
}if(empty($_POST["Spec"]))
{
  $check=0;
}
    if($check===1)
    {


     $query="UPDATE `doctor_details` SET `Name`='$Name',`Age`='$Age',`Phone`='$Phone',`Email`='$Email',`Qualification`='$Qual',
     `Specialization`='$Spec' WHERE `doctor_id`='$id'";


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
        echo '<p>All Fields have not been filled. Please fill the details again</p>';
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

		<form action="update_doctors.php" method="post">
			<h4> Enter the updated details here</h4>
		<label>Doctor ID </label>
		<input type="text" placeholder=" Original Doctor ID" name="id" >
		<label>Name  :</label>
		<input type="text" placeholder="Enter new name" name="Name" >
		<label>Age</label>
		<input type="text" placeholder=" Enter new age" name="Age" >
		<label>Email</label>
		<input type="text" placeholder=" Enter new Email ID" name="Email" >
		<label>Phone Number</label>
		<input type="number" placeholder=" Enter new Phone Number" name="Phone" >
		<label>Qualification</label>
		<input type="text" placeholder=" Enter new Qualification" name="Qual" >
		<label>Specialization</label>
		<input type="text" placeholder=" Enter new Specialization" name="Spec" >


		<input type="Submit" name="Submit" value="Update Data">


	</form>
</body>
</html>
