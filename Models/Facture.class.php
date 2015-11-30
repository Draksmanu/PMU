<?php
class facture extends Database{
    private $id;
    private $id_commande;
    private $id_compte;
    private $date_paiement;

    function __construct(){
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

    public function getDatePaiement()
    {
        return $this->date_paiement;
    }

    public function setDatePaiement($date_paiement)
    {
        $this->date_paiement = $date_paiement;
    }



}