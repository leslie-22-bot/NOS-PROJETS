<?php
session_start();

// Si la session est vide, on renvoie vers le formulaire
if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <h1>Bienvenue <?php echo htmlspecialchars($_SESSION['nom']) . ' ' . htmlspecialchars($_SESSION['prenom']); ?> !</h1>
        
        <br>
        <button type="submit" align="center"><a href="deconnexion.php">deconnexion</a></button>
    </div>
    
</body>
</html>