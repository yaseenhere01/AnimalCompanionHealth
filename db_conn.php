<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "hospital_management_system";


$con = mysqli_connect($server , $user , $password , $db);

if(!$con){
    die("Query failed" . mysqli_connect_error());
}
else{
    // echo "Query Successfull";
}

?>