<?php
class produit extends Database{

    private $id;
    private $nom;
    private $description;
    private $image;
    private $prix;
    private $consultation;
    private $id_categorie;
    private $id_fournisseur;

    function __construct(){
//    function __construct($nom, $desc, $ref, $dim, $largeur, $essence, $traitement, $garantie, $cadre, $etresillons, $remplissage, $raidisseur, $assemblage, $epaisseur, $longueur, $hauteur, $id_categorie, $consultation){
//        $this->setNom($nom);
//        $this->setDesc($desc);
//        $this->setRef($ref);
//        $this->setDim($dim);
//        $this->setLargeur($largeur);
//        $this->setEssence($essence);
//        $this->setTraitement($traitement);
//        $this->setGarantie($garantie);
//        $this->setCadre($cadre);
//        $this->setEtresillons($etresillons);
//        $this->setRemplissage($remplissage);
//        $this->setRaidisseur($raidisseur);
//        $this->setAssemblage($assemblage);
//        $this->setEpaisseur($epaisseur);
//        $this->setLongueur($longueur);
//        $this->setHauteur($hauteur);
//        $this->setIdcategorie($id_categorie);
//        $this->setConsultation($consultation);
        parent::__construct();
    }

    function produits(){
        $produits = $this->bdd->query('SELECT * FROM produit INNER JOIN categorie ON produit.id_categorie = categorie.id GROUP BY id_categorie');
        return $produits;
    }

    function produitsByCategorie($categorie){
        $req = $this->bdd->prepare('SELECT * FROM produit WHERE id_categorie = :id_categorie');
        $req->bindValue(":id_categorie", $categorie);
        $req->execute();
        return $req;
    }

    function produitsByVue(){
        $req = $this->bdd->query('SELECT * FROM produit ORDER BY consultation DESC');
        return $req;
    }

    function produit($id){
        $req = $this->bdd->prepare('SELECT * FROM produit WHERE id = :id');
        $req->bindValue(":id", $id);
        $req->execute();
        $resultat = $req->fetch();
        return $resultat;
    }

    function addProduit(){
        $req = $this->bdd->prepare('INSERT INTO produit VALUE(null , :nom, :description, :prix, :consultation, :id_categorie)');
        $req->bindValue(":nom", $this->nom);
        $req->bindValue(":desc", $this->description);
        $req->bindValue(":desc", $this->prix);
        $req->bindValue(":consultation", $this->consultation);
        $req->bindValue(":id_categorie", $this->id_categorie);
        $req->execute();
    }

    function delProduit($id){
        $req = $this->bdd->prepare("DELETE FROM produit WHERE id = :id");
        $req->bindValue(":id", $id);
        $req->execute();
    }

    function updateProduit($id){
        $req = $this->bdd->prepare("UPDATE produit SET nom = :nom, prix = :prix, consultation = :consultation, id_categorie = :id_categorie WHERE id = :id");
        $req->bindValue(':id', $id);
        $req->bindValue(":nom", $this->nom);
        $req->bindValue(":consultation", $this->consultation);
        $req->bindValue(":id_categorie", $this->id_categorie);
        $req->execute();
    }

    function addView($id){
        $req = $this->bdd->prepare("UPDATE produit SET consultation = consultation+1 WHERE id = :id");
        $req->bindValue(":id", $id);
        $req->execute();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getConsultation()
    {
        return $this->consultation;
    }

    public function setConsultation($consultation)
    {
        $this->consultation = $consultation;
    }

    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    public function setIdCategorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }

    public function getIdFournisseur()
    {
        return $this->id_fournisseur;
    }

    public function setIdFournisseur($id_fournisseur)
    {
        $this->id_fournisseur = $id_fournisseur;
    }



}