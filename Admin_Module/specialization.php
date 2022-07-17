<?php include 'import.php'; ?>
<style>
<?php include 'specialization.css'; ?>
</style>
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


$result = $conn->query("SELECT `doctor_id`, `Specialization`, `Name` FROM `doctor_details`");
echo '<div class="center">';

echo '<table class="center1">
      <tr>
          <td class="color1"> Doctor ID </td>
          <td class="color1"> Specialization </td>
          <td class="color1"> Name </td>
      </tr>';

if ($result->num_rows> 0)
{
  // output data of each row
  while($row = $result->fetch_assoc())
  {

        $field1name = $row["doctor_id"];
        $field2name = $row["Specialization"];
        $field3name = $row["Name"];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>

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
