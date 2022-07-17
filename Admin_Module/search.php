<?php include 'dbh.php'; ?>
<?php include 'import.php'; ?>
<style>
<?php include 'style.css'; ?>
</style>
<div class="article-container">
  <?php
    if (isset($_POST['submit-search'])) {
      $search= mysqli_real_escape_string($conn,$_POST['search']);
        $check = 1;

if(empty($_POST["search"]))
{
  $check=0;
}
 if($check===1)
 {
      $sql="SELECT * FROM doctor_details WHERE Name LIKE '%$search%' OR Specialization LIKE '%$search%' ";
      $result= mysqli_query($conn,$sql);
      $queryResult = mysqli_num_rows($result);
      if ($queryResult>0) {
        while($row = mysqli_fetch_assoc($result)){
          echo "<div class ='article-box'>
                <p>".$row['Name']."</p>
                <p>".$row['Email']."</p>
                <p>".$row['Qualification']."</p>
                <p>".$row['Specialization']."</p>
              </div>";
        }
      } else{
          echo '<div class="error">';
        echo "There are no results matching your search!";
          echo '</div>';
      }
    }
        else
        {
            echo '<div class="error">';
        echo "The input box is empty. Please try again.";
          echo '</div>';

        }
    }
   ?>
</div>
