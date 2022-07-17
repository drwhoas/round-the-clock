<style>
<?php include 'updatedoctors.css'; ?>
</style>
<?php include 'import1.php'; ?>
<?php

if(isset($_POST["Submit"]))
{
    $Name=$_POST["Name"];
    $Age=$_POST["Age"];
    $Phone=$_POST["Phone"];
    $Email=$_POST["Email"];
    $Qualification=$_POST["Qualification"];
    $Specialization=$_POST["Specialization"];

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
}
if(empty($_POST["Specialization"]))
{
  $check=0;
}


if($check===1)
{
$sql3 = "UPDATE doctor_details SET Name = '$Name', Age = '$Age', Phone = '$Phone', Email = '$Email', Qualification =
  '$Qualification', Specialization = '$Specialization' WHERE Email = '$Email' ";
$sql4 = "UPDATE login SET Name = '$Name',Age='$Age', Phone = '$Phone', Email = '$Email' WHERE Email = '$Email' ";
  mysqli_query($conn,$sql3);
  mysqli_query($conn,$sql4);
  echo '<div class="p1">';
  echo "Your details have been updated";
  echo'</div>';
}
else
{
  echo '<div class="p2">';
  echo "All Fields have not been filled. Please fill the details again";
  echo" <a href ='UpdateD.php'> Doctor Details </a>";
  echo'</div>';


}

echo '</div>';
 CloseCon($conn);
}
?>
