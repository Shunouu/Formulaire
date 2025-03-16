<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prénom = isset($_POST['prénom']) ? $_POST['prénom'] : '';
$adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
$codePostal = isset($_POST['codePostal']) ? $_POST['codePostal'] : '';
$ville = isset($_POST['ville']) ? $_POST['ville'] : '';
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$carte_vtc = isset($_POST['carte_vtc']) ? $_POST['carte_vtc'] : 'Non spécifié';
$société = isset($_POST['société']) ? $_POST['société'] : 'Non spécifié';


$messageContent = "Nom: " . $nom . "\n" .
                  "Prénom: " . $prénom . "\n" .
                  "Adresse: " . $adresse . "\n" .
                  "Code Postal: " . $codePostal . "\n" .
                  "Ville: " . $ville . "\n" .
                  "Numéro de téléphone: " . $telephone . "\n" .
                  "Email: " . $email . "\n" .
                  "Carte de VTC: " . $carte_vtc . "\n" .
                  "Société: " . $société . "\n";

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'shun.mampuya@gmail.com';
    $mail->Password   = 'xpiv qzaq yftt xrwe';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    
    $mail->setFrom('shun.mampuya@gmail.com', 'Formulaire');
    $mail->addAddress('shun.mampuya93@gmail.com');

    
    $mail->isHTML(true);
    $mail->Subject = 'Inscription Bolt Car';
    $mail->Body    = nl2br($messageContent);
    $mail->AltBody = $messageContent;

    
    $mail->send();
    echo 'Le message a été envoyé !';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur de messagerie : {$mail->ErrorInfo}";
}
?>
