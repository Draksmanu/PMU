<!--////////////////////////////////////////////////////////////////////////////////
//Formulaire des actions des categories
////////////////////////////////////////////////////////////////////////////////-->

<div class="row">
    <div class="jumbotron">
        Bienvenue dans la gestion des categories.
        Veuillez selectionner l'action que vous souhaitez effectuer:
    </div>
    <form action="gestion-categorie.php" method="get">
        <div class="col-md-2 col-md-offset-3">
            <label class="radio-inline">
                <input type="radio" name="action" value="add">Ajouter
            </label>
        </div>
        <div class="col-md-2">
            <label class="radio-inline">
                <input type="radio" name="action" value="update">Modifier
            </label>
        </div>
        <div class="col-md-2">
            <label class="radio-inline">
                <input type="radio" name="action" value="del">Supprimer
            </label>
        </div>
        <br/>
        <br/>
        <div class="col-md-3 col-md-offset-4">
            <input type="submit" class="btn btn-block btn-primary" name="valider" value="valider">
        </div>
    </form>
</div>