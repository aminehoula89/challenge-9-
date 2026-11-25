<?php
$prenom = $_POST['user_firstname'];
$nom = $_POST['user_name'];
$sujet = $_POST['user_subject'];
$email = $_POST['user_email'];
$telephone = $_POST['user_phone'];
$message = $_POST['user_message'];
?>

<p>
    Merci <?= htmlspecialchars($prenom) ?> <?= htmlspecialchars($nom) ?>
    de nous avoir contacté à propos de "<?= htmlspecialchars($sujet) ?>".
</p>

<p>
    Un de nos conseillers vous contactera soit à l'adresse
    <?= htmlspecialchars($email) ?>
    ou par téléphone au <?= htmlspecialchars($telephone) ?>
    dans les plus brefs délais pour traiter votre demande :
</p>

<p><?= nl2br(htmlspecialchars($message)) ?></p>