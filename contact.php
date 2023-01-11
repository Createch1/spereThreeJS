<?php
include 'inc/init.inc.php';
include 'inc/function.inc.php';

include 'inc/header.inc.php';
include 'inc/nav.inc.php';

?>

<div class="container">
<div class="row align-items-stretch no-gutters contact-wrap m-3 p-3">
<?php 
$nom="";
$email="";
$numero="";
$company="";
$msg=""; 
$error="";

require 'vendor/autoload.php';

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) {
    $nom = $_POST['nom'];
    $email = trim($_POST['email']);
    $numero = trim($_POST['numero']);
    $company = $_POST['company'];
    $message = $_POST['message'];
    $error="";
  // controle sur la validité du format mail
  if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false ) {
    echo'<div class="alert alert-danger mt-3">⚠ le format du mail n\'est pas correct, veuillez vérifier vos saisies !</div>';
}

//  Contrôle du nom s'il est existant(pas moins d'1 caractère)
  if( $nom == "" ) {
    echo'<div class="alert alert-danger mt-3">⚠ le nom n\'est pas correct, veuillez vérifier vos saisies!</div>';
    $error = true;
  }


//  Contrôle du numéro de téléphone (10 chiffres)
    if( $numero != "" && strlen($numero) != 10 ) {
        echo'<div class="alert alert-danger mt-3">⚠ le numéro de téléphone n\'est pas correct, veuillez vérifier vos saisies!</div>';
        $error = true;
    }


//  Contrôle du message s'il est existant
    if( $message == "" ) {
        echo'<div class="alert alert-danger mt-3">⚠ le message n\'est pas correct, veuillez vérifier vos saisies!</div>';
        $error = true;
    }

// si pas d'erreur, on envoie le mail
    if( empty($error)){
    echo'<div class="alert alert-success mt-3">Votre message a bien été envoyé !</div>';
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
		$mail->setFrom('ismaila.sagna@gmail.com');
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
	
    
    }
    
    



} 
?>
<div class="col-md-6">
<div class="form h-100">
<h3>Contactez nous</h3>
<form class="mb-5" method="post" id="contactForm" name="contactForm" action="">
<div class="row">
<div class="col-md-6 form-group mb-5">
<label for="nom" class="col-form-label">Nom Prénom *</label>
<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom Prénom">
</div>
<div class="col-md-6 form-group mb-5">
<label for="email" class="col-form-label">Email *</label>
<input type="text" class="form-control" name="email" id="email" placeholder="Votre email">
</div>
</div>
<div class="row">
<div class="col-md-6 form-group mb-5">
<label for="numero" class="col-form-label">Téléphone</label>
<input type="text" class="form-control" name="numero" id="numero" placeholder="Téléphone #">
</div>
<div class="col-md-6 form-group mb-5">
<label for="company" class="col-form-label">Entreprise</label>
<input type="text" class="form-control" name="company" id="company" placeholder="Votre entreprise">
</div>
</div>
<div class="row">
<div class="col-md-12 form-group mb-5">
<label for="message" class="col-form-label">Message *</label>
<textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Ecrivez votre message"></textarea>
</div>
</div>
<div class="row">
<div class="col-md-12 form-group">
<input type="submit" value="Envoyé" class="btn btn-primary rounded-2 py-2 px-4">
<span class="submitting"></span>
</div>
</div>
</form>
<!--<div id="form-message-warning mt-4"></div>
<div id="form-message-success">Message envoyé</div>-->
</div>
</div>
<div class="col-md-6">
<div class="contact-info h-100 mx-auto pt-3 text-center" >
<img src="https://cdn.pixabay.com/photo/2016/04/04/14/12/monitor-1307227_960_720.jpg" class="img-fluid rounded">
</div>
</div>
</div>
</div>





<?php 
include 'inc/footer.inc.php'
?>
