<?php
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

        backdrop-filter: blur(150px);

    }


    .error {
        color: red;
    }

    .fa-eye {
        display: none;
    }


    .icons {
        position: absolute;
        top: 300px;
        right: 170px;
    }

    @media(max-width:1008px) {
        .icons {
            position: absolute;
            top: 305px;
            right: 90px;
        }
    }

    @media(max-width:980px) {
        .icons {
            position: absolute;
            top: 305px;
            right: 190px;
        }
    }

    @media(max-width:888px) {
        .icons {
            position: absolute;
            top: 305px;
            right: 110px;
        }
    }

    @media(max-width:775px) {
        .icons {
            position: absolute;
            top: 305px;
            right: 50px;
        }
    }

    @media(max-width:765px) {
        .icons {
            position: absolute;
            top: 305px;
            right: 130px;
        }
    }

    @media(max-width:595px) {
        .icons {
            position: absolute;
            top: 305px;
            right: 50px;
        }
    }

    @media(max-width:466px) {
        .icons {
            position: absolute;
            top: 340px;
            right: 50px;
        }
    }


    @media(max-width:667px) {
        .w-50 {
            width: 80% !important;
        }
        
    }

    h1,
    .h1 {
        font-size: 1.5rem;
    }

    
</style>

<body>
    <div class="container my-5 w-50">
        <div class="contactbg">
            <h3 class="text-center text-light">Register</h3>

            <form action="./registeration_data.php" method="POST" enctype="multipart/form-data">

                <div class="my-2">
                    <input type="text" name="name" placeholder="Name" class="form-control" required>
                </div>

                <div class="my-2">
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>

                <div class="my-2">
                    <input id="password" type="password" name="password" placeholder="Password" class="form-control" required>
                </div>

                <!-- <i class="icons fa-regular fa-eye"></i>
        <i class="icons fa-solid fa-eye-slash"></i> -->

                <div class="my-2">
                    <input type="date" name="dob" class="form-control" required>
                </div>

                <div class="my-2">
                    <input type="file" name="image" class="form-control" required>
                </div>

                <div class="my-2">
                    <button class="btn btn-primary">Submit</button>
                </div>


            </form>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>

<script src="./js/jquery-3.7.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    jQuery("#myform").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
            },

            email: {
                required: true,
                email: true,
            },

            phone: {
                required: true,
                minlength: 11,
            },

            password: {
                required: true,
                minlength: 8,
            },

        },

        messages: {

            name: {
                required: "Name Must Be Required",
                minlength: "Name must be greater than 3 characters",
            },

            email: {
                required: "Email Must Be Required",
                email: "Please Enter a valid Email",
            },

            phone: {
                required: "Phone Must Be Required",
                minlength: "Please Enter a valid Number",
            },

            password: {
                required: "Password Must Be Required",
                email: "Password Must Be Greater Than 8 Characters",
            },

        }
    })

    // $(document).ready(function(){
    //     $(".icons").click(function(){
    //         $(".icons").toggle("fa-eye-slash")

    //         var x = $("#password").attr("type")
    //         if(x == "password"){
    //             $("#password").attr("type","text");

    //         }
    //         else{
    //             $("#password").attr("type","password") 
    //         }


    //     })
    // })
</script>


<?php
include('./user_footer.php');

?>