<?php
include('./db_conn.php');

if(isset($_POST['fill'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    $query = "INSERT INTO `contact` (`name`, `email`, `phone`, `address`, `gender`, `message`) VALUES ('$name', '$email', '$phone', '$address', '$gender', '$message');";

    $result = mysqli_query($con , $query);

    if(!$result){
        die("Query failed" . mysqli_connect_error());
    }
    else{
        // echo "Query success";
        header('location:./user_contact.php');
    }
}
?>

