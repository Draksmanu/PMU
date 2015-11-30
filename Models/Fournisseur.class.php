<?php
class fournisseur extends Database{
    private $id;
    private $nom;


    function setNom($nom){
        $this->nom = $nom;
    }

    function getNom(){
        return $this->nom;
    }

    function getProduitsFournisseur($id_fournisseur){
        $req = $this->bdd->prepare('SELECT * FROM produit WHERE id_fournisseur = :id_fournisseur');
        $req->bindValue(":id_fournisseur", $id_fournisseur);
        $req->execute();

        return $req;
    }
}