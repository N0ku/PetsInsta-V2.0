<?php ob_start();
$page_title = "Posts" ?>
<div class="cart-table-area section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>New Post</h2>
                    </div>

                    <form action="action/post.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="fullname" name="fullname"
                                    placeholder="Name of your pet" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="date" class="form-control" id="brithdate" name="date"
                                    placeholder="Date of Birth" required>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="race"
                                    placeholder="The breed of your pet if there is one" name="race">
                            </div>
                            <div class="col-12 mb-3">
                                <select class="w-100 race" name="category" required>
                                    <option value="">---</option>
                                    <option value="bird">Bird</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                    <option value="fish">Fish</option>
                                    <option value="turtle">Turtle</option>
                                    <option value="gunneapig">Guinnea Pig</option>
                                    <option value="rabbit">Rabbit</option>
                                    <option value="hamster">Hamster</option>
                                    <option value="snake">Snakes</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <select class="w-100 weigth" name="weight" required>
                                    <option value="">---</option>
                                    <option value=" -500g">-500g</option>
                                    <option value="+500g < 1000g">+ 500g < 1000g</option>
                                    <option value="1kg">
                                        1kg</option>
                                    <option value="1.200kg">1.200kg</option>
                                    <option value="1.400kg">1.400kg</option>
                                    <option value="1.600kg">1.600kg</option>
                                    <option value="1.800kg">1.800kg</option>
                                    <option value="2kg">2kg</option>
                                    <option value="2.200kg">2.200kg</option>
                                    <option value="2.400kg">2.400kg</option>
                                    <option value="2.600kg">2.600kg</option>
                                    <option value="2.800kg">2.800kg</option>
                                    <option value="3kg">3kg</option>
                                    <option value="3.200kg">3.200kg</option>
                                    <option value="3.400kg">3.400kg</option>
                                    <option value="3.600kg">3.600kg</option>
                                    <option value="3.800kg">3.800kg</option>
                                    <option value="4kg">4kg</option>
                                    <option value="+ 4kg"> + 4kg</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="url" placeholder="60cm" name="height">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="url" placeholder="url...." name="url">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="color" class="form-control" id="color_picker" name="color">
                            </div>
                            <div class="col-12 mb-3">
                                <textarea required name="comment" class="form-control w-100" id="comment" cols="30"
                                    rows="10" placeholder="Description of your post here !!"></textarea>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="submit" value="Post !" class="btn-post">
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php unset($_SESSION['error']); $content = ob_get_clean() ?>