<?php

// Vérifiez si le formulaire a été soumis
if (isset($_POST['submit'])) {
  // Récupérez les données du formulaire
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Affichez les données du formulaire
  echo "Nom : " . $nom . "<br>";
  echo "Prenom : " . $prenom . "<br>";
  echo "Email : " . $email . "<br>";
  echo "Message : " . $message . "<br>";
}

?>

