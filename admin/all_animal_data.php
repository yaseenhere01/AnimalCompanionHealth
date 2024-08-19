<?php
include('../admin/navbar.php');
include('../admin/sidebar.php');
include('../admin/header.php');
include('../db_conn.php');
?>

<a href="./add_animal_data.php" class="btn btn-primary my-5 mx-5">Add Animal</a>




<!-- Table created -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">ALL ANIMALS</div>
            <input class="form-control my-5" id="inp" type="text" placeholder="Search Here">
    </div>
    
    <div class="card-body" style="max-height: 500px; overflow-y: auto;">
    <div class="table-responsive">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DISEASE</th>
                    <th scope="col">SYMPTOMS</th>
                    <th scope="col">TREATMENT</th>
                    <th scope="col">PROCESS</th>
                    <th scope="col">DOCTORS</th>
                    <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include('../db_conn.php');
                $query = "SELECT * FROM `animal`";
                $result = mysqli_query($con , $query);
                if(!$result){
                    die("Query failed");
                }
                else{
                    $row = mysqli_num_rows($result);
                    if($row > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[disease]</td>
                            <td>$row[symptoms]</td>
                            <td>$row[treatment]</td>
                            <td>$row[process]</td>
                            <td>$row[doctor]</td>
                            <td><a href='./edit_data_animal.php/?id=$row[id]' class='btn btn-primary  my-1 d-flex'>Edit</a><a href='./delete_data_animal.php/?id=$row[id]' class='btn btn-danger d-flex'>Delete</a></td>
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
</div>

<?php
include('../admin/footer.php');
include('../admin/js.php');
?>
