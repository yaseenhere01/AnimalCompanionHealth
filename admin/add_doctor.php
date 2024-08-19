<?php
include('../admin/navbar.php');
include('../admin/sidebar.php');
include('../admin/header.php');

?>

<!-- Table created -->
 <div class="container my-5 w-50">
 <h1 class="text-center">ADD DOCTOR </h1>
 <form action="./add_doctor_data.php" method="POST" enctype="multipart/form-data">

 <div class="my-4">
    <input type="text" name="drname" placeholder="DR NAME" class="form-control" required>
 </div>

 <div class="my-4">
    <input type="email" name="dremail" placeholder="DR EMAIL" class="form-control" required>
 </div>

 <div class="my-4">
    <input type="text" name="drphone" placeholder="DR PHONE NUMBER" class="form-control" required>
 </div>

 <div class="my-4">
    <label for="">DR PROFILE PICTURE</label>
    <input type="file" name="image" class="form-control" required>
 </div>

 <div class="my-4">
    <input type="text" name="speciality" placeholder="Speciality" class="form-control" required>
 </div>
 

 <div class="my-4">
   <button class="btn btn-primary" name="add">ADD DOCTOR</button>
 </div>

 </form>

 </div>





<?php
include('../admin/footer.php');
?>
<?php

include('../admin/js.php');
?>