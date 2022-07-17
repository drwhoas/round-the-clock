<?php include 'import.php'; ?>
<style>
<?php include 'Feedback.css'; ?>
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


$result = $conn->query("SELECT * FROM `feedback`");
echo '<div class="center">';
echo '<div class="boxi">';
echo '<button class="btn" id="myButton">Delete</button>';
echo '<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "Delete_Feedback.php";
    }
</script>';
echo '</div>';

echo '<table class="center1">
      <tr>
          <td class="color1"> Serial No.</font> </td>
          <td class="color1"> Name</font> </td>
          <td class="color1">Email</font> </td>
          <td class="color1"> Status</font> </td>
          <td class="color1" > Feedback</font> </td>
      </tr>';

if ($result->num_rows> 0)
{
  // output data of each row
  while($row = $result->fetch_assoc())
  {

        $field1name = $row["Sr_No"];
        $field2name = $row["Name"];
        $field3name = $row["Email"];
        $field4name = $row["Status"];
        $field5name = $row["Feedback"];



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
