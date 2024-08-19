<?php
include('../db_conn.php');


if(isset($_GET['id'])){
   $id = $_GET['id'];
   $query = "select * from appoinment where id = '$id';";
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
echo "<div class='page-section'>
    <div class='container'>
      <h1 class='text-center wow fadeInUp'>Make an Appointment</h1>
      <form action='../save_data_appoinment.php/?id=$row[id]' method='POST' class='main-form'>
        <div class='row mt-5 '>
          <div class='col-12 col-sm-6 py-2 wow fadeInLeft'>
            <input value='$row[name]' type='text' name='name' class='form-control' placeholder='Full name'>
          </div>
          <div class='col-12 col-sm-6 py-2 wow fadeInRight'>
            <input value='$row[email]' type='email' name='email' class='form-control' placeholder='Email address..'>
          </div>
          <div class='col-12 col-sm-6 py-2 wow fadeInLeft' data-wow-delay='300ms'>
            <input value='$row[dob]' type='date' name='dob' class='form-control'>
          </div>
          
          <div class='col-12 col-sm-6 py-2 wow fadeInLeft' data-wow-delay='300ms'>
            <input value='$row[health]' type='text' name='health' placeholder='General Health' class='form-control'>
          </div>
          
          <div class='col-12 py-2 wow fadeInUp' data-wow-delay='300ms'>
            <input value='$row[number]' type='text' name='number' class='form-control' placeholder='Number..'>
          </div>
          <div class='col-12 py-2 wow fadeInUp' data-wow-delay='300ms'>
            <textarea  name='message' id='message' class='form-control' rows='6' placeholder='Enter message..'></textarea>
          </div>
          <div class='col-12 py-2 wow fadeInUp' data-wow-delay='300ms'>
        
          <button   class='btn btn-primary' name='savedata'>Submit Request</button>';
          
          </div>
        </div>

        
       
      </form>
    </div>
  </div>";


?>

