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
        <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
    </div>
    <form action="contact-save.php" method="post" class="needs-validation">
                <!-- start page title -->
                <!-- end page title -->
                <div class="row">
        <div class="col-lg-12" > 

            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                <div class="card-header">
                    <h5 class=""><b>Contact Us</b></h5>
                </div>
                <div class="card-body">
                    <div class="row gy-3" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="amount"><b>Name</b></label>
                                <input type="text" class="form-control" id="name" name="name" required="" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="qty"><b>Email</b></label>
                                <input type="text" class="form-control" id="email" name="email" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rate"><b>Subject</b></label>
                                <input type="text" class="form-control" id="subject" name="subject" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="payment_details"><b>Message</b></label>
                                <textarea class="form-control" id="message" name="message" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;"></textarea>
                            </div>
                        </div>
                        l̥
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="submit" value="Send Mesaage" name="submit" class="btn btn-primary mb-2 mt-4">
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