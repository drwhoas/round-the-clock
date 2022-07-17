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
 if($check===1)
 {

    $query = "INSERT INTO `patient_details`(`Patient_Name`, `Age`, `Phone`, `Email`) VALUES ('$Name','$Age','$Phone','$Email')";

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

//    mysqli_free_result($result);
    mysqli_close($conn);
}
?>
<html>
<head>
    <title> Insert Patient Details</title>
    <meta charset="utf-8">
    </head>
    <body>
        <div class="form">
            <h4>Insert Details: </h4><br><br>
    <form action="#" method="post">
        <input type="text" name="Name"  placeholder="Name"><br><br>
        <input type="number" name="Age"  placeholder="Age"><br><br>
        <input type="number" name="Phone"  placeholder="Phone Number"><br><br>
        <input type="text" name="Email"  placeholder="Email ID"><br><br>
        <button type="submit" name="insert" value="Insert">Insert</button>
        </form>
        </div>

    </body>
</html>
