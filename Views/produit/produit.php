<!--////////////////////////////////////////////////////////////////////////////////
//Affichage des informations des produits
////////////////////////////////////////////////////////////////////////////////-->

<div class="cadre">
    <h3> <?php echo $nomCategorie; ?> -  <?php echo $produitP['nom']; ?> </h3>
    <p>Référence:  <?php echo $produitP['ref'] ?></p>
    <img src="/JardiWorld/include/Clotures/<?php echo $nomCategorie; ?>/Vignettes/<?php echo $produitP['ref']; ?>.jpg">
    <h3>Caractéristiques : </h3>

    <h4>Description:</h4>
    <?php
    if( $produitP['essence'] != null){
        echo '<p>Essence: '.$produitP['essence'].'</p>';
    }
    if( $produitP['traitement'] != null){
        echo '<p>Traitement: '.$produitP['traitement'].'</p>';
    }
    if( $produitP['garantie'] != null){
        echo '<p>Garantie: '.$produitP['garantie'].'</p>';
    }
    if( $produitP['dim'] != null){
        echo '<p>Dimension: '.$produitP['dim'].'</p>';
    }

    if( $produitP['cadre'] != null){
        echo '<br/><h4>Composants:</h4>';
        echo '<p>Cadre: '.$produitP['cadre'].'</p>';
    }
    if( $produitP['remplissage'] != null){
        echo '<p>Remplissage: '.$produitP['remplissage'].'</p>';
    }
    if( $produitP['raidisseurs'] != null){
        echo '<p>Raidisseur: '.$produitP['raidisseurs'].'</p>';
    }
    if($produitP['etresillons'] != null){
        echo '<p>Etrésillons : '.$produitP['etresillons'].'</p>';
    }

    if( $produitP['assemblage'] != null){
        echo '<br/><h4>Montage: </h4>';
        echo '<p>Type d\'assemblage: '.$produitP['assemblage'].'</p>';
    }

    if( $produitP['epaisseur'] != null){
        echo'<br/><p>Epaisseur: '.$produitP['epaisseur'].'</p>';
    }
    if( $produitP['longueur'] != null){
        echo'<p>Longueur: '.$produitP['longueur'].'</p>';
    }
    if( $produitP['hauteur'] != null){
        echo'<p>Hauteur: '.$produitP['hauteur'].'</p>';
    }

    echo '<form action="liste-produit.php" method="post">';
if(isset($_POST['categorie'])){
    echo '<input type="hidden" name="categorie" value="'.$_POST['categorie'].'">';
}
echo '
        <input type="submit" class="btn btn-danger" name="val" value="Retour">
    </form>
</div>';