<!--////////////////////////////////////////////////////////////////////////////////
//Formulaire de suppression des produits
////////////////////////////////////////////////////////////////////////////////-->

<form action=<?php echo $action; ?> method= <?php echo $method; ?> >
    <input type="hidden" name="id" value="<?php echo $_GET['produit'];?>">
    Etes vous sur de vouloir supprimer ce produit?
    <input type="submit" class="btn btn-primary" value="Supprimer" name="Supprimer">
</form>
<a href="utilisateur.php" class="btn btn-danger btn-group" role="button" name="Annuler">Annuler</a>