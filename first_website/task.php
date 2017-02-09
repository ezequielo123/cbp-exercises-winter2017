<?php 
	
	define('TITLE', 'Tasks | Poupětova 12, Prague 7');
	include('includes/header.php');	

	if (isset($_GET['item'])) {

		$cleanItem = $_GET['item'];

		$task = $task_items[$cleanItem];
	}	

	function suggested_tip($price, $tip) {

		$total_tip = $price * $tip;
		echo $total_tip;

	}

	$random_keys = array_rand($days, 2);
	$random_member = array_rand($members, 2);

?>


	<hr>

	<div id="dish">
		<h1><?php echo $task['title']; ?> <span class="price">Difficulty level: <?php echo $task['difficulty']; ?></span></h1>
		<p><?php echo $task['description']; ?></p>

		<br>

		<p><strong>Suggested team member: <?php echo $members[$random_member[1]]; ?></strong></p>
		<p><em>Suggested Day: <?php echo $days[$random_keys[0]]; ?></em></p>
	</div>

	<hr>

	<a href="menu.php" class="button previous">&laquo; Back to Menu</a>


<?php 

	include('includes/footer.php');

?>	

