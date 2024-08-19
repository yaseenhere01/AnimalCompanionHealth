<?php
include('../db_conn.php');

if (isset($_POST['saveanimal'])) {
    if(isset($_GET['id'])){
   
        $name = $_POST['name'];
        $disease = $_POST['disease'];
        $symptoms = $_POST['symptoms'];
        $treatment = $_POST['treatment'];
        $process = $_POST['process'];
        $doctor = $_POST['doctor'];
        $id = $_GET['id'];
    
       
    
        $query = "update animal set name = '$name' , disease = '$disease' , symptoms = '$symptoms' , treatment = '$treatment' , process = '$process' , doctor = '$doctor' where id = '$id';";
        $result = mysqli_query($con , $query);
    
        if (!$result) {
            die("Query Failed");
        } else {
            // echo "Query success";
            header('location:../animal_appoinment_record.php');
        }
    }
}
    
?>


    

   