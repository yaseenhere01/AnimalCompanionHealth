<?php
include('../admin/navbar.php');
include('../admin/sidebar.php');
include('../admin/header.php');



?>

<!-- Table created -->
 <div class="container">
 <div class="card">
    <div class="card-header">
        <div class="card-title">ALL APPOINMENTS</div>
    <input class="form-control my-5" id="inp" type="text" placeholder="Search Here">
    </div>
    
    <div class="card-body" style="max-height: 500px; overflow-y: auto;">
    <div class="table-responsive">
       
       <table class="table table-striped mt-3">
           <thead>
               <tr>
                   <th scope="col">ID</th>
                   <th scope="col">NAME</th>
                   <th scope="col">EMAIL</th>
                   <th scope="col">DOB</th>
                   <th scope="col">HEALTH</th>
                   <th scope="col">NUMBER</th>
                   <th scope="col">STATUS</th>
                   <th scope="col">MESSAGE</th>
                   <th scope="col">ACTION</th>
                  
               </tr>
           </thead>
           <tbody>
           <?php
               include('../db_conn.php');
               $query = "SELECT * FROM `appoinment`";
               $result = mysqli_query($con , $query);
               if(!$result){
                   die("Query failed");
               }
               else{
                   $row = mysqli_num_rows($result);
                   if($row>0){
                       while($row = mysqli_fetch_assoc($result)){
                           echo "<tr>
                       <td>$row[id]</td>
                       <td>$row[name]</td>
                       <td>$row[email]</td>
                       <td>$row[dob]</td>
                       <td>$row[health]</td>
                       <td>$row[number]</td>
                       

                       <td>";
                       if($row['status'] == 'pending'){
                           echo "<span class='badge bg-warning text-dark'>$row[status]</span>";
                       }
                      elseif($row['status'] == 'approved'){
                       echo "<span class='badge bg-success text-dark'>$row[status]</span>";
                      }
                      else{
                       echo "<span class='badge bg-danger text-dark'>$row[status]</span>";
                      }

                      echo"
                      </td>
                      <td>$row[message]</td>
                      <td>
                      <a href='./approved.php/?id=$row[id]' class='btn  btn-success my-1 d-flex'>Approved</a>
                        <a href='./canceled.php/?id=$row[id]' class='btn  btn-danger d-flex'>Canceled</a>
                        <a href='./remove.php/?id=$row[id]' class='btn  btn-primary my-1 d-flex'>Remove</a>
                      </td>
                   </tr>";

                       }
                   }
                   
               
                   }

               
               ?>
               
              
           </tbody>
       </table>
     
      
       </div>
   </div>
</div>
 




<?php
include('../admin/footer.php');
?>

<?php
include('../admin/js.php');
?>