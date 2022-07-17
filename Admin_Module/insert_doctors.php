<?php include 'import.php'; ?>
<style>
<?php include 'insert_doctors.css'; ?>
</style>
<?php
if(isset($_POST['insert']))
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "13579";
    $db = "roundtheclock";

    $Name=$_POST['Name'];
    $Age=$_POST['Age'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
    $Qualification=$_POST['Qualification'];
    $Specialization=$_POST['Specialization'];

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

$check = 1;
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
    if(empty($_POST["Qualification"]))
{
  $check=0;
}if(empty($_POST["Specialization"]))
{
  $check=0;
}

   
    if($check===1)
    {

    $query = "INSERT INTO `doctor_details`(`Name`, `Age`, `Phone`, `Email`, `Qualification`, `Specialization`) VALUES ('$Name','$Age','$Phone','$Email','$Qualification','$Specialization')";

    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo '<p>Data Inserted<p>';
    }
    else
    {
        echo '<p>Data Not Inserted<p>';
    }
    }
    else
    {
        echo '<p>All Fields have not been filled. Please fill the details again</p>';
    }
    

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1">
  <title> Insert Doctor Details</title>
</head>
<body>
  <div class="form">
    <h3>Enter the details </h3>
    <form action="#" method="post">
      <label>Enter Name </label>
      <input type="text" name="Name"  placeholder="Name"><br>
      <label>Enter Age </label>
      <input type="number" name="Age"  placeholder="Age"><br>
      <label>Enter Phone Number </label>
      <input type="number" name="Phone"  placeholder="Phone Number"><br>
      <label>Enter Email ID </label>
      <input type="text" name="Email"  placeholder="Email ID"><br>
      <label>Enter Qualification </label>
      <input type="text" name="Qualification" placeholder="Qualification"><br>
      <label>Enter Specialization </label>
      <input type="text" name="Specialization"  placeholder="Specialization"><br>
      <button type="submit" name="insert" value="Insert">Update</button>
    </form>
  </div>

</body>
</html>
