<?php
session_start();

if (isset($_SESSION['user'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobileno'];
    $address = $_POST['address'];
    $user_id = $_POST['user_id'];

    include 'db.php';
    $q = "INSERT INTO `address` (`id`, `user_id`, `name`, `email`, `mobile`, `address`) VALUES (NULL, '$user_id', '$name', '$email', '$mobile_no', '$address')";
    $res = mysqli_query($conn, $q);

    if ($conn) {
        echo "<script>alert('Address Added successfully sent.');window.location='add-address.php';</script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
    
}

echo "<script>alert('You have no account ,Login please');window.location='login.php';</script>"; 
   
?>