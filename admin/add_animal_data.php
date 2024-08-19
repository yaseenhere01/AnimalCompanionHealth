<?php
include('../admin/navbar.php');
include('../admin/sidebar.php');
include('../admin/header.php');

?>

<!-- Table created -->
 <div class="container my-5 w-50">
 <h1 class="text-center">ADD ANIMAL </h1>
 <form action="./add_animal_data_list.php" method="POST">

 <div class="my-4">
    <input type="text" name="name" placeholder="NAME" class="form-control" required>
 </div>

 <div class="my-4">
    <input type="text" name="disease" placeholder="Disease" class="form-control" required>
 </div>

 <div class="my-4">
    <input type="text" name="symptoms" placeholder="Symptoms" class="form-control" required>
 </div>

 

 <div class="my-4">
    <input type="text" name="treatment" placeholder="Treatment" class="form-control" required>
 </div>

 <div class="my-4">
    <input type="text" name="process" placeholder="Process" class="form-control" required>
 </div>

 <div class="my-4">
    <input type="text" name="doctor" placeholder="Doctor" class="form-control" required>
 </div>
 

 <div class="my-4">
   <button class="btn btn-primary" name="addanimal">ADD ANIMAL</button>
 </div>

 </form>

 </div>





<?php
include('../admin/footer.php');
?>
<?php

include('../admin/js.php');
?>