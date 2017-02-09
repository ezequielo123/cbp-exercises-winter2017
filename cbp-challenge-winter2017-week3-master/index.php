<?php require_once('lib/data-functions.php'); ?>
<?php require_once('lib/var_show.php') ?>

<!-- Send Data on Submit -->
		<?php 

		if( !empty($_POST['student_number']) && !empty($_POST['student_firstname']) && !empty($_POST['student_lastname']) && !empty($_POST['year_started']) && isset($_POST['gender'])) {
				$student_number = $_POST['student_number'];
				$_POST['name'] = $student_number;
				echo 'DATA IS SENT!';				
				insert_data($_POST);


			}	else  {
				echo 'DATA NOT SENT, LOOK AT SUMMARY TO SEE WHAT IS WRONG';				
			};

			

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


		<br><br><br><br>
		<strong><p>Summary: </p></strong>
		<?php var_dump($_POST) ?>

		<br>
		<br>



		<!-- VALUE CHECKS -->
		<?php if (empty($_POST['student_number'])) {
			echo "Student Number is incorrect <br>"; 
		} else {
			echo "Student Number is correct <br>";
			} ?>

		<?php if (empty($_POST['student_firstname'])) {
			echo "Student First Name is incorrect <br>";
		} else {
			echo "Student First Name is correct <br>";
			} ?>

		<?php if (empty($_POST['student_lastname'])) {
			echo "Student Last Name is incorrect <br>";
		} else {
			echo "Student Last Name is correct <br>";
			} ?>

		<?php if (empty($_POST['year_started'])) {
			echo "Student Year Started is incorrect <br>";
		} else {
			echo "Student Year Started is correct <br>";
			} ?>

		<?php if (isset($_POST['gender'])) {
			echo "Student Gender is correct <br>";
		} else {
			echo "Student Gender is incorrect <br>";
			} ?>
		
		<br>
		<br>	

		<p> SENT DATA LOOKS LIKE: </p>

		<?php var_show($_POST); ?>
		

</body>
</html>
