<!--////////////////////////////////////////////////////////////////////////////////
//Formulaire de selection des produits
////////////////////////////////////////////////////////////////////////////////-->

<p>Je souhaite rechercher par types de clôtures:
    <form action=<?php echo $action; ?> method= <?php echo $method; ?> >
    <?php
    if(isset($gestion)){
        echo '<input type="hidden" name="action" value='.$gestion.'>';
        echo '<input type="hidden" name="validator" value="ok">';
        echo '<input type="hidden" name="id_categorie" value="'.$_GET['categorie'].'">';
    }
    ?>
    <div class="input-group form-group">
        <label class="input-group-addon">Produit :</label>
        <select name="produit" class="form-control">
            <?php
            foreach($listeProduitsByCategorie as $produit){
                echo '<option value="'.$produit['id'].'">'.$produit['nom'].' | réf: '.$produit['ref'].'</option>';
            }
            ?>
        </select>
        <span class="input-group-btn">
            <input  class="btn btn-primary" type="submit" value="OK" name="valider">
        </span>
    </div>
</form>