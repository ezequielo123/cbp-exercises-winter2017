<?php require_once('lib/data-functions.php');
require_once('lib/var_show.php'); 

if(isset($_GET['id']))
{
    $student_number = $_GET['id'];
}
	var_show($student_number);
	$details = get_data($student_number);

	var_show($details);

?>

	<nav>
        <a href="list.php">A list of all the students</a>
    </nav>


    <?php if(isset($details)) : ?>
        
        <h1><strong>Student# is: </strong><em><?php echo $details['student_number']; ?></em></h1>
        <h2><strong>Student First name is: </strong><em><?php echo $details['student_firstname']; ?></em></h2>
        <h2><strong>Student Last name is: </strong><em><?php echo $details['student_lastname']; ?></em></h2>
        <h2><strong>Student started in: </strong><em><?php echo $details['year_started']; ?></em></h2> 
        <h2><strong>This student is a: </strong><em><?php echo $details['gender']; ?></em></h2> 
        <h2><strong>Hes studies at the faculty of: <em></strong><?php echo $details['faculty']; ?></em></h2> 

    <?php else : ?>

        Sorry, this page was not found.

    <?php endif; ?>

