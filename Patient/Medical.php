<style>
<?php include 'table.css'; ?>
</style>
<?php include 'import.php'; ?>

<?php
if(isset($_POST["Submit"]))
{
  $id = (isset($_POST['id']) ? $_POST['id'] : '');

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
 if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
  }
  else
    echo "Connected Successfully"."<br>";
  }


#Validation Part
  $check = 1;
  if(empty($_POST["id"]))
  {
    $check=0;
  }

  if($check===1)
  {
    $sql3 = "SELECT `Doctor_Name`,`Date_of_Appointment`, `Symptoms`, `Prescription` FROM `medical_history` WHERE Patient_Id =$id";
    $result = $conn->query($sql3);



    echo '<div class = "center"' ;
    if ($result->num_rows> 0)
   {
      echo '<div class="center">';
      echo " <p>Medical History</p>";
      echo '<table class="center1">
      <tr>
        <td class="color1"> Doctor Name </td>
        <td class="color1"> Date of Appointment </td>
        <td class="color1"> Symptoms </td>
        <td class="color1"> Prescription </td>
      </tr>';
  // output data of each row
      while($row = $result->fetch_assoc())
      {
        $field1name = $row["Doctor_Name"];
        $field3name = $row["Date_of_Appointment"];
        $field4name = $row["Symptoms"];
        $field5name = $row["Prescription"];


        echo '<tr>
          <td>'.$field1name.'</td>
          <td>'.$field3name.'</td>
          <td>'.$field4name.'</td>
          <td>'.$field5name.'</td>

        </tr>';

      }
      $result->free();
      echo "</div>";
      echo '</div>';
    }

    else
    {
      echo '<div class="p1">';
      echo "The ID that you entered is invalid.Please enter a valid ID or try again.";
      echo '</div>';
      echo '<div class="p3">';
      echo" <a href ='MedicalHistory.php'> Check Medical History </a>";
      echo '</div>';


    }
  }
else
{
   echo '<div class="p2">';
  echo"All Fields have not been filled. Please fill the details again";
  echo" <a href ='MedicalHistory.php'> Medical History </a>";

  echo '</div>';
}


CloseCon($conn);


?>
