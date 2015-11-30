<!--////////////////////////////////////////////////////////////////////////////////
//Formulaire des utilisateurs
////////////////////////////////////////////////////////////////////////////////-->

<h2>Bienvenue <?php echo $_SESSION['nom'];?> !</h2><br />
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
            <a href="gestion-categorie.php" class="btn btn-primary btn-group" role="button" name="gestion-categories">Gestion des categories</a>
            <a href="gestion-produit.php" class="btn btn-primary btn-group" role="button" name="gestion-produits">Gestion des produits</a>
        </div>
    </div>
</div>
<br/>
<div class="row ">
    <div class="col-md-4 col-md-offset-4">
        <form action="utilisateur.php" method="post">
            <input type="submit" class="btn btn-danger btn-block " value="se deconnecter" name="deco">
        </form>
    </div>
</div>