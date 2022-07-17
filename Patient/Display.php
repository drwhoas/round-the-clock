<style>
<?php include 'table.css'; ?>
</style>
<?php include 'import.php'; ?>



<?php
if(isset($_POST["Submit"]))
{
    $Name=$_POST["Name"];
    $Age=$_POST["Age"];
    $Phone=$_POST["Phone"];
    $Email=$_POST["Email"];


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


#validation part
$check=1;

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

if($check===1)
{
    $sql4= "UPDATE `patient_details` SET `Patient_Name`='$Name',`Phone`='$Phone',`Age`='$Age',`Email`='$Email' WHERE `Email` = '$Email'";
    $sql3 = "UPDATE login SET Name = '$Name',Age='$Age', Phone = '$Phone', Email = '$Email' WHERE Email = '$Email' ";

  if ($conn->query($sql4) === TRUE and $conn->query($sql3) ===TRUE)
  {
    echo '<div class="p2">';
    echo "Your details have been successfully updated.";
    echo "</div>";

  } else {
    echo '<div class="p2">';
    echo "The entered  ID is invalid. Please try again. " ;
    echo "<a href ='Update.php'> Update Details here </a>";
    echo "</div>";
  }
}
else
{
  echo '<div class="p2">';
 echo"All Fields have not been filled. Please fill the details again";
  echo" <a href ='Update.php'> Update </a>";
  echo '</div>';}



CloseCon($conn);
}
?>
