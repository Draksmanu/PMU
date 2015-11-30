<!--////////////////////////////////////////////////////////////////////////////////
//Formulaire dde modification des produits
////////////////////////////////////////////////////////////////////////////////-->

<form action=<?php echo $action; ?> method= <?php echo $method; ?> >
    <input type="hidden" name="id" value="<?php echo $produitP['id'];?>">
    <div class="col-md-6">
        <div class="input-group form-group">
            <label class="input-group-addon">Nom : </label><input type="text" name="nom" class="form-control" value="<?php echo $produitP['nom'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Description : </label><textarea name="desc" class="form-control"> <?php echo $produitP['desc'];?> </textarea><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Référence : </label><input type="number" name="ref" class="form-control" value="<?php echo $produitP['ref'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Dimension : </label><input type="text" name="dim" class="form-control" value="<?php echo $produitP['dim'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Largeur : </label><input type="number" name="largeur" class="form-control" value="<?php echo $produitP['largeur'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Essence : </label><input type="text" name="essence" class="form-control" value="<?php echo $produitP['essence'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Traitement : </label><input type="text" name="traitement" class="form-control" value="<?php echo $produitP['traitement'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Garantie : </label><input type="text" name="garantie" class="form-control" value="<?php echo $produitP['garantie'];?>"><br/>
        </div>
    </div>

    <div class="col-md-6">
        <div class="input-group form-group">
            <label class="input-group-addon">Cadre : </label><input type="text" name="cadre" class="form-control" value="<?php echo $produitP['cadre'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Etre Sillons : </label><input type="text" name="etresillons" class="form-control" value="<?php echo $produitP['etresillons'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Remplissage : </label><input type="text" name="remplissage" class="form-control" value="<?php echo $produitP['remplissage'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Raidisseur : </label><input type="text" name="raidisseur" class="form-control" value="<?php echo $produitP['raidisseurs'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Assemblage : </label><input type="text" name="assemblage" class="form-control" value="<?php echo $produitP['assemblage'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Epaisseur : </label><input type="number" name="epaisseur" class="form-control" value="<?php echo $produitP['epaisseur'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Longueur : </label><input type="number" name="longueur" class="form-control" value="<?php echo $produitP['longueur'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Hauteur : </label><input type="number" name="hauteur" class="form-control" value="<?php echo $produitP['hauteur'];?>"><br/>
        </div>
        <div class="input-group form-group">
            <label class="input-group-addon">Publication : </label><input type="checkbox" name="publication" class="form-control" <?php if($produitP['publication'] == 1 ){echo 'checked=checked';}?>><br/>
        </div>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="input-group form-group">
            <label class="input-group-addon">categorie :</label>
            <select name="categorie" class="form-control">
                <option>Votre choix</option>
            <?php
            foreach($listecategories as $categorie){
                if($categorie['id'] == $_GET['id_categorie']){
                    echo '<option value="'.$categorie['id'].'" selected="selected">'.$categorie['nom'].'</option>';
                }else{
                    echo '<option value="'.$categorie['id'].'">'.$categorie['nom'].'</option>';
                }
            }

            ?>
        </select><br/>
    </div>
    <div class="form-group">
        <input type="submit" value="Modifier"  class="btn btn-primary btn-block" name="Modifier">
    </div>
</form>
<a href="utilisateur.php" class="btn btn-danger btn-group" role="button" name="Annuler">Annuler</a>