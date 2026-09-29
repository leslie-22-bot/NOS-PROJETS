<?php
session_start();
if (isset($_POST['envoyer'])) {
    $nom = $_POST['name'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    exit;
}
echo "bienvenu dans le monde de PHP : votre nom est : " . $nom . "<br>";
echo "votre prénom est : " . $prenom . "<br>";
echo "votre âge est : " . $age . "<br>";
?>