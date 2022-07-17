<?php include 'import.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Medical History Check</title>
	<link rel="stylesheet" href="FormDB.css?<?php echo rand();?>">
</head>
<body>
		<form action="Medical.php" method="post">
			<h6> Check your Medical History here</h6>

		<label>Enter Patient Id :</label>
		<input type="number" placeholder=" Enter your Id" name="id">

		<input type="Submit" name="Submit">


	</form>
</body>
</html>
