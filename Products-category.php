<?php
include 'header.php';
?>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height:100px;">
        <h1  class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="col-lg-12 col-md-12">
    <div class="row pb-4">
        <div class="col-12 pb-0">
            <div class="d-flex align-items-center justify-content-between mb-4">

            </div>
        </div>

        <?php

        //$cat_id=$_REQUEST['id'];
        if(isset($_REQUEST['type']))
        {
            $type=$_REQUEST['type'];
            $q="select * from products where type='$type'";

        }else if(isset($_REQUEST['id']))
        {
            $cat_id=$_REQUEST['id'];
            $q="select * from products where category='$cat_id'";
        }


        include 'db.php';

        $res=mysqli_query($conn,$q);
        while($products=mysqli_fetch_array($res))
        {

            $addedProductIds = array();
            if(isset($_SESSION['user']))
            {
                $data=$_SESSION['user'];
                $user_id=$data['user_id'];

                $q_cart="select product_id from cart where user_id='$user_id'";
                $res_cart=mysqli_query($conn,$q_cart);

                while($cart=mysqli_fetch_array($res_cart))
                {
                    $addedProductIds[] = $cart['product_id'];
                }
            }

            if(!in_array($products['product_id'], $addedProductIds)) {
        ?>
        <div class="col-lg-3 col-md-12 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4"  style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" >
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="product-detail.php?id=<?php echo $products['product_id'];?>" >
                        <img style="width:300px; height:230px;" class="img-fluid" src="./user/<?php echo $products['image'];?> "   alt=""  >
                    </a>
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 style="text-transform:uppercase;" class="text-truncate mb-3"><?php echo $products['name']; ?></h6>
                    <div class="d-flex justify-content-center">
                        <h6>₹ <?php echo $products['price']; ?></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="wish-add.php?product_id=<?php echo $products['product_id'];?>"><i class="fas fa-heart text-primary"></i>Add Wish</a>
                    <form action="cart-add.php">
                        <input type="hidden" name="product_id" value="<?php echo $products['product_id'];?>">
                        <input type="hidden" name="qty" value="1" min=1>
                        <i class="fas fa-shopping-cart text-primary mr-1"></i>
                        <input class="btn btn-sm text-dark p-0" type="submit" value="Add To Cart" >
                    </form>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</div>
<!-- Shop Product End -->
</div>
</div>
<!-- Shop End -->
<?php

include 'footer.php';

?>
