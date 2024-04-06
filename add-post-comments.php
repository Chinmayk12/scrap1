<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST['product_id'];
    $comment = $_POST['comment'];

    // Update the comment field in the database
    $query = "UPDATE post SET comments = CONCAT_WS('<br>', comments, '$comment') WHERE id = '$productId'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Comment updated successfully
        echo "<script>alert('Comment added successfully');</script>";
        echo "<script>window.location='post.php';</script>";
        
    } else {
        // Error updating comment
        echo "<script>alert('Error adding comment');</script>";
        echo "<script>window.location='post.php';</script>";
    }
}
?>
