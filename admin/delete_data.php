<?php
include('../db_conn.php');

if(isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
    $query = "delete from doctor where d_id = '$d_id'";
    $result = mysqli_query($con , $query);
    if(!$result){
        die("Query Failed" . mysqli_connect_error());
    }
    else{
        // echo "Query Success";
        header('location:../all_doctors.php');
    }
}

?>