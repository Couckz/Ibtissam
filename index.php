<?php
//affichage des erreurs côté PHP et côté MYSQLI
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//Import du site - A completer
require_once("./includes/constantes.php");//constantes du site?>
<!DOCTYPE html>
<html lang="fr">
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/TD2/styles/style.css">
    <meta charset="UTF-8">
    <meta name="keywords" content="esir, CUPGE, rennes">
    <meta name="author" content="Camelia B">
    <link rel="icon" href="TD2/images/OIP.jpeg" type="image/x-icon">
    <title>Mapage</title>
</head>
<body>
    
    <?php include("static/header.php"); ?>
    <?php include("static/nav.php"); ?>
    
    <section>
        <p>Un contenu</p>
    </section>
    <?php include("static/footer.php"); ?>
</body>
</html>
</html>