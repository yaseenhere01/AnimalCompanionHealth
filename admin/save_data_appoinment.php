<?php
include('../appoinments_con.php');

if (isset($_POST['savedata'])) {
    if(isset($_GET['id'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $health = $_POST['health'];
        $number = $_POST['number'];
        $message = $_POST['message'];
    
        $id = $_GET['id'];
    
        $query = "update doctor set name = '$name' , email = '$email' , dob = '$dob' , health = '$health' , number = '$number' , message = '$message'  where id = '$id')";
        $result = mysqli_query($connectionss , $query);
    
        if (!$result) {
            die("Query Failed");
        } else {
            echo "Query success";
            // header('location:all_appoinment.php');
        }
    }
    

    }

   