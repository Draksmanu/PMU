<?php
class commande extends Database
{
    private $id;
    private $prix_total;
    private $date_commande;

    function __construct()
    {
        parent::__construct();
    }

    function setPrixTotal($prix_total){
        $this->prix_total = $prix_total;
    }

    function getPrixTotal(){
        return $this->prix_total;
    }

    function setDateCommande($date_commande){
        $this->date_commande = $date_commande;
    }

    function getDateCommande(){
        return $this->date_commande;
    }

    function passerCommande(){

    }
}

