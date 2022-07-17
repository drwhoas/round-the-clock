<style>
<?php include 'updatedoctors.css'; ?>
</style>
<?php include 'import1.php'; ?>
<?php

if(isset($_POST["Submit"]))
{
    $patientid=$_POST["patientid"];
    $Name=$_POST["Name"];
    $Symptoms=$_POST["Symptoms"];
    $Prescription=$_POST["Prescription"];

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "13579";
 $db = "roundtheclock";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

 $conn = OpenCon();
 if($conn === false)
 {
    die("ERROR: Could not connect. " . $conn->connect_error);
 }
else
  echo "Connected Successfully"."<br>";

$check = 1;
if(empty($_POST["patientid"]))
{
  $check=0;
}
if(empty($_POST["Name"]))
{
  $check=0;

}
if(empty($_POST["Symptoms"]))
{
  $check=0;
}
if(empty($_POST["Prescription"]))
{
  $check=0;
}


if($check===1)
{
$sql3 = "UPDATE medical_history SET Patient_Name = '$Name', Symptoms = '$Symptoms', Prescription = '$Prescription' WHERE Patient_Id = '$patientid' ";
if($conn->query($sql3) === true)
{
  echo '<div class="p1">';
  echo "Your details have been updated";
  echo '</div>';
}
else {
  echo '<div class="p1">';
  echo "Some unknown error has occured.Please try again.";
  echo '</div>';
}
}
else
{
  echo '<div class="p2">';
  echo "All Fields have not been filled. Please fill the details again";
  echo '</div>';

}

 CloseCon($conn);
}
?>
