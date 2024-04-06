<?php

include 'header.php';
if (isset($_SESSION['user'])) {
    $data = $_SESSION['user'];
    $user_id = $data['user_id'];
}
?>

<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Customized Products</span></h2>
    </div>
    <form action="create-customize-product-save.php" method="post" class="needs-validation" enctype="multipart/form-data">
    <!-- start page title -->
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="">Custom Product</h5>
                </div>
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="amount">Name Of Craft</label>
                                <input type="text" class="form-control" id="name" name="name" required="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="amount">Description</label>
                                <input type="text" class="form-control" id="description" name="description" required="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="payment_details">Steps To Create</label>
                                <textarea class="form-control" id="steps" name="steps"></textarea>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="payment_details">Price</label>
                                <textarea class="form-control" id="price" name="price"></textarea>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="submit" value="Create Post" name="submit" class="btn btn-primary mb-2 mt-4">
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end col-->
        </div>
    </div>
</form>

    <!-- Contact End -->

    <?php
include 'footer.php';
?>