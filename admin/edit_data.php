<?php
include('../db_conn.php');
// include('../admin/navbar.php');
// include('../admin/header.php');

if(isset($_GET['d_id'])){
   $d_id = $_GET['d_id'];
   $query = "select * from doctor where d_id = '$d_id';";
   $result = mysqli_query($con , $query);
   if(!$result){
      die("Query Failed" . mysqli_connect_error());
   }
   else{
      // echo "Query Success";
      $row =  mysqli_fetch_assoc($result);
   }
}
?>

<?php
echo "<div class='container my-5 w-50'>
 <h1 class='text-center'>EDIT DOCTOR </h1>
 <form action='../save_doctor_data.php/?d_id=$row[d_id]' method='POST' enctype='multipart/form-data'>

 <div class='my-4'>
    <input value='$row[d_name]'  type='text' name='drname' placeholder='DR NAME' class='form-control' required>
 </div>

 <div class='my-4'>
    <input value='$row[d_email]' type='email' name='dremail' placeholder='DR EMAIL' class='form-control' required>
 </div>

 <div class='my-4'>
    <input value='$row[d_phone]' type='text' name='drphone' placeholder='DR PHONE NUMBER' class='form-control' required>
 </div>

 <div class='my-4'>
    <label>DR PROFILE PICTURE</label>
    <input  type='file' name='image' class='form-control' required>
 </div>

 <div class='my-4'>
    <input value='$row[speciality]' type='text' name='speciality' placeholder='Speciality' class='form-control' required>
 </div>

 <div class='my-4'>
   <button class='btn btn-primary' name='save'>Update</button>
 </div>

 </form>

 </div>
 </div>
";


?>

