<?php 
	
	define('TITLE', 'Contact us | Our company');
	include('includes/header.php');

	if ($_POST) {
		// Download class.phpmailer.php from https://github.com/PHPMailer/PHPMailer
		require_once 'class.phpmailer.php';
		// An example to send email from a contact form
		$mail = new PHPMailer();
		$mail->setFrom('your@example.com', 'Company'); // Do not put user's email there, just your
		$mail->addAddress('your@example.com', 'Company');
		$mail->addReplyTo($_POST['email'], $_POST['name']);
		$mail->Subject = 'Here is the subject';
		$mail->Body = 'Something something something body, this is what the visitor said, enjoy: ' . $_POST['message'];
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Message has been sent';
		}
	}

?>

	<div id="contact">

		<h1>Get in touch with us!</h1>

		<form method="post" action="" id="contact-form">

			<label for="name">Your name</label>
			<input type="text" id="name" name="name">

			<label for="email">Your email</label>
			<input type="text" id="email" name="email">

			<label for="message">and your message</label>
			<textarea id="message" name="message"></textarea>

			<input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
			<label for="subscribe">Subscribe to newsletter</label>
			
			<input type="submit" class="button next" name="contact_submit" value="Send Message">

		</form>	

	</div><!--contact-->

<?php 

	include('includes/footer.php');

?>	

