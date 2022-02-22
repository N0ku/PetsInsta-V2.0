<?php ob_start();
include __DIR__ . "/./Item.php";
$page_title = "Shop" ?>
<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Categories</h6>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul>
                <li class="active"><a href="#">Birds</a></li>
                <li><a href="#">Dogs</a></li>
                <li><a href="#">Cats</a></li>
                <li><a href="#">Fish</a></li>
                <li><a href="#">Turtles</a></li>
                <li><a href="#">Guinnea Pig</a></li>
                <li><a href="#">Rabbits</a></li>
                <li><a href="#">Snakes</a></li>
                <li><a href="#">Hamster</a></li>
            </ul>
        </div>
    </div>

    <!-- ##### Single Widget ##### -->



    <!-- ##### Single Widget ##### -->
    <div class="widget color mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Color</h6>

        <div class="widget-desc">
            <ul class="d-flex">
                <li><a href="#" class="color1"></a></li>
                <li><a href="#" class="color2"></a></li>
                <li><a href="#" class="color3"></a></li>
                <li><a href="#" class="color4"></a></li>
                <li><a href="#" class="color5"></a></li>
                <li><a href="#" class="color6"></a></li>
                <li><a href="#" class="color7"></a></li>
                <li><a href="#" class="color8"></a></li>
            </ul>
        </div>
    </div>

</div>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                    <!-- Total Products -->
                    <div class="total-products">
                        <div class="view d-flex">
                            <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- Sorting -->
                    <div class="product-sorting d-flex">
                        <div class="sort-by-date d-flex align-items-center mr-15">
                            <p>Sort by</p>
                            <form action="#" method="get">
                                <select name="select" id="sortBydate">
                                    <option value="value">Date</option>
                                    <option value="value">Newest</option>
                                    <option value="value">Popular</option>
                                </select>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <!-- lié à la BDD -->
            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">

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
                            <a href="index.php?name=Cart" data-toggle="tooltip" data-placement="left"
                                title="Add to Cart"><img src="assets/img/core-img/cart.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <?php
                        $index++;
                    } ?>
            </div>


            <div class="row">
                <div class="col-12">
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination justify-content-end mt-50">
                            <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                            <li class="page-item"><a class="page-link" href="#">02.</a></li>
                            <li class="page-item"><a class="page-link" href="#">03.</a></li>
                            <li class="page-item"><a class="page-link" href="#">04.</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Main Content Wrapper End ##### -->
    <?php $content = ob_get_clean() ?>