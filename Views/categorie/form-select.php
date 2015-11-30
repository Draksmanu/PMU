<!--////////////////////////////////////////////////////////////////////////////////
//Bouton selection des categories
////////////////////////////////////////////////////////////////////////////////-->
<p>Je souhaite rechercher par types de clôtures:
<form action=<?php echo $action; ?> method= <?php echo $method; ?> >
    <?php
    if(isset($gestion)){
        echo '<input type="hidden" name="action" value='.$gestion.'>';
        echo '<input type="hidden" name="validator" value="ok">';
    }
    ?>
    <div class="input-group form-group">
        <label class="input-group-addon">categorie :</label>
        <select name="categorie" class="form-control">
        <?php
        foreach($listecategories as $categorie){
            echo '<option value="'.$categorie['id'].'">'.$categorie['nom'].'</option>';
        }

        ?>
        </select>
      <span class="input-group-btn">
          <input  class="btn btn-primary" type="submit" value="OK" name="valider">
      </span>
    </div>
</form>
