<?php
    include("../Views/header.php");
    $produit = new produit();
    $categorie = new categorie();
    if(isset($_POST['categorie'])){
        $nomCategorie = $categorie->findNom($_POST['categorie']);

        $listeProduits = $produit->produitsBycategorie($_POST['categorie']);
    }else{
        $listeProduits = $produit->produitsByVue();
    }

    include("../Views/produit/liste-produit.php");

    include("../Views/footer.html");