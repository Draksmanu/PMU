<?php
class conseil extends Database
{
    private $id;
    private $titre;
    private $contenu;

    function __construct()
    {
        parent::__construct();
    }

    function setTitre($titre){
        $this->titre = $titre;
    }
    function setContenu($contenu){
        $this->contenu = $contenu;
    }

    function getTitre(){
        return $this->titre;
    }
    function getContenu(){
        return $this->contenu;
    }
}
