<?php
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	
	//declaration infos formulaire
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$numero = $_POST['numero'];
	$company = $_POST['company'];

	$message = $_POST['message'];
	$content = "Nom : $nom \nEmail : $email \nNumero : $numero \nCompany : $company \nMessage : $message";
	
	require 'vendor/autoload.php';
	
$mail = new PHPMailer(true);
	
	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = 'smtp.ionos.fr';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'aqdas@aqdasdar.com';                     // SMTP username
		$mail->Password   = 'kughyk-8nustU-veqder';                               // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port       = 465;
		
		// Expéditeur
		$mail->setFrom('createchinformatique@gmail.com');
		// Destinataire dont le nom peut également être indiqué en option
		$mail->addAddress('createchinformatique@gmail.com');
		
		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Formulaire de contact';
		$mail->Body    = $content;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
	