<?php
include('./db_conn.php');

if(isset($_FILES['image'])){

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp_name = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];

    if(move_uploaded_file($file_tmp_name , "./upload/" . $file_name)){
        // echo "File Uploaded";

        $query = "INSERT INTO `users` (`name`, `email`, `password`, `dob`, `image`) VALUES ('$name', '$email', md5('$password'), '$dob', '$file_name');";
        $result = mysqli_query($con , $query);

        if(!$result){
            die("Query Failed");
        }
        else{
            // echo "Query Successfull";
            header('location:user_login.php');
        }
    }
}

?>