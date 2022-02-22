<?php ob_start() ?>

<!-- ##### Newsletter Area Start ##### -->
<?php if (!isset($_SESSION["Status"]) or ($_SESSION["Status"] != 'ONLINE')) { ?>
<section class="newsletter-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- Newsletter Text -->
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="newsletter-text mb-100">
                    <h2>Sign Up now to <span>meet a new friend ! </span></h2>
                    <p>Join our community now and find the companion of your dreams ❤️</p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="newsletter-form mb-100">
                    <form action="/action/login.php" method="post">
                        <input type="submit" value="Sign Up" class="btn-signup">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- ##### Newsletter Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="index.php?name=Home"><img src="assets/img/core-img/logoWhite.svg" alt="logo"></a>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite">
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This website was made by some Pets lovers
                    </p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false"
                                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php?name=Home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?name=Shop">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?name=Posts">Posts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?name=Cart">Cart</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->


<?php $footer = ob_get_clean() ?>