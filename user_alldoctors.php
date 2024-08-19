<!-- <style>
    /* .page-section::before {
        content: "";
      
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
</style> */ -->

<div class="page-section">
  <div class="container">
    <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

    <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
      <?php
      include('./db_conn.php');
      $query = "SELECT * FROM doctor";
      $result = mysqli_query($con, $query);

      if (!$result) {
        die("Query Failed " . mysqli_connect_error());
      } else {
        $row = mysqli_num_rows($result);
        if ($row > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='item'>
                                <div class='card-doctor'>
                                  <div class='header'>
                                    <img src='./upload/$row[image]' alt=''>
                                    <div class='meta'>
                                      <a href='#'><span class='mai-call'></span></a>
                                      <a href='#'><span class='mai-logo-whatsapp'></span></a>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    <p class='text-xl mb-0'>$row[d_name]</p>
                                    <span class='text-sm text-grey'>$row[speciality]</span>
                                  </div>
                                </div>
                              </div>";
          }
        }
      }

      ?>



    </div>
  </div>
</div>