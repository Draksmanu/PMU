<?php
class ligne_commande extends Database
{
    private $id;
    private $id_commande;
    private $id_compte;
    private $id_produit;
    private $quantite;


    function __construct()
    {
        parent::__construct();
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdCommande()
    {
        return $this->id_commande;
    }

    public function setIdCommande($id_commande)
    {
        $this->id_commande = $id_commande;
    }

    public function getIdCompte()
    {
        return $this->id_compte;
    }

    public function setIdCompte($id_compte)
    {
        $this->id_compte = $id_compte;
    }

    public function getIdProduit()
    {
        return $this->id_produit;
    }

    public function setIdProduit($id_produit)
    {
        $this->id_produit = $id_produit;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }


}

