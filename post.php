<?php
include 'header.php';
include 'db.php'; // Include your database connection script

// Query to fetch all posts from the database
$q = "SELECT * FROM post";
$res = mysqli_query($conn, $q);

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
        <center>
            <h2 class="animate-charcter" style="font-size: 40px;"><b
                    style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                    &nbsp;Community Platform &nbsp;</b></h2>
        </center>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop</p>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12">
    <div class="row pb-3">
        <!-- Button for creating a post -->
        <div class="col-lg-12 d-flex justify-content-center">
            <a href="#" onclick="window.location.href = validateLogin(); return false;"
                class="btn btn-primary mb-5">Create Post</a>
        </div>


        <script>
        function validateLogin() {
            // Check if the user is logged in
            if (!<?php echo isset($_SESSION['user']) ? 'true' : 'false'; ?>) {
                // If not logged in, show alert and return the login page URL
                alert('Please login to create a post.');
                return 'login.php'; // Redirect to the login page
            }
            // If logged in, return the create post page URL
            return 'create-post.php';
        }
        </script>

        </script>

        <!-- Loop through each post and create a card -->
        <?php
        while ($row = mysqli_fetch_assoc($res)) {
            ?>
        <div class="col-lg-3 col-md-12 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-0" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="card-header">
                    <h4 class="card-title mb-0"><?php echo $row['name']; ?></h4>
                </div>
                <!-- <img class="img-fluid" src="./add-img/Python_compitition_payment.jpg" alt="Card image cap"> -->

                <img class="img-fluid" src="./<?php echo($row['image']); ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><?php echo $row['message']; ?></p>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href=""><i onclick="myFunction(this)" class="fa fa-thumbs-up">Like</i></a>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>

<script>
function myFunction(x) {
    x.classList.toggle("fa-thumbs-down");
}
</script>
<?php
include 'footer.php';
?>