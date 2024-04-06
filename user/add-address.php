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
                        <h4 class="mb-0"><b>Add Address</Address></b></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card"  style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                    <div class="card-header">
                        <h6 class="card-title">Address</h6>
                    </div>
                    <div class="card-content" >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form action="product-add-save.php" method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label>Full Name : </label>
                                                    <input class="form-control" name="f_name" type="text"
                                                        placeholder="first name" required style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>E-mail</label>
                                                    <input class="form-control" name="email" type="text"
                                                        placeholder="email" required style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>Mobile No. :</label>
                                                    <input class="form-control" name="mobile_no" type="text"
                                                        placeholder="mobile no." required style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>Address with Pincode : </label>
                                                    <input class="form-control" name="address" type="text"
                                                        placeholder="address" required style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                                </div>
                                            </div>
                                    </form> 
                                </div>
                                <button type="submit" class="btn btn-primary">Add Address</button>
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