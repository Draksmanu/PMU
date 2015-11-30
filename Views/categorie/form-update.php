<!--////////////////////////////////////////////////////////////////////////////////
//Formulaire de modification des categories
////////////////////////////////////////////////////////////////////////////////-->

<form action=<?php echo $action; ?> method= <?php echo $method; ?> >
    <input type="hidden" name="id" value="<?php echo $_GET['categorie']; ?>">

    <div class="input-group form-group">
        <label class="input-group-addon">Nom : </label>
        <input type="text" name="nom" class="form-control"  value="<?php echo $nom; ?>">
        <span class="input-group-btn">
            <input type="submit" value="Modifier" name="Modifier" class="btn btn-primary" >
        </span>
    </div>
</form>
<a href="utilisateur.php" class="btn btn-danger btn-group" role="button" name="Annuler">Annuler</a>