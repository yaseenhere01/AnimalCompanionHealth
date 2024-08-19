<?php
// include('../doctor/doctor_topbar.php');
include('../doctor/doctor_header.php');
// include('../doctor/doctor_sidebar.php');
?>

<div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <a href="../doctor/index.php" type="button" id="sidebarCollapse" class="sidebar_toggle text-dark"><i class="fa-solid fa-arrow-left"></i></a>
                        <div class="logo_section">
                           <a href="./doctor/index.php"><img  class="img-responsive" src="images/logo/doc1-removebg-preview.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div  class="icon_info">
                              <!-- <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul> -->
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/Picsart_23-02-26_20-03-27-259.jpg" alt="#" /><span class="name_user">Yasir Shah</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <!-- <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a> -->
                                       <a class="dropdown-item" href="../user_logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>

<!-- <div class="my-5">
<a href="./add_animal_data.php" class="btn btn-primary my-5 mx-5">Add Animal</a>
</div> -->

<!-- Table created -->
 <div style="margin-top: 100px;" class="container">
 <div class="card">
    <div class="card-header">
        <div class="card-title">USER APPOINMENTS</div>
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
                      <a href='../doctor/doctor_approved.php/?id=$row[id]' class='btn  btn-success my-1 d-flex'>Approved</a>
                        <a href='../doctor/doctor_canceled.php/?id=$row[id]' class='btn  btn-danger my-1 d-flex'>Canceled</a>
                        <a href='../doctor/doctor_remove.php/?id=$row[id]' class='btn  btn-primary my-1 d-flex '>Remove</a>
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
    $(document).ready(function() {
        $("#inp").on("keyup", function() {
            let inp = $("#inp").val().toUpperCase();
            $("table tbody tr").filter(function() {
                $(this).toggle($(this).text().toUpperCase().indexOf(inp) > -1)
            })

        })

    })
</script>
