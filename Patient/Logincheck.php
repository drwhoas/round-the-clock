<style>
<?php include 'FormDB.css'; ?>
</style>
<?php include 'import.php'; ?>


<?php
if(isset($_POST["Submit"]))
{

    $Email=$_POST["Email"];
    $Password=$_POST["Password"];


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
if(empty($_POST["Email"]))
{
	$check=0;
}

if(empty($_POST["Password"]))
{
	$check=0;
}

if($check===1)
{
	$sql = "SELECT `Email`,`Password` FROM `login` WHERE `Email` = '$Email' && `Password` = '$Password'";
	$result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
	while($row = mysqli_fetch_array( $result,MYSQLI_ASSOC))
    {
		if(isset($result))
			{
				echo '<div class="p2">';
				echo "Email ID and password matched";
				echo "<a href ='UpdateDetails.php'> Update Details here </a>";
				echo '</div>';
			}
        else
			{
				echo '<div class="p2">';
				echo 'Your Email ID or password is invalid. Please try Again';
				echo "<a href ='Update.php'> Update your details here </a>";
				echo '</div>';
			}
	}

}
else{
	echo '<div class="p2">';
    echo"All Fields have not been filled. Please fill the details again";
    echo" <a href ='Update.php'> Update </a>";
    echo '</div>';}

CloseCon($conn);
}
?>
