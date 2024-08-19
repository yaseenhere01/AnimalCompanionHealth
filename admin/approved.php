<?php
include('../db_conn.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "update appoinment set status = 'approved' where id = $id";
    $result = mysqli_query($con , $query);
    if(!$result){
        echo "Query Failed";
    }
    else{
        echo "Query Successfull";
        header('location:../all_appoinment.php');
    }
}
?>