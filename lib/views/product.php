<?php


use FTP\Connection;

    include_once("../function/all_functions.php");
    $con = Connection();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br><br>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <h2>All Products</h2><br>
                <hr style="color: grey;">
                <div class="col-md-12">
                    <div class="row">


                <?php 
                    $all_products = "SELECT * FROM item_tbl";
                    $all_products_result = mysqli_query($con, $all_products);

                    while($item_row = mysqli_fetch_assoc($all_products_result)){
                        ?>
                            <div class="col-md-3">
                                <form action="cart.php?id=<?=$item_row['itm_id'] ?>" method="POST">
                                    <center><img src="../../img/<?= $item_row['itm_img']?>" alt="Item Img" style="height: 150px;">
                                    </center>    
                                        <h5 class="text-center"><?= $item_row['itm_name']; ?></h5>
                                        <h6 class="text-center">Rs.<?= number_format($item_row['itm_price'],2)?></h6>
                                        <input type="number" name="couts" value="1" class="form-control">
                                        <input type="hidden" name="name_itm" value="<?= $item_row['itm_name']?>">
                                        <input type="hidden" name="price_itm" value="<?= $item_row['itm_price']?>">
                                        <input type="submit" value="Add To Cart" name="cart" class="btn btn-warning btn-block my-2">

                                </form>
                                <br>
                            </div>

                        <?php 
                    }
                ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>