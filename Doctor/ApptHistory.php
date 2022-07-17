<style>
<?php include 'table.css'; ?>
</style>
<?php include 'import1.php'; ?>
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



$result = $conn->query("SELECT * FROM `medical_history`");
echo '<div class="center">';

echo '<table class="center1">
      <tr>
          <td class="color1"> Patient ID. </td>
          <td class="color1"> Patient Name </td>
          <td class="color1"> Doctor </td>
          <td class="color1"> Date of Appoinments </td>
          <td class="color1"> Symptoms </td>
          <td class="color1"> Prescription </td>

      </tr>';
if ($result->num_rows> 0)
{
  // output data of each row
  while($row = $result->fetch_assoc())
  {

        $field1name = $row["Patient_Id"];
        $field2name = $row["Patient_Name"];
        $field3name = $row["Doctor_Name"];
        $field4name = $row["Date_of_Appointment"];
        $field5name = $row["Symptoms"];
        $field6name = $row["Prescription"];





        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>

              </tr>';

  }
  $result->free();
}
else{
  echo "ERROR-No data.";
}
echo '<button class="btn1" id="myButton">Update</button>';
echo '<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "UpdateA.php";
    }
</script>';
echo '</div>';
echo '</div>';
 CloseCon($conn);

?>
