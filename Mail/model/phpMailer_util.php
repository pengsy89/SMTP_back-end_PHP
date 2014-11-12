<?php
require ("../PHPMailer-master/PHPMailerAutoload.php");
class phpMailerUtil {
	function getInstance() {
		return new phpMailerUtil ();
	}
	function send($receiver, $cc, $bcc, $subject, $body) {
		$mail = new PHPMailer ();
		// $mail->SMTPDebug = 3; // Enable verbose debug output
		$mail->isSMTP (); // Set mailer to use SMTP
		$mail->Host = 'smtp.stevens.edu'; // Specify main and backup SMTP servers
		$mail->SMTPAuth = true; // Enable SMTP authentication
		$mail->Username = 'speng@stevens.edu'; // SMTP username
		$mail->Password = 'Sichuanluzhou89'; // SMTP password
		$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587; // TCP port to connect to
		
		$mail->From = 'speng@stevens.edu';
		$mail->FromName = 'Psy';
		// $mail->addAddress (); // Add a recipient
		$mail->addAddress ( $receiver ); // Name is optional
		                                 // $mail->addReplyTo ( 'isiyuanprc@foxmail.com', 'Information' );
		$mail->addCC ( $cc );
		$mail->addBCC ( $bcc );
		
		$mail->WordWrap = 50; // Set word wrap to 50 characters
		                      // $mail->addAttachment ( ); // Add attachments
		                      // $mail->addAttachment ( ); // Optional name
		$mail->isHTML ( true ); // Set email format to HTML
		
		$mail->Subject = $subject;
		$mail->Body = $body;
		// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		if (! $mail->send ()) {
			return 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
		} else {
			return 'Message has been sent';
		}
	}
}
?>