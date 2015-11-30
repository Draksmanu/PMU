<?php
/**
 * Created by PhpStorm.
 * User: drakm_000
 * Date: 07/02/2015
 * Time: 14:57
 */

class categorie extends Database {
    private $id;
    private $nom;

    function __construct(){
        parent::__construct();
    }

    function categories(){
        $categories = $this->bdd->query('SELECT * FROM categorie');
        return $categories;
    }

    function findId($nom){
        $req = $this->bdd->prepare('SELECT * FROM categorie WHERE nom = :nom)');
        $req->bindValue(":nom", $nom);
        $req->execute();
        return $req['id'];
    }

    function findNom($id){
        $req = $this->bdd->prepare('SELECT * FROM categorie WHERE id = :id');
        $req->bindValue(":id", $id);
        $req->execute();
        $resultat = $req->fetch();

        return $resultat['nom'];
    }

    function addCategorie(){
        $req = $this->bdd->prepare('INSERT INTO categorie VALUE(null , :nom)');
        $req->bindValue(":nom", $this->nom);
        $req->execute();
    }

    function delCategorie($id){
        $req = $this->bdd->prepare("DELETE FROM categorie WHERE id = :id");
        $req->bindValue(":id", $id);
        $req->execute();
    }

    function updateCategorie($id, $nom){
        $req = $this->bdd->prepare("UPDATE categorie SET nom = :nom WHERE id = :id;");
        $req->bindValue(":id", $id);
        $req->bindValue(":nom", $nom);
        $req->execute();
    }
    function setNom($nom){
        $this->nom = $nom;
    }

    function getNom(){
        return $this->nom;
    }
}