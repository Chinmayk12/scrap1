<?php
include 'header.php';
include 'db.php'; // Include your database connection script

// Query to fetch all posts from the database
$q = "SELECT * FROM creative_product";
$res = mysqli_query($conn, $q);

?>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-3">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height:100px;">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Posts</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Posts</p>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12">
    <div class="row pb-3">
        <!-- Button for creating a post -->
        <div class="col-lg-12 d-flex justify-content-center">
            <a href="create-customize-product.php" class="btn btn-primary mb-5">Create Customized Product</a>
        </div>

        <!-- Loop through each post and create a card -->
        <?php
        while ($row = mysqli_fetch_assoc($res)) {
            ?>
            <div class="col-lg-3 col-md-12 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-0">
                    <div class="card-header">
                        <h4 class="card-title mb-0"><?php echo $row['name']; ?></h4>
                    </div>
                    <!-- <img class="img-fluid" src="./add-img/Python_compitition_payment.jpg" alt="Card image cap"> -->
            
                    <img class="img-fluid" src="./<?php echo($row['image']); ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><?php echo $row['description']; ?></p>
                        <!-- Steps section -->
                        <div class="steps" style="display: none;">
                            <h5>Steps:</h5>
                            <ul>
                                <?php echo $row['steps']; ?>
                            </ul>
                        </div>
                        <button class="btn btn-link steps-toggle" data-toggle="steps-<?php echo $row['id']; ?>">Show Steps</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href=""><i class="fas fa-heart text-primary mr-1"></i>Like</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
</div>

<?php
include 'footer.php';
?>
<script>
    // Function to toggle steps visibility
    function toggleSteps(elementId) {
        var steps = document.getElementById(elementId);
        if (steps.style.display === 'none') {
            steps.style.display = 'block';
        } else {
            steps.style.display = 'none';
        }
    }

    // Add click event listeners to all steps-toggle buttons
    var stepsToggles = document.querySelectorAll('.steps-toggle');
    stepsToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            var targetId = this.getAttribute('data-toggle');
            toggleSteps(targetId);
        });
    });
</script>
