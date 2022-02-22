<?php
    if(isset($_SESSION["Status"])){
        if ($_SESSION["Status"] == 'ONLINE'){
            ?>
            <div class="container-lg">
                Welcome <?= $_SESSION["Login"] ?> on my wesite.<br> <br> You are : <?= $_SESSION["Status"] ?>    
            </div>
            <?php
        }
    }
?>