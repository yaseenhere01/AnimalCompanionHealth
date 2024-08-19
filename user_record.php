<?php
include('./user_navbar.php');
include('./user_header.php');
include('./db_conn.php');
?>

<style>
    .contactbg::before {
        content: "";
        /* background: url("./images/back-hd3.jpg"); */  
        background-color: #2d3b38;
        height: 312%;
        width: 100%;
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
      
        backdrop-filter: blur(150px);

    }

    /* @media (min-width: 768px) {
    .container, .container-sm, .container-md {
        max-width: 928px;
        margin-bottom: 2rem;
        margin-top: 3rem;
    }
} */

/* @media (min-width: 576px) {
    .container, .container-sm {
        max-width: 796px;
    }
} */

/* @media (min-width: 1235px) { */
/* .navbar-nav .btn {
    font-size: 14px;
} */
/* .btn {
    padding: 8px 13px;
}
} */

/* @media (min-width: 1080px) { */
/* .navbar-nav .btn {
    font-size: 14px;
} */
/* .btn {
    padding: 8px 11px;
}
} */

/* @media (min-width: 1020px) { */
/* .navbar-nav .btn {
    font-size: 14px;
} */
/* .btn {
    padding: 7px 0px;
}
.nav-link {
        padding-right: 9px;
        padding-left: 12px;
    }
} */

/* @media (min-width: 992px) { */
/* .navbar-nav .btn {
    font-size: 14px;
} */
/* .btn {
    padding: 7px 0px;
}
.nav-link {
        padding-right: 9px;
        padding-left: 12px;
    }
} */

/* @media (min-width: 700px) { */
/* .navbar-nav .btn {
    font-size: 14px;
} */

/* .container, .container-sm, .container-md {
        max-width: 28px;
        margin-bottom: 2rem;
        margin-top: 3rem;
    }

    .table td {
    padding: 99.25rem;
    
}


} */

</style>
<!-- <div class="my-5" style="margin-left: 1130px;">
    <button data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-primary d-flex justify-content-between align-items-center">Feedback</button>
</div> -->
    

<!-- Table created -->
<div class="container my-5">
<div class="contactbg">
<div>
   <input style="background-color: #2d3b38" class="form-control my-5 text-light" id="inp" type="text" placeholder="Search Here">

            
 <div style="background-color: #2d3b38" class="card">
    <div class="card-header">
        <div  class="card-title text-light">DOCTORS LIST</div>
       
        
    </div>
   

    
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-striped">
  <thead>
    <tr class="text-light">
    <th scope="col">ID</th>
                    <th scope="col">DR NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">PROFILE</th>
                    <th scope="col">SPECIALITY</th>
    </tr>
  </thead>
            <tbody class="text-light">
            <?php
                include('./db_conn.php');
                $query = "SELECT * FROM `doctor`";
                $result = mysqli_query($con , $query);
                if(!$result){
                    die("Query failed");
                }
                else{
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                        <td>$row[d_id]</td>
                        <td>$row[d_name]</td>
                        <td>$row[d_email]</td>
                        <td>$row[d_phone]</td>
                        <td><img style='height:50px; width:70px;' src='./upload/$row[image]' alt='' class='avatar-img'/></td>
                        <td>$row[speciality]</td>
                       
                    </tr>";
                    }

                }
                ?>
                
               
            </tbody>
        </table>
      
       
      
    </div>
</div>
</div>
</div>
</div>






<?php
include('./user_footer.php');
?>

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