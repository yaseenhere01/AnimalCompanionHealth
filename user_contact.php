<?php
include('./user_navbar.php');
include('./user_header.php');
?>

    <style>
        /* body{
            background: url('./images/hover2.jpg');
        } */
        .error{
            color: red;
        }

        .contactbg::before {
        content: "";
        background: url("./images/bg_1.jpg");
        height: 150vh;
        width: 100%;
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        opacity: 0.7;

    }

    .contact{
        border: 2px solid white;
        backdrop-filter: blur(12px);
        padding: 20px 50px;

    }


    @media(max-width:667px){
        
      h1, .h1 {
    font-size: 1.5rem;
}
      }
       
    </style>
<body>
    

<div class="container my-5">
<div class="contactbg">
<div class="contact">
        <h1 class="text-center">Contact Us</h1>

        <form id="myform" action="./contactconn.php" method="POST">

        <div class="my-3">
            <input type="text" name="name" placeholder="Name" class="form-control">
        </div>

        <div class="my-3">
            <input type="email" name="email" placeholder="Email" class="form-control">
        </div>

        <div class="my-3">
            <input type="text" name="phone" placeholder="Phone" class="form-control">
        </div>

        <div class="my-3">
            <input type="text" name="address" placeholder="Address" class="form-control">
        </div>

        <div class="my-3">
            <input type="text" name="gender" placeholder="Gender" class="form-control">
        </div>

        <div class="my-3">
            <input type="text" name="message" placeholder="Message" class="form-control">
        </div>

        <div class="my-3">
            <button class="btn btn-primary" name="fill">Submit</button>
        </div>


        </form>



    </div>
    </div>
    </div>

   
    
</body>
</html>

<script src="./js/jquery-3.7.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    jQuery("#myform").validate({
        rules : {
            name : {
                required : true,
                minlength : 3,
            },

            email : {
                required : true,
                email : true,
            },

            phone : {
                required : true,
                minlength : 11,
            },

            address : {
                required : true,
                address : true,
            },

            gender : {
                required : true,
                gender : true,
            },

            message : {
                required : true,
                message : true,
            },

        },

        messages : {

            name : {
                required : "Name Must Be Required",
                minlength : "Name must be greater than 3 characters",
            },

            email : {
                required : "Email Must Be Required",
                email : "Please Enter a valid Email",
            },

            phone : {
                required : "Phone Must Be Required",
                minlength : "Please Enter a valid Number",
            },

            address : {
                required : "Address Must Be Required",
                address : "Address Must Be Required",
            },

            gender : {
                required : "Gender Must Be Required",
                gender : "Gender Must Be Required",
            },

            message : {
                required : "Message Must Be Required",
                message : "Message Must Be Required",
            },

        }
    })
</script>



<?php
include('./user_footer.php');
?>