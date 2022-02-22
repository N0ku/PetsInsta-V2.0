<?php ob_start() ?>
<!-- Search Wrapper Area Start -->
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <img src="./assets/img/core-img/cross.svg" alt="" srcset="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="/action/search.php" method="post">
                        <input type="search" name="search" id="search" placeholder="Type your keyword...">
                        <button type="submit"><img src="assets/img/core-img/search.png" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="index.php?name=Home"><img src="assets/img/core-img/logo.svg" alt="" class="logo"></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->
        <div class="logo">
            <a href="index.php?name=Home"><img src="assets/img/core-img/logo.svg" alt="" class="logo"></a>
        </div>

        <!-- Amado Nav -->
        <nav class="amado-nav">
            <ul>
                <li class="active"><a href="index.php?name=Home">Home</a></li>
                <li><a href="index.php?name=Shop">Shop</a></li>
                <li><a href="index.php?name=Posts">Posts</a></li>
                <li><a href="index.php?name=Cart">Cart</a></li>
            </ul>
        </nav>
        <!-- Button Group -->
        <!-- Button Group -->
        <div class="amado-btn-group mt-30 mb-100">

            <?php
            if (!isset($_SESSION["Status"]) or ($_SESSION["Status"] != 'ONLINE')) { ?>
            <a href="index.php?name=Login" class="btn amado-btn mb-15">Login</a>
            <a href="index.php?name=Register" class=" btn amado-btn active">Register</a>
            <?php } ?>

            <?php if (isset($_SESSION["Status"]) and ($_SESSION["Status"] == 'ONLINE')) { ?>
            <button type='button' class='btn btn-danger'
                onclick='window.location.href =`/action/Disconnect.php`;'>Disconnect</button>
            <?php
            }
            ?>
            <div>
                <?php
                if (isset($_SESSION["Status"]) and (isset($_SESSION["Name"]))) {
                    if ($_SESSION["Status"] == 'ONLINE'){ 
                        ?>
                            <a style='color:green;'> You are <?php echo $_SESSION['Status'] . " " . $_SESSION["Name"] ?> 
                            <?php
                                if((isset($_SESSION['Admin'])) AND ($_SESSION['Admin'] == 1)){
                                    echo "Admin =" . $_SESSION["Admin"];
                                }
                            ?>
                            </a> <br> 
                        <?php
                    }else{
                        ?>
                        <a style='color:red;'> You are DISCONNECTED </a> <br>
                        <?php
                    }
                }
            
                
                ?>
            </div>
        </div>
        <!-- Cart Menu -->
        <div class="cart-fav-search mb-100">
            <a href="index.php?name=Cart" class="cart-nav"><img src="assets/img/core-img/cart.png" alt=""> Cart
                <span>(0)</span></a>

            <a href="#" class="search-nav"><img src="assets/img/core-img/search.png" alt=""> Search</a>
        </div>

        <div>
            <img src="./assets/img/core-img/paws.svg">
        </div>
    </header>
    <!-- Header Area End -->
    <?php $header = ob_get_clean() ?>