<style>
<?php include 'FormDB.css'; ?>
</style>
<?php include 'import.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Appointment Form</title>
	
	
</head>
<body>
	
		<form action="FormDB.php" method="post">
		<h3> Book an Appointment</h3>
		<div class="patientp">
		<label>Patient Name :</label>
		<input type="text" placeholder=" Your Username" name="PatientName">
		
		</div>

		<div class="patientp">
		<label>Doctor Name :</label>
		<select id="Name" name="DrName">
			<option value="D_name">---SELECT--</option>
  			<option value="Dr. Aditi Singh">Dr. Aditi Singh</option>
  			<option value="Dr. Abhishek Rathord">Dr. Abhishek Rathord</option>
  			<option value="Dr. Nikita Sonavane">Dr. Nikita Sonavane</option>
  			
		</select>
		
		
		</div>

<!--
		<div class="patientp">
		<label>Age :</label>
		<input type="number" placeholder=" Your Age" name="Age">
		
		</div>
-->

		<div class="patientp">
		<label>Select Date :</label>
		<input type="Date" value="yyyy-mm-dd"id="Date" name="Date" min="2021-04-10" >
	
    
	    </div>
        <div class="patientp">
		<label>Select Free Slot :</label>

		<select id="Slot" name="Time">
			<option value="Slots">---SELECT--</option>
  			<option value="10:00-11:00">10:00-11:00</option>
  			<option value="11:00-12:00">11:00-12:00</option>
  			<option value="12:00-13:00">12:00-13:00</option>
  			<option value="13:00-14:00">13:00-14:00</option>
  			<option value="17:00-18:00">17:00-18:00</option>
  			<option value="18:00-19:00">18:00-19:00</option>
  			<option value="19:00-20:00">19:00-20:00</option>
  			<option value="20:00-21:00">20:00-21:00</option>
		</select>
		</div>
		
		<div class="patientp">
		<input type="submit" name="Submit" value="Submit">
		</div>
		
	</form>
</body>
</html>
