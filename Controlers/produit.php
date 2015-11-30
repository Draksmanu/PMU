<?php
include("../Views/header.php");
$produit = new produit();
$categorie = new categorie();

$produit->addView($_GET['id']);
$produitP = $produit->produit($_GET['id']);
$nomcategorie = $categorie->findNom($produitP['id_categorie']);

include("../Views/produit/produit.php");

include("../Views/footer.html");
