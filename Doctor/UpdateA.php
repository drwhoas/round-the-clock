<style>
<?php include 'updatedoctors.css'; ?>
</style>
<?php include 'import1.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Details</title>

</head>
<body>

		<form action="Update_Appointments.php" method="post">
			<p> Enter the updated details of the patient here :<p>

		<label>Enter Patient ID :</label>
		<input type="number" placeholder=" Enter Patient ID" name="patientid" >
		<div class="patientp">
		<label>Enter Patient Name :</label>
		<input type="text" placeholder=" Enter your name" name="Name" >
		</div>
		<label>Enter Symptoms :</label>
		<input type="text" placeholder=" Enter Symptoms" name="Symptoms" >
		<label>Enter Prescription :</label>
		<input type="text" placeholder=" Enter Prescription" name="Prescription" >
		<input type="Submit" name="Submit"></input>
		<br><br><br><br>
		</div>
	</form>
</body>
</html>
