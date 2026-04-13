<?php
//affichage des erreurs côté PHP et côté MYSQLI
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//Import du site - A completer
require_once("./includes/constantes.php");//constantes du site
require_once("./includes/config-bdd.php");
require_once("./php/functions-DB.php");


$sql_connection=connectionDB();

?>


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

        <h1>Titre de la page</h1>
        <p>Un contenu</p>

    <?php
    
    $sql_query = "SELECT prenomEtudiant, nomEtudiant FROM etudiant;";
    $result = readDB($sql_connection, $sql_query);
    
    foreach($result as $line) {
        echo "<br/>";
        foreach($line as $key => $value) {
            echo "$value ";
        }
    }

    $ville = "Rennes";
    $sql_query2 = "SELECT * FROM enseignant WHERE ville='$ville'; ";
    $result = readDB($sql_connection, $sql_query2);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    ?>


    </section>
    <?php include("static/footer.php"); ?>
    <?php closeDB($sql_connection);?>
</body>
</html>
</html>