<?php
include('../db_conn.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from appoinment where id = '$id'";
    $result = mysqli_query($con , $query);
    if(!$result){
        die("Query Failed" . mysqli_connect_error());
    }
    else{
        // echo "Query Success";
        header('location:../all_appoinment.php');
    }
}

?>