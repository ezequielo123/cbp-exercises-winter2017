<?php require_once('lib/data-functions.php'); ?>
<?php require_once('lib/var_show.php') ?>

<!-- Send Data on Submit -->
		<?php 

				$student_number = $_POST['student_number'];
				$_POST['name'] = $student_number;			
				insert_data($_POST);


			

		?>	




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Enrolling a new student.</h1>
	<h4>Please fill in the information below.</h4>
	<nav>
        <a href="list.php">Click here to see the list of all the students registered so far</a>
    </nav>


	<br>

	<form method="post">
		<label for="student_number" >Student Number: </label>
		<br>
		<input type="text" name='student_number'>
		<br><br>

		<hr>
		<label for="student_firstname">First Name: </label>
		<br>
		<input type="text" name='student_firstname'>
		<br><br>

		<hr>
		<label for="student_lastname">Last Name: </label>
		<br>
		<input type="text" name='student_lastname'>
		<br><br>

		<hr>
		<label for="year_started">Year started: </label>
		<br>
		<input type="text" name='year_started'>
		
		<br><br>

		<hr>
		<input type="radio"	name="gender" value="male" id="gender_male"><label for="gender_male">male</label> <br>
		<input type="radio"	name="gender" value="female" id="gender_female"><label for="gender_female">female</label>

		<br><br>
		<label for="hdd">Disability? </label>
		<input type="checkbox" name="Disability" id="Disability">
		<br><br>

		<hr>
		<label for="faculty">Faculty enrolled: </label>
		<select name="faculty">
		<option>Economics</option>
		<option>Medicine</option>
		<option selected>Computer Science</option>
		<option>Fysics</option>
		<option>Chemistry</option>
		<option>Law</option>
		<option>Social Studies</option>
		<option>Business Administration</option>
		<option>Psychology</option>
		<option>Languages</option>
		<option>Philosophy</option>
		<option>Gymnastics</option>
		</select>
		<br>
		<br>

		<br><input type="submit" value="submit data">
	</form>

		

</body>
</html>
