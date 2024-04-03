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
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="">Contact Us</h5>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="amount">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="qty">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rate">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="payment_details">Message</label>
                                <textarea class="form-control" id="message" name="message"></textarea>
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