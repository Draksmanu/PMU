<?php
include "../Models/Database.class.php";
include "../Models/Produit.class.php";
include "../Models/Utilisateur.class.php";
include "../Models/Categorie.class.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Jardiworld Clôtures</title>
    <link rel="stylesheet" type="text/css" href="../include/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../include/css/style.css">
</head>
<body>
    <div class="header">
        <div class="cadre">
            <div class="title">
                <h1>P.M.U.</h1>
            </div>
        </div>
        <div class="cadre">
            <h2><a href="/PMU/controlers"> <?php if( $_SERVER['REQUEST_URI'] == "/PMU/controlers/"){echo'<strong>Catalogue produit</strong>';}else{echo'Catalogue produit';}?></a> | <a href="/PMU/controlers/liste-produit.php"><?php if($_SERVER['REQUEST_URI'] == "/PMU/controlers/liste-produit.php"){echo'<strong>Produits les plus consultés</strong>';}else{echo'Produits les plus consultés';}?> </a></h2>
        </div>
    </div>