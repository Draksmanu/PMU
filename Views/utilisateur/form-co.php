<!--////////////////////////////////////////////////////////////////////////////////
//Formulaire de connexion
////////////////////////////////////////////////////////////////////////////////-->

<form action="utilisateur.php" method="post" class="form-inline">
    <div class="form-group">
        <label class="sr-only">Nom de compte</label>
        <input type="text" name="nom" class="form-control" placeholder="Nom de compte">
    </div>
    <div class="form-group">
        <label class="sr-only">Mot de passe</label>
        <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
    </div>
    <input type="submit" value="Se connecter" name="co" class="btn btn-primary">
</form>