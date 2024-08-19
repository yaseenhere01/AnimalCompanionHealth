<?php 
include('../db_conn.php');

session_start();
if(!isset($_SESSION['email'])){
  header('location:../index.php');
}else{
  $email = $_SESSION['email'];
  $query = "select role from users where email = '$email'";
  $result = mysqli_query($con , $query);
  if(!$result){
    echo "Query Failed";
  }
  else{
    $row = mysqli_num_rows($result);
    if($row == 1){
      while($row = mysqli_fetch_assoc($result)){
        $_SESSION['email'] = $email;
       if($row['role'] != 1){
        header('location:index.php');
      }
    }
    }
  }
}
?>