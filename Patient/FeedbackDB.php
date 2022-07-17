<style>
<?php include 'FormDB.css'; ?>
</style>
<?php include "import.php";?>

    <?php error_reporting (E_ALL ^ E_NOTICE); //To ignore Index:Undefined Index error?>
<?php
if(isset($_POST["Submit"]))
{
    $Name=$_POST["Name"];
    $Email=$_POST["Email"];
    $Status=$_POST["Opt"];
    $Feedback=$_POST["Feedback"];

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

#Validation Part
$check = 1;
if(empty($_POST["Name"]))
{
  $check=0;
}
if(empty($_POST["Email"]))
{
  $check=0;

}
if(empty($_POST["Opt"]))
{
  $check=0;
}
if(empty($_POST["Feedback"]))
{
  $check=0;
}


if($check===1)
{
  $sql4 = "CREATE TABLE if not exists feedback(
    SrNo INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(64) NOT NULL,
    Email TEXT(64) NOT NULL,
    Status VARCHAR(32)NOT NULL,
    Feedback TEXT(1000)NOT NULL,

  )";
  echo '<div class="container">';

  $sql3 = "INSERT INTO feedback (`Name`,`Email`,`Status`,`Feedback`) VALUES ('$Name', '$Email', '$Status', '$Feedback')";
  if($conn->query($sql3) === true)
  {
    echo '<div class="app">';
    echo "Thank you for your feedback.";
    echo '</div>';
  }
  else
  {
    echo "Couldn't process your feedback. Please try again.";
    echo" <a href ='Feedback.php'> Give Feedback </a>";

  }

  echo '</div>';}

else
{
  echo '<div class="p2">';
echo"All Fields have not been filled. Please fill the details again";
  echo" <a href ='Feedback.php'> Give Feedback </a>";

  echo '</div>';

}
CloseCon($conn);

}


?>
