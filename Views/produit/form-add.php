<!--////////////////////////////////////////////////////////////////////////////////
//Formulaire d'ajout des produits
////////////////////////////////////////////////////////////////////////////////-->

<form action=<?php echo $action; ?> method= <?php echo $method; ?> >
    <div class="col-md-6">
        <div class="input-group form-group">
            <label class="input-group-addon">Nom : </label><input type="text" name="nom" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Description : </label><textarea name="desc" class="form-control"> </textarea><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Référence : </label><input type="number" name="ref" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Dimension : </label><input type="text" name="dim" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Largeur : </label><input type="number" name="largeur" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Essence : </label><input type="text" name="essence" class="form-control" ><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Traitement : </label><input type="text" name="traitement" class="form-control" ><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Garantie : </label><input type="text" name="garantie" class="form-control"><br/>
        </div>
    </div>

    <div class="col-md-6">
        <div class="input-group form-group">
            <label class="input-group-addon">Cadre : </label><input type="text" name="cadre" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Etre Sillons : </label><input type="text" name="etresillons" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Remplissage : </label><input type="text" name="remplissage" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Raidisseur : </label><input type="text" name="raidisseur" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Assemblage : </label><input type="text" name="assemblage" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Epaisseur : </label><input type="number" name="epaisseur" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Longueur : </label><input type="number" step="0.1" name="longueur" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Hauteur : </label><input type="number" name="hauteur" class="form-control"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Publication : </label><input type="checkbox" name="publication" class="form-control"><br/>
        </div>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="input-group form-group">
            <label class="input-group-addon">categorie :</label>
            <select name="categorie" class="form-control">
                <option>Votre choix</option>
                <?php
                foreach($listecategories as $categorie){
                    echo '<option value="'.$categorie['id'].'">'.$categorie['nom'].'</option>';
                }

                ?>
            </select>
        </div><br/>
    </div>
    <div class="form-group">
    <input type="submit" value="Ajouter" name="Ajouter" class="form-control btn btn-primary">
    </div>
</form>
<a href="utilisateur.php" class="btn btn-danger btn-group" role="button" name="Annuler">Annuler</a>