<!--////////////////////////////////////////////////////////////////////////////////
//Formulaire d'ajout des categories
////////////////////////////////////////////////////////////////////////////////-->

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action=<?php echo $action; ?> method= <?php echo $method; ?> >
            <div class="input-group form-group">
                <label class="input-group-addon">Nom : </label><input type="text" name="nom" class="form-control">
            </div>
            <input class="btn btn-primary btn-block" type="submit" value="Ajouter" name="Ajouter">
        </form>
    </div>
</div>
<a href="utilisateur.php" class="btn btn-danger btn-group" role="button" name="Annuler">Annuler</a>