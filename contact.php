<?php
include 'inc/init.inc.php';
include 'inc/function.inc.php';
include 'inc/header.inc.php';
include 'inc/nav.inc.php';

?>

<!-- test -->
<div class="container">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Exemple message ...</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</div>


<!-- TEST DE WALID -->
<form action="formulaire.php" method="post">
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>

  <label for="prenom">Prenom :</label><br>
  <input type="text" id="prenom" name="prenom"><br>

  <label for="email">Email :</label><br>
  <input type="text" id="email" name="email"><br>

  <label for="message">Message :</label><br>
  <textarea id="message" name="message"></textarea><br>

  <input type="submit" name="submit" value="Envoyer">
</form>



<?php 
include 'inc/footer.inc.php'
?>