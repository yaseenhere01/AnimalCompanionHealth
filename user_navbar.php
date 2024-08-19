
    <?php
    session_start();
    ?>

  <style>
    @media(max-width:667px){
      .navbar-nav .btn{
    padding: 8px 13px;
}
        }
  </style>


<nav class="navbar navbar-expand-lg navbar-light  bg-light sticky-top  py-0">
  <div class="container mx-5">
    <!-- <a class="navbar-brand" href="./index.php"><span class="text-primary">Animal Companion</span>-Health</a> -->
    <img src="images/logo 6.png" width="80px"   height="50px" alt="">

    <form action="#">
      <!-- <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div> -->
    </form>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupport">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link"  href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./user_about.php"><b>About Us</b></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./user_service.php"><b>Services</b></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./user_specialists.php"><b>Our Specialists</b></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./user_contact.php"><b>Contact</b></a>
        </li>

       

        <li class="nav-item active">
          <a class="nav-link" href="./user_record.php"><b>Records</b></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="./user_animal.php"><b>Animal Records</b></a>
        </li>


        <li class="nav-item">
          <?php
          if (isset($_SESSION['email'])) {
            echo "<a class='btn btn-primary ml-lg-3' href='./user_myapp.php'>My Appointment</a>";
            echo "<a class='btn btn-primary ml-lg-3 mx-1' href='./user_logout.php'>Logout</a>";
          } else {
            echo "<a class='btn btn-primary ml-lg-3' href='./user_register.php'>Register</a>
                <a class='btn btn-primary ml-lg-3' href='./user_login.php'>Login</a>";
          }

          ?>



        </li>
      </ul>
    </div> <!-- .navbar-collapse -->
  </div> <!-- .container -->
</nav>
</header>

