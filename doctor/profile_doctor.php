<?php
// include('../doctor/doctor_topbar.php');
include('../doctor/doctor_header.php');
include('../db_conn.php');
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
                              
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/doctor 4.png" alt="#" /><span class="name_user">Yasir Shah</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                      
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


<!-- row -->
<div class="row column1">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>Doctor profile</h2>
                </div>
            </div>
            <div class="full price_table padding_infor_info">
                <div class="row">
                    <!-- user profile section -->
                    <!-- profile image -->
                    <div class="col-lg-12">
                        <div class="full dis_flex center_text">
                            <div class="profile_img"><img width="180" class="rounded-circle" src="images/doctor 4.png" alt="#" /></div>
                            <div class="profile_contant">
                                <div class="contact_inner">
                                    <h3>Dr. Olivia James</h3>
                                    <p><strong>About: Veterinary Dermatologist.</strong></p>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-envelope-o"></i> : olivia@gmail.com</li>
                                        <li><i class="fa fa-phone"></i> : 321111</li>
                                    </ul>
                                </div>
                                <div class="user_progress_bar">
                                    <div class="progress_bar">
                                        <!-- Skill Bars -->
                                        <span class="skill" style="width:85%;">Patient Treatment<span class="info_valume">85%</span></span>
                                        <div class="progress skill-bar ">
                                            <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                            </div>
                                        </div>
                                        <span class="skill" style="width:78%;">Success Treatment <span class="info_valume">78%</span></span>
                                        <div class="progress skill-bar">
                                            <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                            </div>
                                        </div>
                                        <span class="skill" style="width:47%;">Process<span class="info_valume">47%</span></span>
                                        <div class="progress skill-bar">
                                            <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                            </div>
                                        </div>
                                        <span class="skill" style="width:65%;">Timing <span class="info_valume">65%</span></span>
                                        <div class="progress skill-bar">
                                            <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <!-- end row -->
</div>

<?php
include('../doctor/doctor_script.php');
?>