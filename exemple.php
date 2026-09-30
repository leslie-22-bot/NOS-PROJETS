<?php
session_start();

if(isset($_POST['envoyer'])){

    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $age = trim($_POST['age']);

    if (!empty($nom) && !empty($prenom) && !empty($age)) {
        
         $_SESSION['nom']    = $nom;
         $_SESSION['prenom'] = $prenom;
         $_SESSION['age']    = $age;

        header("location:affichage.php");
        exit();
    } else {
        header("location:index.html?error=Veuillez remplir tous les champs");
    }
}