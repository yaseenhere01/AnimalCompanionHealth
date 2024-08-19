<?php
include('../appoinments_con.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from doctor where id = '$id'";
    $result = mysqli_query($connectionss , $query);
    if(!$result){
        die("Query Failed" . mysqli_connect_error());
    }
    else{
        // echo "Query Success";
        header('location:../all_appoinment.php');
    }
}

?>