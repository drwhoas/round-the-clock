<style>
    <?php include 'appointment_history.css'; ?>
</style>
<?php include 'import.php'; ?>
<?php
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
{
  echo "Connected Successfully"."<br>";
}


$result = $conn->query("SELECT `Sr_No`, `Patient_Name`, `Doctor_Name`, `Date_of_Appointment`, `Time_Slot` FROM `appointments`");
echo '<div class="center">';
echo '<div class="boxi">';
echo '<button class="btn" id="myButton">Delete</button>';
echo '<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "delete_appointment_history.php";
    }
</script>';
echo '</div>';

echo '<table class="center1">
      <tr>
          <td class="color1"> Serial No.</font> </td>
          <td class="color1"> Patient Name</font> </td>
          <td class="color1">Doctor Name</font> </td>
          <td class="color1"> Date of Appointment</font> </td>
          <td class="color1" > Time Slot</font> </td>
      </tr>';

if ($result->num_rows> 0)
{
  while($row = $result->fetch_assoc())
  {

        $field1name = $row["Sr_No"];
        $field2name = $row["Patient_Name"];
        $field3name = $row["Doctor_Name"];
        $field4name = $row["Date_of_Appointment"];
        $field5name = $row["Time_Slot"];



        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>

              </tr>';
  }
  $result->free();
}
else{
  echo "ERROR-No data.";
}
echo '</div>';


 CloseCon($conn);

?>
