<?php
include('../db_conn.php');

if(isset($_FILES['image'])){
    if(isset($_GET['d_id'])){
    

        $drname = $_POST['drname'];
        $dremail = $_POST['dremail'];
        $drphone = $_POST['drphone'];
        $speciality = $_POST['speciality'];
        $d_id = $_GET['d_id'];

        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp_name = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

       
        
        if(move_uploaded_file($file_tmp_name , "../upload/" . $file_name)){
            echo "File Uploaded";
    
            $query = "update doctor set d_name = '$drname' , d_email = '$dremail' , d_phone = '$drphone' , image = '$file_name' , speciality = '$speciality'  where d_id = '$d_id';";
            $result = mysqli_query($con , $query);
    
            if(!$result){
                die("Query Failed");
            }
            else{
                // echo "Query success";
                header('location:../all_doctors.php');
            }
        }
    }
}

?>