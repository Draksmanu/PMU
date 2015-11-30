<?php
class utilisateur extends Database
{
    private $id;
    private $pseudo;
    private $mdp;
    private $nom;
    private $prenom;
    private $admin;

    function connexion($pseudo, $mdp){
        $req = $this->bdd->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo");
        $req->bindValue(":pseudo", $pseudo);
        $req->execute();
        $resultat = $req->fetch();
        if($resultat != null){
            if($resultat['mdp'] == md5($mdp)){
                $_SESSION['co'] = true;
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['nom'] = $resultat['nom'];
                $_SESSION['prenom'] = $resultat['prenom'];
                $_SESSION['admin'] = $resultat['admin'];
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    function addUtilisateur(){
        $req = $this->bdd->prepare('INSERT INTO utilisateur VALUE(null , :pseudo, :mdp, :nom, :prenom, :admin)');
        $req->bindValue(":desc", $this->pseudo);
        $req->bindValue(":desc", $this->mdp);
        $req->bindValue(":nom", $this->nom);
        $req->bindValue(":prenom", $this->prenom);
        $req->bindValue(":admin", $this->admin);
        $req->execute();
    }

    function delutilisateur($id){
        $req = $this->bdd->prepare("DELETE FROM utilisateur WHERE id = :id");
        $req->bindValue(":id", $id);
        $req->execute();
    }

    function updateUtilisateur($id){
        $req = $this->bdd->prepare("UPDATE utilisateur SET pseudo = :pseudo, mdp = :mdp, nom = :nom, prenom = :prenom, admin = :admin WHERE id = :id");
        $req->bindValue(':id', $id);
        $req->bindValue(":pseudo", $this->pseudo);
        $req->bindValue(":mdp", $this->mdp);
        $req->bindValue(":nom", $this->nom);
        $req->bindValue(":prenom", $this->prenom);
        $req->bindValue(":admin", $this->admin);
        $req->execute();
    }



}
