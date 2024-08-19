<?php
include('./appoinments_con.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "delete from doctor where id = $id";
    $result = mysqli_query($connectionss , $query);
    if(!$result){
        echo "Query Failed";
    }
    else{
        echo "Query Successfull";
        header('location:../user_myapp.php');
    }
}
?>