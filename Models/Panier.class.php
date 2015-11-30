<?php
class panier extends Database{
    private $id;
    private $id_compte;
    private $id_produit;
    private $nombre_produit;

    function getPanier($id_compte){
        $req = $this->bdd->prepare('SELECT * FROM produit INNER JOIN panier ON produit.id = panier.id_produit WHERE panier.id_compte = :id_compte');
        $req->bindValue(":id_compte", $id_compte);
        $req->execute();
    }

    function getPrixPanier($id_compte){
        $req = $this->bdd->prepare('SELECT SUM(produit.prix) FROM produit INNER JOIN panier ON produit.id = panier.id_produit WHERE panier.id_compte = :id_compte');
        $req->bindValue(":id_compte", $id_compte);
        $req->execute();
    }

    function getPrixProduits($id_compte, $id_produit){
        $req = $this->bdd->prepare('SELECT SUM(produit.prix) FROM produit INNER JOIN panier ON produit.id = panier.id_produit WHERE panier.id_compte = :id_compte AND panier.id_produit = :id_produit');
        $req->bindValue(":id_compte", $id_compte);
        $req->bindValue(":id_produit", $id_produit);
        $req->execute();
    }

    function addProduitPanier($id_produit, $id_compte){
        $req = $this->bdd->prepare("INSERT INTO panier VALUES(null, :id_compte, :id_produit);");
        $req->bindValue(":id_compte", $id_compte);
        $req->bindValue(":id_produit", $id_produit);
        $req->execute();
    }

    function delProduitPanier($id){
        $req = $this->bdd->prepare("DELETE FROM panier WHERE id=:id;");
        $req->bindValue(":id", $id);
        $req->execute();
    }


    function setIdCompte($id_compte){
        $this->id_compte = $id_compte;
    }
    function setIdProduit($id_produit){
        $this->id_produit = $id_produit;
    }
    function setNombreProduit($nombre_produit){
        $this->nombre_produit = $nombre_produit;
    }

    function getIdCompte(){
        return $this->id_compte;
    }
    function getIdProduit(){
        return $this->id_produit;
    }
    function getNombreProduit(){
        return $this->nombre_produit;
    }
}