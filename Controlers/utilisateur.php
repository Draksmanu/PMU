<?php
include("../Views/header.php");
if(isset($_POST['deco'])){
    session_destroy();
    unset($_SESSION);
}

if(isset($_SESSION['co'])){
    include("../Views/utilisateur/accueil.php");
}else{
    if(isset($_POST['co'])){
        $utilisateur = new utilisateur();
        $verif = $utilisateur->connexion($_POST['nom'], $_POST['mdp']);
        if($verif == true){
            echo 'Vous etes connecté!';
            include("../Views/utilisateur/accueil.php");
        }else{
            echo 'Erreur, nom de compte ou mot de passe incorrect.';
            include("../Views/utilisateur/form-co.php");
        }
    }else{
        include("../Views/utilisateur/form-co.php");
    }
}

include("../Views/footer.html");
