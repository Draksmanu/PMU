<!--////////////////////////////////////////////////////////////////////////////////
//Listing des produits
////////////////////////////////////////////////////////////////////////////////-->

<div class="cadre">
    <div class="jumbotron">
        <?php
        if(isset($nomCategorie)){
            echo '<p>Avec les clôtures <span class="categorie">'.$nomcategorie.'</span> donnez vie à vos projets.</p>';
        }else {
            echo '<p>Donnez vie à vos projets.</p>';
        }
        ?>
    </div>
    <table class="table table-hover">
        <?php foreach($listeProduits as $produit) {
            if($produit['publication'] == 1) {
                echo '
                    <tr class="produit">
                        <td>
                            <form action=produit.php?id=' . $produit['id'] . '" method="post">
                            <img class="img-thumbnail image" src = "../include/Clotures/' . $categorie->findNom($produit['id_categorie']) . '/Vignettes/' . $produit['ref'] . '.jpg">
                            Référence: ' . $produit['ref'] . '
                            Vues: ' . $produit['consultation'] . '
                            <span class="nom_produit">' . $produit['nom'] . '</span>
                            ';
                if(isset($_POST['categorie'])){
                    echo '<input type="hidden" name="categorie" value="'.$_POST['categorie'].'">';
                }
                echo '
                                <input type="submit" class="btn btn-default" name="val" value="En savoir plus">
                            </form>
                        </td>
                    </tr>';
            }
        } ?>
    </table>
</div>