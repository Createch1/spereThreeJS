<?php
include 'inc/init.inc.php';
include 'inc/function.inc.php';
include 'inc/header.inc.php';
include 'inc/nav.inc.php';

?>

<div class="container">
<div class="row align-items-stretch no-gutters contact-wrap m-3 p-3">
<div class="col-md-6">
<div class="form h-100">
<h3>Contactez nous</h3>
<form class="mb-5" method="post" id="contactForm" name="contactForm" action="form.php">
<div class="row">
<div class="col-md-6 form-group mb-5">
<label for="" class="col-form-label">Nom Prénom *</label>
<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom Prénom">
</div>
<div class="col-md-6 form-group mb-5">
<label for="" class="col-form-label">Email *</label>
<input type="text" class="form-control" name="email" id="email" placeholder="Votre email">
</div>
</div>
<div class="row">
<div class="col-md-6 form-group mb-5">
<label for="" class="col-form-label">Téléphone</label>
<input type="text" class="form-control" name="numero" id="numero" placeholder="Téléphone #">
</div>
<div class="col-md-6 form-group mb-5">
<label for="" class="col-form-label">Entreprise</label>
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
