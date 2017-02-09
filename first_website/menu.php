<?php 
	
	define('TITLE', 'Week Plan | Poupětova 12, Prague 7');
	include('includes/header.php');

?>

	<div id="menu-items">

		<h1>This is our Week Plan page</h1>
		<p>There are not that many things to clean or to do in relation with the cleaning process in our flat...</p>
		<p><em>Click any menu item to learn more about it</em></p>

		<hr>

		<ul>

			<?php 

				foreach ($task_items as $task => $item) { ?>

					<li><a href="task.php?item=<?php echo $task; ?>"><?php echo $item['title']; ?></a></li>
			
			<?php
				}

			?>		

		</ul>	

	</div>

<?php 

	include('includes/footer.php');

?>	

