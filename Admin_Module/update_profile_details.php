<?php include 'import.php';?>
<style>
.p2
    {
        margin-top: 80px;
        margin-left: 500px;
    }
</style>
<style>
<?php include 'table.css'; ?>
</style>

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
 $dbpass = "1234";
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

    if(empty($_POST["Email"]))
{
  $check=0;
}
if($check===1)
{

    $sql4= "UPDATE login SET Name='$Name', Age='$Age',Phone='$Phone' WHERE Email = '$Email'";
  
  if ($conn->query($sql4) === TRUE)
  {
    echo '<div class="p2">';
    echo "Your details have been successfully updated.";
    echo "</div>";

  } else {
    echo '<div class="p2">';
    echo "The entered Email ID is invalid. Please try again. " ;
    echo "</div>";
  }
}
else
{
  echo '<div class="p2">';
 echo"All Fields have not been filled. Please fill the details again";
  echo '</div>';}

 

CloseCon($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Medical History Check</title>
	<link rel="stylesheet" href="FormDB.css">
</head>
<body>
		<form action="update_profile_details.php" method="post">
            
		<h4> Enter your updated details here </h4>
            
		<div class="form-1">
		<label>Enter Name :</label>
		<input type="text" placeholder="Name" name="Name" >

		<label>Enter Age :</label>
		<input type="number" placeholder="Age" name="Age" >
            
		<label>Enter Phone Number :</label>
		<input type="number" placeholder="Phone Number" name="Phone" >

		<label>Enter Email ID :</label>
		<input type="text" placeholder="Email ID" name="Email" >

		
		<input type="Submit" name="Submit">
            </div>
		
		
	</form>
</body>
</html>