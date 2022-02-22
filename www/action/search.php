<?php

session_start();
require_once  __DIR__ . '/../db.php';
var_dump($_POST['search']);

if (isset($_POST['search'])) {
    $recherche  = htmlspecialchars($_POST['search']);
    $allAnimals = $db->query('SELECT A.IDarticles FROM Articles as A WHERE A.Name LIKE "%' . $recherche . '%" ORDER BY A.IDarticles DESC');
} else {
    $allAnimals = $db->query('SELECT A.IDarticles FROM Articles as A');
}

?>
<section class="view-animals">
    <?php
    $allAnimals->execute();
    if ($allAnimals->rowCount() > 0) {
        while ($animals = $allAnimals->fetch()) {
    ?>
    <p><?= $animals['IDarticles']; ?></p>
    <?php
        }
    } else {
        ?>
    <p>Aucun animal trouvé</p>
    <?php
    }
    ?>
</section>


<!-- $countArticle = 'SELECT COUNT(IDarticles) FROM Articles';
$query = $db->prepare($countArticle);
$query->execute();
$nbArticle = $query->fetch();
$index = 0;

<?php for ($i = 0; $i < $nbArticle[0]; $i++) {
?> <div class="single-product-wrapper">
    <div class="product-img">

        <img src=<?= "assets/img/product-img/" . $categorieAnimal[$index]["Categories"] . ".jpg"; ?>
            alt="Image de notre animal " class="shopimg">

        <img class="hover-img" src="" alt="Image de notre animal:hover">
    </div>


    <div class="product-description d-flex align-items-center justify-content-between">

        <div class="product-meta-data">
            <div class="line"></div>
            <p class="product-price"><?= $nameAnimal[$index]["Name"]; ?></p>

            <h6><?= $categorieAnimal[$index]["Categories"]; ?> </h6>

        </div>
        <div class="cart">
            <a href="index.php?name=Cart" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img
                    src="assets/img/core-img/cart.png" alt=""></a>
        </div>
    </div>
</div>
<?php
    $index++;
} ?> -->