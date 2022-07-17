<style>
<?php include 'FormDB.css'; ?>
</style>
<?php include 'import.php';?>
<?php
if(isset($_POST["Submit"]))
{
    #$SrNo=$_POST["SrNo."];
    $PName=$_POST["PatientName"];
    $Drname=$_POST["DrName"];
//    $Age=$_POST["Age"];
    $Date=$_POST["Date"];
    $Slot=$_POST["Time"];

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
if(empty($_POST["PatientName"]))
{
  $check=0;
}
if(empty($_POST["DrName"]))
{
  $check=0;

}
//if(empty($_POST["Age"]))
//{
//  $check=0;
//}
if(empty($_POST["Date"]))
{
  $check=0;
}
if(empty($_POST["Time"]))
{
  $check=0;
}


if($check===1)
{
  $sql4 = "CREATE TABLE if not exists appointments(
    SrNo INT PRIMARY KEY AUTO_INCREMENT,
    Patient_Name VARCHAR(64) NOT NULL,
    Doctor_Name VARCHAR(64) NOT NULL,
    Age INT (32)NOT NULL,
    Date_Of_Appointment DATE NOT NULL,
    Time_Slot TEXT(10) NOT NULL,
    CONSTRAINT UC_appointments UNIQUE(Doctor_Name,Date_Of_Appointment,Time_Slot)
    )";


  if($conn->query($sql4) === true){
    echo "Table created successfully.";}
  else{
    echo "ERROR: Could not able to execute. " . $conn->error;
    }

  echo '<div class="container">';
  $sql3 = "INSERT INTO appointments (`Patient_Name`, `Doctor_Name`,`Date_of_Appointment`,`Time_Slot`) VALUES ('$PName', '$Drname', '$Date' , '$Slot')";
  if($conn->query($sql3) === true)
  {
      echo '<div class="app">';
    echo "Your appointment has been booked.";
      echo'</div>';
  }
  else
  {
    echo '<div class="p3">';
    echo "This slot is  not available.Please select another slot.";
    echo" <a href ='AForm.php'> Book appointment </a>";
    echo '</div>';
  }

}
else{
  echo '<div class="p2">';
  echo"All Fields have not been filled. Please fill the details again";
  echo" <a href ='AForm.php'> Book appointment </a>";

  echo '</div>';
}
echo '</div>';
}
else
 CloseCon($conn);

?>
