<?php ob_start();
$page_title = "Login" ?>
<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2><?php if (isset($_SESSION['error'])) {
                                echo $_SESSION['error'];
                            } ?></h2>
                    </div>

                    <form action="/action/register.php" method="post">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="Name" name="Name" placeholder="Name"
                                    value="" required>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="Name" name="Username" placeholder="Nickname"
                                    value="" required>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="Familyname" name="Familyname"
                                    placeholder="Familyname" value="" required>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="exemple@exemple.com" value="" required>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="password" value="" required>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"
                                    placeholder="Comfirm password" value="" required>
                            </div>
                            <div class="col-12">
                                <div class="custom-control custom-checkbox d-block mb-2">
                                    <input type="checkbox" class="custom-control-input" id="AntiRobot" name="AntiRobot"
                                        required>
                                    <label class="custom-control-label" for="AntiRobot">I'm not a ROBOT.</label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="submit" value="Login" class="btn-post">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php $content = ob_get_clean() ?>