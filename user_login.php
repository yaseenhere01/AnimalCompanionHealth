<?php
// session_start();
include('./user_header.php');
include('./user_navbar.php');
?>
        <style>
      .contactbg::before {
        content: "";
        /* background: url("./images/background 6.jpg"); */
        background-color: #2d3b38;
        height: 100%;
        width: 100%;
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    
            .error{
          color: red;
      }

      .fa-eye{
          display: none;
      }


      .icons{
          position: absolute;
          top: 275px;
          right: 160px;
      }

      @media(max-width:628px){
        .icons{
          position: absolute;
          top: 280px;
          right: 70px;
      }
      }

      @media(max-width:421px){
        .icons{
          position: absolute;
          top: 315px;
          right: 55px;
      }
      }

      @media(max-width:440px){
        .icons{
          position: absolute;
          top: 315px;
          right: 55px;
      }
      }

      @media(max-width:360px){
        .icons{
          position: absolute;
          top: 315px;
          right: 55px;
      }
      }

      @media(max-width:667px){
        .w-50 {
    width: 80% !important;
}
      }

      

           
        </style>
    

    <body>
        <div class="container my-5 w-50">
        <div class="contactbg">
            <h1 class="text-center text-light">Login</h1>

            <?php
            if(isset($_GET['wrong_cradential_msg'])){
                // echo "<h3 class='text-center text-danger'>" . $_GET['wrong_cradentials_msg'] . "</h3>";
                echo "<h6 class='text-center text-danger'>".$_GET['wrong_cradential_msg']."</h6";
                
            }
            ?>

            <form id="myform" action="./login_data.php" method="POST">

           
            <div class="my-4">
                <input type="email" name="email" placeholder="Email" class="form-control">
            </div>

            <div class="my-2">
                <input id="password" type="password" name="password" placeholder="Password" class="form-control">
            </div>

            <!-- <div>
    <i class="icons fa-solid fa-eye"></i>
    <i class="icons fa-solid fa-eye-slash"></i>
    </div> -->
    </div>

          
            <div class="my-2">
              <button class="btn btn-primary" name="signin">Submit</button>
            </div>


            </form>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


<script src="./js/jquery-3.7.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>
    jQuery("#myform").validate({
        rules : {
           
            email : {
                required : true,
                email : true,
            },


            password : {
                required : true,
                minlength : 8,
            },

        },

        messages : {

            email : {
                required : "Email Must Be Required",
                email : "Please Enter a valid Email",
            },


            password : {
                required : "Password Must Be Required",
                email : "Password Must Be Greater Than 8 Characters",
            },

        }
    })


    
    // $(document).ready(function(){
    //     $(".icons").on("click" , function(){
    //         $(".icons").toggle("fa-eye-slash")

    //         var x = $("#password").attr("type")
    //         if(x == "password"){
    //             $("#password").attr("type" , "text");
    //         }
    //         else{
    //             $("#password").attr("type" , "password");
    //         }

    //     })

    // })
</script>

<?php
include('./user_footer.php');

?>