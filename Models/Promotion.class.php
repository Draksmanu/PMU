<?php
class promotion extends Database{
    private $id;
    private $reduction;
    private $id_produit;

    function setIdProduit($id_produit){
        $this->id_produit = $id_produit;
    }
    function setReduction($reduction){
        $this->reduction = $reduction;
    }

    function getIdProduit(){
        return $this->id_produit;
    }
    function getReduction(){
        return $this->reduction;
    }
}