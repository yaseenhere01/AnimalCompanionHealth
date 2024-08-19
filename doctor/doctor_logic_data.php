<?php
include('../db_conn.php');
// include('../doctor/doctor_logic_data.php');
session_start();
if(!isset($_SESSION['email'])){
    header('location:../index.php');
}
else{
    $email = $_SESSION['email'];
    $query = "select role from users where email = '$email'";
    $result = mysqli_query($con , $query);
    if(!$result){
        die("Query Failed" . mysqli_connect_error());
    }
    else{
        $row = mysqli_num_rows($result);
        if($row == 2){
            while($row = mysqli_fetch_assoc($result)){;
            $_SESSION['email'] = $email;
            if($row['role'] != 2){
                header('location:index.php');
            }
        }
    }
}
}
?>