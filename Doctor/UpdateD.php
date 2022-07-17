
<style>
<?php include 'updatedoctors.css'; ?>
</style>
<?php include 'import1.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>

</head>
<body>

		<form action="Update_Doctors.php" method="post">
			<p> Enter your updated details here :<p>


		
		<div class="patientp">
		<label>Enter Name :</label>
		<input type="text" placeholder=" New name" name="Name" >
		</div>
		<label>Enter Age :</label>
		<input type="Number" placeholder=" Age" name="Age" >
		<label>Enter Phone Number :</label>
		<input type="Number" placeholder=" Updated Phone Number" name="Phone" >
		<label>Enter Email Id :</label>
		<input type="email" placeholder=" Original email id" name="Email"value="<?php echo $_SESSION['Email_D']; ?>" >
		<label>Enter Qualification :</label>
		<input type="text" placeholder=" Updated Qualification" name="Qualification" >
		<label>Enter Specialization :</label>
		<input type="text" placeholder=" Updated Specialization" name="Specialization" >
		<input type="Submit" name="Submit">
		<br><br><br>
	</form>
</body>
</html>
