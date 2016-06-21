<?php

/* à enlever après, sert juste pour le localhost */
ini_set("SMTP","smtp.orange.fr");
ini_set("sendmail_from","godet@godet.fr");
///////////////////////////////////////////////////

$errors = '';
$to = 'salutsalut21@hotmail.fr'; //à changer pour commercial@godet.fr
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['cp']) && !empty($_POST['ville']) && !empty($_POST['email'])
    && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cp']) && isset($_POST['ville']) && isset($_POST['email'])) {

$sexe = $_POST['sexe'];
$nom = $_POST['nom'];	
$prenom = $_POST['prenom'];
$entreprise = $_POST['entreprise'];
$rue = $_POST['rue'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];	
$email = $_POST['email'];
$message = $_POST['message'];
$email = $_POST['email'];

$email_subject = "Formulaire de contact: $sexe $nom $prenom - Entreprise : $entreprise";
$email_body = "De : $sexe $nom $prenom - Entreprise : $entreprise \n";
$email_body .= "Rue : $rue, Code postal : $cp, Ville : $ville \n";
$email_body .= "Email: $email \n \n Son message : \n $message";
$headers = "From: $to\n";
$headers .= "Reply-To: $email";

mail($to,$email_subject,$email_body,$headers);

echo " <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" /> Message bien envoyé, nous vous répondrons dès que possible. Redirection en cours";

header( "Refresh:3; url=../index.php", true, 303);
}

?>