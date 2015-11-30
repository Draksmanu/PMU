<?php
include("../Views/header.php");
$categorie = new categorie();
$listeCategories = $categorie->categories();
?>

    <div class="cadre">
        <strong>
            <p>Par le menu déroulant ci-dessous, nous souhaitons vous aider à accéder plus facilement aux produits recherchés.</p>
            <?php
                $action = "liste-produit.php";
                $method = "post";
                include("../Views/categorie/form-select.php");
            ?>
            </p>
        </strong>
    </div>

<?php
include("../Views/footer.html");