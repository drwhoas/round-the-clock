<?php include 'dbh.php'; ?>
<?php include 'import.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css?<?php echo rand();?>">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
 <form action="search.php" method="post">
     <div class="search">
   <input type="text" name="search" placeholder="Search">
   <button type="submit" name="submit-search">Search</button>
     </div>
 </form>
</body>
</html>
