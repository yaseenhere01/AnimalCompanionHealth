<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <?php
      include('./db_conn.php');
      if(!isset($_SESSION['email'])){
        echo '<p class="text-center text-danger">You have to sign in to book an appoinment</p>';
      }
      ?>

      <form action="./appoinments_con.php" method="POST" class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="email" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="dob" class="form-control">
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text" name="health" placeholder="General Health" class="form-control">
          </div>
          
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <?php
        if(isset($_SESSION['email'])){
          echo '<button type="submit"  class="btn btn-primary mt-3 wow zoomIn" name="submit">Submit Request</button>';
        }
        else{
          echo '<button disabled type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>';
        }
        
        ?>

          
          </div>
        </div>

        
       
      </form>
    </div>
  </div> <!-- .page-section -->