<?php
include('../doctor/doctor_header.php');
include('../doctor/doctor_logic_data.php');
?>

<body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
           <?php
           include('../doctor/doctor_sidebar.php');
           ?>

            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <?php
               include('../doctor/doctor_topbar.php');
               ?>
               <!-- end topbar -->
               <!-- dashboard inner -->

              <?php
              include('../doctor/midde_cont.php');
              ?>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>

     <?php
     include('../doctor/doctor_script.php');
     ?>