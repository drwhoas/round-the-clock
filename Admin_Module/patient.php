<style>
    <?php include 'patient.css'; ?>
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


$result = $conn->query("SELECT * FROM `patient_details`");
echo '<div class="center">';
echo '<div class="container">';
echo '<div class="nd-box">';

echo '<div class="boxi">';
echo '<button class="btn1" id="myButton">Insert</button>';
echo '<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "insert_patients.php";
    }
</script>';
echo '</div>';
echo '<div class="boxi1">';
echo '<button class="btn2" id="update">Update</button>';
echo '<script type="text/javascript">
    document.getElementById("update").onclick = function () {
        location.href = "update_patient.php";
    }
</script>';
echo '</div>';
echo '<div class="boxi2">';
echo '<button class="btn3" id="delete">Delete</button>';
echo '<script type="text/javascript">
    document.getElementById("delete").onclick = function () {
        location.href = "delete_patient.php";
    }
</script>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '<table class="center1">
      <tr>
          <td class="color1"> Patient ID </td>
          <td class="color1"> Name </td>
          <td class="color1"> Age </td>
          <td class="color1"> Phone Number</td>
          <td class="color1"> Email ID </td>
      </tr>';

if ($result->num_rows> 0)
{
  // output data of each row
  while($row = $result->fetch_assoc())
  {

        $field1name = $row["Patient_Id"];
        $field2name = $row["Patient_Name"];
        $field3name = $row["Age"];
        $field4name = $row["Phone"];
        $field5name = $row["Email"];



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
