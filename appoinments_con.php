<?php
include('./db_conn.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $health = $_POST['health'];
    $number = $_POST['number'];
    $message = $_POST['message'];
   

    $query = "INSERT INTO `appoinment` (`name`, `email`, `dob`, `health`, `number`, `message`) VALUES ('$name', '$email', '$dob', '$health', '$number', '$message');";

    $result = mysqli_query($con , $query);
    if($result){
        // echo "Successfull";
       header('location:./index.php');
    }
    else{
        echo "Query Failed";
    }
}

?>