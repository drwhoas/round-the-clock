<style>
    <?php include 'doctors.css'; ?>
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


$result = $conn->query("SELECT * FROM `doctor_details`");
echo '<div class="center">';
echo '<div class="container">';
echo '<div class="nd-box">';
echo '<div class="boxi">';
echo '<button class="btn1" id="myButton">Insert</button>';
echo '<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "insert_doctors.php";
    }
</script>';
echo '</div>';
echo '<div class="boxi1">';
echo '<button class="btn2" id="update">Update</button>';
echo '<script type="text/javascript">
    document.getElementById("update").onclick = function () {
        location.href = "update_doctors.php";
    }
</script>';
echo '</div>';
echo '<div class="boxi2">';
echo '<button class="btn3" id="delete">Delete</button>';
echo '<script type="text/javascript">
    document.getElementById("delete").onclick = function () {
        location.href = "delete_doctors.php";
    }
</script>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '<table class="center1">
      <tr>
          <td class="color1"> Doctor ID</font> </td>
          <td class="color1"> Name</font> </td>
          <td class="color1"> Specialisation</font> </td>
          <td class="color1"> Qualification</font> </td>
      </tr>';

if ($result->num_rows> 0)
{
  while($row = $result->fetch_assoc())
  {

        $field1name = $row['doctor_id'];
        $field2name = $row['Name'];
        $field3name = $row['Specialization'];
        $field4name = $row['Qualification'];



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


 CloseCon($conn);

?>
