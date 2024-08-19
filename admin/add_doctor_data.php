<?php
include('../db_conn.php');

if(isset($_POST['add'])){

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp_name = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    $drname = $_POST['drname'];
    $dremail = $_POST['dremail'];
    $drphone = $_POST['drphone'];
    $speciality = $_POST['speciality'];

    if(move_uploaded_file($file_tmp_name , "../upload/" . $file_name)){

        $query = "INSERT INTO `doctor`(`d_name` , `d_email` , `d_phone` , `image` , `speciality`) values ('$drname' , '$dremail' , '$drphone' , '$file_name' , '$speciality');";
        $result = mysqli_query($con , $query);
        if(!$result){
            die("query failed" . mysqli_connect_error());
        }
        else{
            header('location:../admin/add_doctor.php');
        }
    }
}
?>
