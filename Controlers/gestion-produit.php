<?php

include("../Views/header.php");

if(isset($_SESSION['co'])) {
    if (isset($_GET['action'])) {
        $produit = new produit();

        $categorie = new categorie();
        $listecategories = $categorie->categories();
        switch ($_GET['action']) {
            case "add":
                $action = "gestion-produit.php";
                $method = "post";
                include("../Views/produit/form-add.php");
                break;

            case "update":
                if (isset($_GET['categorie'])) {
                    $action = "gestion-produit.php";
                    $method = "get";
                    $gestion = "update";
                    $listeProduitsBycategorie = $produit->produitsBycategorie($_GET['categorie']);
                    include("../Views/produit/form-select.php");
                } else {
                    if (isset($_GET['validator'])) {
                        $produit = new produit();
                        $produitP = $produit->produit($_GET['produit']);
                        $action = "gestion-produit.php";
                        $method = "post";
                        include("../Views/produit/form-update.php");
                    } else {
                        $action = "gestion-produit.php";
                        $method = "get";
                        $gestion = "update";
                        include("../Views/categorie/form-select.php");
                    }
                }
                break;

            case "del":
                if (isset($_GET['categorie'])) {
                    $action = "gestion-produit.php";
                    $method = "get";
                    $gestion = "del";
                    $listeProduitsBycategorie = $produit->produitsBycategorie($_GET['categorie']);
                    include("../Views/produit/form-select.php");
                } else {
                    if (isset($_GET['validator'])) {
                        $action = "gestion-produit.php";
                        $method = "post";
                        include("../Views/produit/form-del.php");
                    } else {
                        $action = "gestion-produit.php";
                        $method = "get";
                        $gestion = "del";
                        include("../Views/categorie/form-select.php");
                    }
                }
                break;
        }
    } else {
        include("../Views/produit/form-action.php");
    }

    if (isset($_POST['Ajouter'])) {
        $produit = new produit();
        $produit->setNom($_POST['nom']);
        $produit->setDesc($_POST['desc']);
        $produit->setRef($_POST['ref']);
        $produit->setDim($_POST['dim']);
        $produit->setLargeur($_POST['largeur']);
        $produit->setEssence($_POST['essence']);
        $produit->setTraitement($_POST['traitement']);
        $produit->setGarantie($_POST['garantie']);
        $produit->setCadre($_POST['cadre']);
        $produit->setEtresillons($_POST['etresillons']);
        $produit->setRemplissage($_POST['remplissage']);
        $produit->setRaidisseur($_POST['raidisseur']);
        $produit->setAssemblage($_POST['assemblage']);
        $produit->setEpaisseur($_POST['epaisseur']);
        $produit->setLongueur($_POST['longueur']);
        $produit->setHauteur($_POST['hauteur']);
        $produit->setIdcategorie($_POST['categorie']);
        $produit->setConsultation(0);

        $produit->addProduit();
        echo 'Un nouveau produit a été ajouté.';
    }

    if (isset($_POST['Modifier'])) {
        $produit = new produit();
        $produit->setNom($_POST['nom']);
        $produit->setDesc($_POST['desc']);
        $produit->setRef($_POST['ref']);
        $produit->setDim($_POST['dim']);
        $produit->setLargeur($_POST['largeur']);
        $produit->setEssence($_POST['essence']);
        $produit->setTraitement($_POST['traitement']);
        $produit->setGarantie($_POST['garantie']);
        $produit->setCadre($_POST['cadre']);
        $produit->setEtresillons($_POST['etresillons']);
        $produit->setRemplissage($_POST['remplissage']);
        $produit->setRaidisseur($_POST['raidisseur']);
        $produit->setAssemblage($_POST['assemblage']);
        $produit->setEpaisseur($_POST['epaisseur']);
        $produit->setLongueur($_POST['longueur']);
        $produit->setHauteur($_POST['hauteur']);
        $produit->setIdcategorie($_POST['categorie']);
        $produit->setConsultation(0);

        $produit->updateProduit($_POST['id']);
        echo 'Un produit a été modifié.';
    }

    if (isset($_POST['Supprimer'])) {
        $produit = new produit();
        $produit->delProduit($_POST['id']);
        echo 'Un produit a été supprimé.';
    }
}else{
    echo 'Vous devez etre connecté pour gerer les produits.';
}

include("../Views/footer.html");

?>