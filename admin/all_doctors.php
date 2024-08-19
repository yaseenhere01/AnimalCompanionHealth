<?php
include('../admin/navbar.php');
include('../admin/sidebar.php');
include('../admin/header.php');
// include('../db_conn.php');

?>


<!-- Table created -->
 
 <div class="container">
 <div class="card">
    <div class="card-header">
    <input class="form-control my-5" id="inp" type="text" placeholder="Search Here">
        <div class="card-title">ALL DOCTORS</div>
    </div>
    
    <div class="card-body" style="max-height: 500px; overflow-y: auto;">
    <div class="table-responsive">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">DR ID</th>
                    <th scope="col">DR NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">PROFILE</th>
                    <th scope="col">SPECIALITY</th>
                    <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include('../db_conn.php');
                $query = "SELECT * FROM `doctor`";
                $result = mysqli_query($con , $query);
                if(!$result){
                    die("Query failed");
                }
                else{
                    $row = mysqli_num_rows($result);
                    if($row > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>$row[d_id]</td>
                            <td>$row[d_name]</td>
                            <td>$row[d_email]</td>
                            <td>$row[d_phone]</td>
                            <td><img style='height:50px' src='../upload/$row[image]' alt='' class='avatar-img'/></td>
                            <td>$row[speciality]</td>
                            <td><a href='./edit_data.php/?d_id=$row[d_id]' class='btn btn-primary  my-1 d-flex'>Edit</a><a href='./delete_data.php/?d_id=$row[d_id]' class='btn btn-danger my-1 d-flex'>Delete</a></td>
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