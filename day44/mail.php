<?php
// if installed manually
// get these files from https://github.com/PHPMailer/PHPMailer
// click the file name, then "raw" button, save
require './class.phpmailer.php';
require './class.smtp.php';
require './mail-config.php';  // use mail-config.template.php as a template
// or just this line, if installed using composer
// require 'PHPMailerAutoload.php';
$mail = new PHPMailer();
// Uncomment for debugging
// $mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->Host = $config['server'];
$mail->SMTPAuth = true;
$mail->Username = $config['username'];
$mail->Password = $config['password'];
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('from@example.com', 'Your company'); // don't put any user-supplied address here
$mail->addAddress('you@example.com', 'Joe User');  // can be user-supplied, but make sure they don't spam (and that's hard)
// $mail->addReplyTo('reply-to-this@email.com', 'user name'); // When user hits reply when reading the delivered email, the reply will go to this address
// If you want to have a contact form, use user-supplied email address as this reply-to, so that it's easy to respond
$mail->Subject = 'Subject';  // can be user supplied
// If you want HTML+plaintext+imagesmaybe
$mail->isHTML(true);
$mail->Body = '<p>This is the HTML message body <b>in bold!</b></p><img src="cid:imageid">';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
// embed an image to the message, imageid is special "URL" for <img src="cid:..."> tag, use whatever you want
$mail->addEmbeddedImage('valley.jpg', 'imageid');  // you can embed more images, just use different "imageid"
// If just plaintext
// $mail->Body = 'plaintext message';
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;  // don't display this to users
} else {
    // better to implement post-redirect-get pattern, remember?
    // so just redirect to a page with some info message
    echo 'Message has been sent';
}