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



$result = $conn->query("SELECT * FROM `doctor_details`");
echo '<div class="center">';


echo '<table class="center1">
      <tr>
          <td class="color1"> Doctor ID. </td>
          <td class="color1"> Name</td>
          <td class="color1"> Age</td>
          <td class="color1"> Phone No</td>
          <td class="color1"> Email</td>
          <td class="color1"> Qualification </td>
          <td class="color1"> Specialization </td>

      </tr>';
if ($result->num_rows> 0)
{
  // output data of each row
  while($row = $result->fetch_assoc())
  {

        $field1name = $row["doctor_id"];
        $field2name = $row["Name"];
        $field3name = $row["Age"];
        $field4name = $row["Phone"];
        $field5name = $row["Email"];
        $field6name = $row["Qualification"];
        $field7name = $row["Specialization"];


        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>

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
        location.href = "UpdateD.php";
    }
</script>';
echo '</div>';
echo '</div>';
 CloseCon($conn);

?>
