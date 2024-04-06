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
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Name:<?php echo $row['name']; ?></h5>
                </div>
                <div class="card-image">
                    <img class="img-fluid" src="./<?php echo($row['image']); ?>" alt="Card image cap">
                </div>
                <div class="card-text">
                    <p class="card-meal">Description:<?php echo $row['description']; ?></p>
                    <p class="card-body">Steps To Create Product:</p>
                    <ul>
                        <?php echo $row['steps']; ?>
                    </ul>
                </div>
                <div class="card-price">₹<?php echo $row['price']; ?></div>
            </div>
        </div>
        <?php } ?>

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
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,900;1,400;1,900&display=swap');




#header {
    margin: 20px;
}

#header>h1 {
    text-align: center;
    font-size: 30px;
}

#header>p {
    text-align: center;
    font-size: 1.5rem;
    font-style: italic;
}




.container {
    width: 100vw;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 40px 20px;
}

.card {
    display: flex;
    flex-direction: column;
    width: 400px;
    margin-bottom: 60px;
}

.card>div {
    box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.5);
}

.card-image {
    width: 400px;
    height: 250px;
}

.card-image>img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: bottom;
}

.card-text {
    margin: -30px auto;
    margin-bottom: -50px;
    height: 300px;
    width: 300px;
    background-color: #1D1C20;
    color: #fff;
    padding: 20px;
}

.card-meal-type {
    font-style: italic;
}

.card-title {
    font-size: 1.5rem;
    margin-bottom: 5px;
    margin-top: 3px;
}

.card-body {
    font-size: 1.25rem;
}

.card-price {
    width: 100px;
    height: 100px;
    background-color: #970C0A;
    color: #fff;
    margin-left: auto;
    font-size: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>