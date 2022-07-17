<style>
<?php include 'table.css'; ?>
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



$result = $conn->query("SELECT `doctor_id`, `Name`,`Qualification`, `Specialization` FROM `doctor_details`");
echo '<div class="center">';

echo '<table class="center1">
      <tr>
          <td class="color1"> Doctor ID. </td>
          <td class="color1"> Doctor Name</td>
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
        $field3name = $row["Qualification"];
        $field4name = $row["Specialization"];


        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>

              </tr>';
  }
  $result->free();
}
else{
  echo "ERROR-No data.";
}
echo '</div>';
echo '</div>';
 CloseCon($conn);

?>
