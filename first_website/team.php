<?php 
	
	define('TITLE', 'Team | Poupětova 12, Prague 7');
	include('includes/header.php');

?>


	<div id="team-members" class="cf">

		<h1>Our team at Poupětova 12, Prague 7</h1>
		<p>This is our home, a nice flat in Prgue 7, near a lot of great places like Albert supermarket... </p>
		<p>To check out who is in charge of taking the trash out, cleaning the floor or washing dishies, visit our Plan page</p>

		<hr>

		<?php 
			foreach ($team_members as $member) {
		?>

			<div class="member">
				
				<img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
				<h2><?php echo $member['name']; ?></h2>
				<p><?php echo $member['bio']; ?></p>

			</div>	

		<?php 
			}	
		?>

	</div>	

	<hr>

<?php 
	
	include('includes/footer.php');

?>