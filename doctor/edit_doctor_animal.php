<?php
include('../doctor/doctor_topbar.php');
include('../doctor/doctor_header.php');
include('../db_conn.php');


if(isset($_GET['id'])){
   $id = $_GET['id'];
   $query = "select * from animal where id = '$id';";
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
 <h1 class='text-center'>ADD ANIMAL </h1>
 <form action='../save_animal_data_doctor_list.php/?id=$row[id]' method='POST'>

 <div class='my-4'>
    <input value='$row[name]' type='text' name='name' placeholder='NAME' class='form-control' required>
 </div>

 <div class='my-4'>
    <input value='$row[disease]' type='text' name='disease' placeholder='Disease' class='form-control' required>
 </div>

 <div class='my-4'>
    <input value='$row[symptoms]' type='text' name='symptoms' placeholder='Symptoms' class='form-control' required>
 </div>

 

 <div class='my-4'>
    <input value='$row[treatment]' type='text' name='treatment' placeholder='Treatment' class='form-control' required>
 </div>

 <div class='my-4'>
    <input value='$row[process]' type='text' name='process' placeholder='Process' class='form-control' required>
 </div>

 <div class='my-4'>
    <input value='$row[doctor]' type='text' name='doctor' placeholder='Doctor' class='form-control' required>
 </div>
 

 <div class='my-4'>
   <button class='btn btn-primary' name='saveanimal'>ADD ANIMAL</button>
 </div>

 </form>

 </div>";
?>

<?php
include('../doctor/doctor_script.php');
?>