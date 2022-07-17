<?php
if(isset($_POST["Submit"]))
{
    $Sr_No=$_POST["name"];
    $Name=$_POST["number"];
    $Add=$_POST["Email"];
    $Email=$_POST["Pass"];
    $Password=$_POST["Confirm_pass"];

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "13579";
 $db = "roundtheclock.sql";
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




echo '<div class="center">';
$sql3 = "INSERT INTO login (`Name`,`Phone`,`Email`,`Password`, `Confirm_Password`) VALUES ( '$Name', '$Ph_No', '$Add', '$Email' , '$Password', '$Confirm_Pass' )";
if($conn->query($sql3) === true)
{
  echo "Inserted into table successfully.";
  echo "Account created";
}
else
{
  echo "ERROR: Could not execute. " . $conn->error;

}

echo '</div>';
 CloseCon($conn);
}
?>
