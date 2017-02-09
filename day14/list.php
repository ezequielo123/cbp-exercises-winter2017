<?php require_once('lib/data-functions.php'); ?>
<?php require_once('lib/var_show.php') ?>

<?php 
$index = get_index();
 ?>

 <!DOCTYPE html>
 <html>

 <head>
 	<title>Students Enrolled</title>
 </head>

	<nav>
        <a href="index.php">Add additional students</a>
    </nav> 

 <body>
 	<h1>Here is a list of all the student numbers that are enrolled</h1>
 	
 	<ol>
 	<?php foreach ($index as $key => $student_number) : ?>
 		<li><?php echo $student_number; ?></li><br>
 		<a href="details.php?id=<?php echo ($key+1); ?>">Click for details of the student</a>
 	<?php endforeach ?>
 	</ol>
 
 </body>


 </html>