<?php

include("../Views/header.php");
if(isset($_SESSION['co'])) {
    if (isset($_GET['action'])) {
        $gamme = new gamme();
        $listeGammes = $gamme->gammes();
        switch ($_GET['action']) {
            case "add":
                $action = "gestion-categorie.php";
                $method = "post";
                include("../Views/categorie/form-add.php");
                break;

            case "update":
                if (isset($_GET['validator'])) {
                    $gamme = new gamme();
                    $nom = $gamme->findNom($_GET['categorie']);
                    $action = "gestion-categorie.php";
                    $method = "post";
                    include("../Views/categorie/form-update.php");
                } else {
                    $action = "gestion-categorie.php";
                    $method = "get";
                    $gestion = "update";
                    include("../Views/categorie/form-select.php");
                }
                break;

            case "del":
                if (isset($_GET['validator'])) {
                    $action = "gestion-categorie.php";
                    $method = "post";
                    include("../Views/categorie/form-del.php");
                } else {
                    $action = "gestion-categorie.php";
                    $method = "get";
                    $gestion = "del";
                    include("../Views/categorie/form-select.php");
                }
                break;
        }
    } else {
        include("../Views/categorie/form-action.php");
    }

    if (isset($_POST['Ajouter'])) {
        $gamme = new gamme();
        $gamme->setNom($_POST['nom']);
        $gamme->addGamme();
        echo 'Une nouvelle categorie a été ajouté.';
    }

    if (isset($_POST['Modifier'])) {
        $gamme = new gamme();
        $gamme->updateGamme($_POST['id'], $_POST['nom']);
        echo 'Une categorie a été modifié.';
    }

    if (isset($_POST['Supprimer'])) {
        $gamme = new gamme();
        $gamme->delGamme($_POST['id']);
        echo 'Une categorie a été supprimé.';
    }
}else{
    echo 'Vous devez etre connecté pour gerer les gammes.';
}

include("../Views/footer.html");

?>