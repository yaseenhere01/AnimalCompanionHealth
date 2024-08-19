
<?php
include('./user_navbar.php');
include('./user_header.php');

?>


<!-- Table created -->
<div class="container my-5">
<div>
   <input class="form-control my-5" id="inp" type="text" placeholder="Search Here">

            </div>
 <div class="card">
    <div class="card-header">
        <div  class="card-title">My Appointment</div>
       
        
    </div>
   

    
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">DR ID</th>
                    <th scope="col">DR NAME</th>
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
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
            }
                include('./db_conn.php');
                $query = "SELECT * FROM `appoinment` where email = '$email'";
                $result = mysqli_query($con , $query);
                if(!$result){
                    die("Query failed") . mysqli_connect_error();
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
                       <a href='./delete.php/?id=$row[id]' class='btn  btn-danger'>Canceled</a>
                         
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







<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $("#inp").on("keyup" , function(){
            let inp = $("#inp").val().toUpperCase();
            $("table tbody tr").filter(function(){
                $(this).toggle($(this).text().toUpperCase().indexOf(inp)>-1)
            })

        })

    })

</script>

<?php
include('./user_footer.php');
?>
