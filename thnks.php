<?php

$prenom = $_POST['user_firstname'] ?? '';
$nom = $_POST['user_name'] ?? '';
$sujet = $_POST['user_subject'] ?? '';
$email = $_POST['user_email'] ?? '';
$telephone = $_POST['user_phone'] ?? '';
$message = $_POST['user_message'] ?? '';

if (
    !empty($nom) &&
    !empty($prenom) &&
    !empty($email) &&
    !empty($telephone) &&
    !empty($sujet) &&
    !empty($message)
) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Merci " . htmlspecialchars($prenom) . " de nous avoir contactés à propos de " . htmlspecialchars($sujet) . ".";

        echo "<p>Un de nos conseillers vous contactera à l'adresse "
            . htmlspecialchars($email)
            . " ou par téléphone au "
            . htmlspecialchars($telephone)
            . " dans les plus brefs délais pour traiter votre demande :</p>";

        echo "<p>" . nl2br(htmlspecialchars($message)) . "</p>";

    } else {
        echo "L'adresse e-mail n'est pas valide.";
    }

} else {
    echo "Tous les champs sont obligatoires.";
}

?>