<!--////////////////////////////////////////////////////////////////////////////////
//Formulaire de suppression des categories
////////////////////////////////////////////////////////////////////////////////-->

<form action=<?php echo $action; ?> method= <?php echo $method; ?> >
    <input type="hidden" name="id" value="<?php echo $_GET['categorie'];?>">
    Etes vous sur de vouloir supprimer cette categorie?
        <input type="submit" class="btn btn-primary" value="Supprimer" name="Supprimer">
</form>
<a href="utilisateur.php" class="btn btn-danger btn-group" role="button" name="Annuler">Annuler</a>