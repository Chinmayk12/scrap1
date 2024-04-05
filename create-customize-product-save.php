<?php
include 'db.php'; // Include your database connection script


// Check if the form was submitted    
    $name = $_POST['name'];
    $description= $_POST['description'];
    $steps = $_POST['steps'];
    $user_id=$_POST['user_id'];
    
    $tmp=$_FILES['image']['tmp_name'];
    $image="./add-img/".$_FILES['image']['name'];
    move_uploaded_file($tmp,$image);
    
    // Insert data into database
    $q = "INSERT INTO `creative_product` (`id`, `uid`, `name`, `description`, `steps`, `image`) VALUES (NULL, '$user_id', '$name', '$description', '$steps', '$image')";
    $res = mysqli_query($conn, $q);

    if ($res) {
        echo "<script>alert('Product created successfully.'); window.location='post.php';</script>";
    } else {
        echo "<script>alert('Failed to create Product. Please try again.'); window.history.back();</script>";
    }

?>
