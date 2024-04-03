<?php
session_start();
include 'header.php';
$data = $_SESSION['user'];
$user_id = $data['user_id'];
?>

<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0"><b>Add Product</b></h4>
                    </div>

                    
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Form Inputs</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form action="product-add-save.php" method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Product Name</label>
                                                <input type="text" name="name" class="form-control rounded" id="inputEmail4" placeholder="Product name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                        <label for="inputEmail4">Category Type</label>
                                                        <select name="type" class="form-control rounded">
                                                        <option >--Category Type--</option>
                                                            <option value="scrap">Scrap</option>
                                                            <option value="creative">Creative</option>
                                                            
                                                        </select>
                                                    </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputPassword4">Product Category</label>

                                                <select name="category" class="form-control rounded" id="inputEmail4"  >
                                                    
                                                    <option>--Select Category--</option>

                                                    <?php
                                                    include 'db.php';
                                                    $q = "select * from product_cat";
                                                    $res = mysqli_query($conn, $q);
                                                    while ($cat = mysqli_fetch_array($res)) {

                                                        echo "<option value='{$cat[0]}'>{$cat['cat_name']}</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputPassword4">Product Price</label>
                                                <input type="text" name="price" class="form-control" id="inputPassword4" placeholder="Enter price">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Product Image</label>
                                                <input type="file" name="image" class="form-control rounded" id="inputEmail4" placeholder="upload image">
                                            </div>
                                          
                                            
                                            <div class="form-group col-md-12">
                                                <label for="inputPassword4">Product Detail</label>
                                                <input type="text" name="detail" class="form-control" id="inputPassword4" placeholder="Write product detail">
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Add Product</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->

<?php

include 'footer.php';

?>