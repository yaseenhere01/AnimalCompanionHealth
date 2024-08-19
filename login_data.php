<?php 
session_start();
include('db_conn.php');
?>  


<?php 

if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select email , password , role from users where email = '$email' and password = md5('$password');";
    $result = mysqli_query($con , $query);
    
    if(!$result){
        echo "Query Failed";
    }else{
        $row = mysqli_num_rows($result);
        if($row == 1){
            while($row = mysqli_fetch_assoc($result)){
                $_SESSION['email'] = $email;
               if($row['role'] == 1){
                // echo "Admin";
                header('location:./admin/index.php');
               }elseif($row['role'] == 2){
                header('location:./doctor/index.php');
               }
               else{
                // echo "User";
                header('location:index.php');
               }
            }
        }else{
            // echo "Invalid credentials";
            header('location:user_login.php?wrong_cradential_msg="Invalid cradential"');
        }
    }
}


?>

<!-- elseif($row['role'] == 2){
                header('location:./admin/index.php');
               } -->