<?php
include('./user_navbar.php');
include('./user_header.php');
?>


<style>
 
/*  Services */

    .why-choose .choose-left h3{
	font-size:24px;
	font-weight:600;
	color:#2C2D3F;
	position:relative;
	padding-bottom:20px;
	margin-bottom:24px;
}
.why-choose .choose-left h3:before{
	position:absolute;
	content:"";
	left:0;
	bottom:0;
	height:2px;
	width:50px;
	background:#1a76d1;
}
.why-choose .choose-left p{
	margin-bottom:35px;
}
.why-choose .choose-left .list{}
.why-choose .choose-left .list li {
	color: #868686;
	margin-bottom: 12px;
}
.why-choose .choose-left .list li:last-child{
	margin-bottom:0px;
}
.why-choose .choose-left .list li i{
	height:15px;
	width:15px;
	line-height:15px;
	text-align:center;
	background:#1a76d1;
	color:#fff;
	font-size:14px;
	border-radius:100%;
	padding-left:2px;
	margin-right:16px;
}
/* Start Faq CSS */
.why-choose{
	background:#fff;
}
.why-choose .choose-right{
	height:100%;
	width:100%;
	background-image:url('images/doctor.jpg');
	background-size:cover;
	background-position:center;
	background-repeat:no-repeat;
	position:relative;
}
.why-choose .choose-right .video {
	color: gray;
	height: 70px;
	width: 70px;
	line-height: 70px;
	text-align: center;
	position: absolute;
	left: 50%;
	top: 50%;
	margin-left: -35px;
	margin-top: -35px;
	font-size: 45px;
	
	padding-left: 4px;
}
.why-choose .choose-right .video:hover{
	transform:scale(1.1);
}
.why-choose .video-image .waves-block .waves {
	position: absolute;
	width: 200px;
	height: 200px;
	background: #fff;
	opacity: 0;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	border-radius: 100%;
	-webkit-animation: waves 3s ease-in-out infinite;
	animation: waves 3s ease-in-out infinite;
	left: 50%;
	margin-left: -100px;
	top: 50%;
	margin-top: -100px;
}
.why-choose .video-image .waves-block .wave-1 {
    -webkit-animation-delay: 0s;
    animation-delay: 0s;
}
.why-choose .video-image .waves-block .wave-2 {
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
}
.why-choose .video-image .waves-block .wave-3 {
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
}
/* end */

  
/* media */
@media only screen and (min-width: 768px) and (max-width: 991px) {


.section-title {
	margin-bottom: 35px;
	padding: 0px 80px;
}
.section-title h2 {
	font-size: 25px;
	margin-bottom: 12px;
}
.section-title p {
	font-size: 13px;
} 

.why-choose .choose-right {
	height: 350px;
	margin-top: 30px;
}
.services .single-service h4 {
	margin-bottom: 12px;
}
.services-details-img h2 {
	font-size: 24px;
}
.service-details-inner-left {
	height: 400px;
	margin-bottom: 30px;
}
.service-details-inner {
	width: 100%;
	margin: 0;
}
.service-details-inner h2 {
	font-size: 24px;
}
.appointment .appointment-image{
	margin-top:20px;
}




}
/* Mobile Screen */
@media only screen and (max-width: 767px) {

 
.section-title {
	margin-bottom: 30px;
	padding: 0px 20px;
}
.section-title h2 {
	font-size: 22px;
	margin-bottom: 10px;
}
.section-title p {
	font-size: 13px;
} 
.why-choose .choose-right {
	height: 350px;
	margin-top: 30px;
}

}
/* Mobile Screen */
@media only screen and (max-width: 450px) {




.why-choose .choose-right {
	height: 350px;
	margin-top: 30px;
}

}

</style>
<body>
   


  <!--  Services title -->
   
  <div style="border: none;" class="card text-white">
        <img style="height: 325px;" src="images/services 2.png" class="card-img1" alt="...">
        <div class="card-img-overlay">
            <h1 style="text-align: center;  margin-top: 110px;" class="card-title "> <b>Our Expert Pet Care Services.</b> </h1>
            <!-- <p style="text-align: center; color: #d4d0da;" class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p> -->
        </div>
    </div>


      <!-- Services 1-->
    
        <div class="container py-5">
        <div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center">
							<h2><b>Premium Services for Your  <br> Pet’s Well-Being</b></h2>
							
							<p>At Animal Companion Health, we are committed to providing exceptional care for your pets.</p>
						</div>
					</div>
				</div>
            <div class="row pb-3 my-4">
                <div class="col-md-6  col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-light mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal  mb-3"><i class="fa-solid fa-house"></i></h3>
                        <h3 class=" text-uppercase mb-3">Pet Boarding</h3>
                        <p>Our safe and comfortable boarding facilities give your pet a home ... </p>
                        <p id="data">away from home. We offer attentive care while you’re away.
                        </p>
                        <a class="text-uppercase btn font-weight-bold" id="btn">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center  bg-light mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-food display-3 font-weight-normal mb-3"><i class="fa-solid fa-cookie-bite"></i></h3>
                        <h3 class="text-uppercase mb-3">Pet Feeding</h3>
                        <p>We provide guidance on proper feeding routines and dietary...</p>
                        <p id="data1"> choices experts help ensure your pet gets the nutrition they need
                        </p>
                        <a class="text-uppercase btn font-weight-bold" id="btn1" >Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center  bg-light mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-grooming display-3 font-weight-normal mb-3"><i  class="fa-solid fa-broom"></i></h3>
                        <h3 class=" text-uppercase mb-3">Pet Grooming</h3>
                        <p>Our grooming services keep your pet looking and feeling their best...</p>
                        <p id="data2">  We offer baths, trims, and nail care tailored to your pet’s needs.
                        </p>
                        <a class="text-uppercase btn font-weight-bold" id="btn2" >Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center  bg-light mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-cat display-3 font-weight-normal mb-3"><i class="fa-solid fa-shield-dog"></i></h3>
                        <h3 class=" text-uppercase mb-3">Pet Training</h3>
                        <p>Our training programs help improve your pet’s behavior and ...</p>
                        <p id="data3">strengthen your bond We offer personalized sessions for all skill levels.
                        </p>
                        <a class="text-uppercase btn font-weight-bold" id="btn3" >Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-light mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-dog display-3 font-weight-normal mb-3"><i class="fa-solid fa-paw"></i></h3>
                        <h3 class=" text-uppercase mb-3">Pet Exercise</h3>
                        <p>We design exercise routines to keep your pet active and healthy...</p>
                        <p id="data4">  Our services cater to your pet’s energy level and physical needs.
                        </p>
                        <a class="text-uppercase btn font-weight-bold" id="btn4" >Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-light mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-vaccine display-3 font-weight-normal  mb-3"><i class="fa-solid fa-stethoscope"></i></h3>
                        <h3 class=" text-uppercase mb-3">Pet Treatment</h3>
                        <p>We offer a range of treatments for various health conditions...
						</p>
                        <p id="data5"> Our compassionate team ensures your pet receives effective and gentle care.
                        </p>
                      <a class="text-uppercase btn font-weight-bold"  id="btn5" >Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
		<!--  Services 2 -->
		<section  class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center">
							<h2><b>We Offer Different Services To  <br> Improve Your Health</b></h2>
							
							<!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p> -->
						</div>
					</div>
				</div>
                <br>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Who We Are</h3>
							<p>At Animal Companion Health, we are committed to providing exceptional care for your pets. Our team combines expertise with compassion...  </p>
							<p>to offer personalized services tailored to each pet’s needs. We believe in a holistic approach, ensuring your pet receives comprehensive care at every stage of life. </p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Preventive Care </li>
										<li><i class="fa fa-caret-right"></i>Diagnostic Services</li>
										<li><i class="fa fa-caret-right"></i>Surgical Services.</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Dental Care </li>
										<li><i class="fa fa-caret-right"></i>Emergency Care</li>
										<li><i class="fa fa-caret-right"></i>Nutritional Counseling.</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i style="margin-bottom: 20px;" class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
        <br>
        <br>



        <?php
        include('./user_footer.php');
        ?>

	<!-- services js -->
	<script src="./jquery-3.7.1.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#data").slideUp()
			$("#btn").click(function () {
				$("#data").slideToggle()
			})
		})
	</script>

	<script>
		$(document).ready(function () {
			$("#data1").slideUp()
			$("#btn1").click(function () {
				$("#data1").slideToggle()
			})
		})
	</script>
	<script>
		$(document).ready(function () {
			$("#data2").slideUp()
			$("#btn2").click(function () {
				$("#data2").slideToggle()
			})
		})
	</script>
	<script>
		$(document).ready(function () {
			$("#data3").slideUp()
			$("#btn3").click(function () {
				$("#data3").slideToggle()
			})
		})
	</script>
	<script>
		$(document).ready(function () {
			$("#data4").slideUp()
			$("#btn4").click(function () {
				$("#data4").slideToggle()
			})
		})
	</script>
	<script>
		$(document).ready(function () {
			$("#data5").slideUp()
			$("#btn5").click(function () {
				$("#data5").slideToggle()
			})
		})
	</script>
	













	

</body>

</html>
	
