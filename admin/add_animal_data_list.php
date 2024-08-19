<?php
include('../db_conn.php');

if(isset($_POST['addanimal'])){


    $name = $_POST['name'];
    $disease = $_POST['disease'];
    $symptoms = $_POST['symptoms'];
    $treatment = $_POST['treatment'];
    $process = $_POST['process'];
    $doctor = $_POST['doctor'];

   

        $query = "INSERT INTO `animal` (`name`, `disease`, `symptoms`, `treatment`, `process`, `doctor`) VALUES ('$name', '$disease', '$symptoms', '$treatment', '$process', '$doctor');";
        $result = mysqli_query($con , $query);
        if(!$result){
            die("query failed" . mysqli_connect_error());
        }
        else{
            header('location:../admin/add_animal_data.php');
        }
    }

?>
