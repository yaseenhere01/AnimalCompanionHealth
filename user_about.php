<?php
include('./user_navbar.php');
include('./user_header.php');
?>


<style>
 
/* About 2 */

.adapt_area {
  padding-bottom: 90px;
}

@media (max-width: 767px) {
  .adapt_area {
    padding-top: 60px;
    padding-bottom: 60px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .adapt_area {
    padding-top: 100px;
    padding-bottom: 10px;
  }
}

@media (max-width: 767px) {
  .adapt_area .adapt_help {
    padding-bottom: 60px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .adapt_area .adapt_help {
    margin-bottom: 40px;
  }
}

.adapt_area .adapt_help .section_title p {
  color: #66666f;
  line-height: 28px;
  font-size: 16px;
  margin-bottom: 54px;
  margin-top: 30px;
}


.adapt_area .adapt_about .single_adapt {
  margin-bottom: 40px;
  box-shadow: 0px 16px 35px 0px rgba(0, 0, 2, 0.08);
  border-radius: 14px;
  background: #fff;
  padding: 40px 40px 33px 40px;
}


.adapt_area .adapt_about .single_adapt .adapt_content h3 {
  font-size: 60px;
  font-weight: 700;
  font-family: "Poppins", sans-serif;
  color: #383737;
  display: inline-block;
  margin-bottom: 2px;
  margin-top: 22px;
  line-height: 1;
}


.adapt_area .adapt_about .single_adapt .adapt_content p {
  font-size: 20px;
  color: #808080;
  font-weight: 400;
  font-family: "Open Sans", sans-serif;
  display: block;
  margin-bottom: 0;
}

/* about 4 */
.team_area {
  padding-bottom: 200px;
  padding-top: 125px;
}

@media (max-width: 767px) {
  .team_area {
    padding-bottom: 60px;
   
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  
  .team_area {
    padding-bottom: 100px;
    padding-top: 50px;
  }
}


.team_area .single_team .thumb img {
  width: 100%;
}

.team_area .single_team .member_name {
  position: relative;
  -webkit-transform: translateY(-20px);
  -moz-transform: translateY(-20px);
  -ms-transform: translateY(-20px);
  transform: translateY(-20px);
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

.team_area .single_team .member_name .mamber_inner {
  border-radius: 5px;
  display: inline-block;
  padding: 16px 40px 11px 40px;
  background-color: white;
  box-shadow: 0px 16px 35px 0px rgba(0, 0, 2, 0.08);
}

.team_area .single_team .member_name .mamber_inner h4 {
  font-family: "Open Sans", sans-serif;
  font-weight: 700;
  color: #222222;
  margin-bottom: 0;
}

.team_area .single_team .member_name .mamber_inner p {
  font-size: 14px;
  color: #7a7b7c;
  font-weight: 400;
  margin-bottom: 0;
}

.team_area .single_team:hover .member_name {
  -webkit-transform: translateY(-25px);
  -moz-transform: translateY(-25px);
  -ms-transform: translateY(-25px);
  transform: translateY(-25px);
}



</style>
<body>
    
  <!-- About title -->
   
  <div style="border: none;" class="card text-white">
        <img style="height: 325px; opacity: 0.9;" src="images/about 1.png" class="card-img1" alt="...">
        <div class="card-img-overlay">
            <h1 style="text-align: center;  margin-top: 110px;" class="card-title "> <b>We Care About Your Pet</b> </h1>
            <!-- <p style="text-align: center; color: #d4d0da;" class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p> -->
        </div>
    </div>
<!-- about 1 -->
<div  class="container-xxl py-5 my-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="images/about 3.jpg" alt="">
                        <img style="margin-top: -40px; border: 13px solid white;" class="img-fluid rounded w-50 bg-white  " src="images/about 5.jpg" alt="" >
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                   
                    <h2 class="mb-4">Trusted Care for Your Beloved Pets</h2>
                    <p>At Animal Companion Health, trust is the foundation of everything we do. Our team is composed of experienced veterinarians and compassionate staff who are deeply committed to the well-being of your pets...</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i> Quality health care</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i> Only Qualified Doctors</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i> Medical Research Professionals</p>
                    <p id="data"> We understand that your pets are family, and we treat them with the same level of care and love as we would our own. Our state-of-the-art facility is equipped with the latest technology to ensure your pet receives the best possible care.
                        </p>
                        <!-- <a class="text-uppercase btn font-weight-bold" id="btn">Read More</a> -->
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3"  id="btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
<!-- about 2 -->
    <div class="adapt_area">
		<div class="container my-5 py-5">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-5">
					<div class="adapt_help">
						<div class="section_title">
							<h2><b><span>We Care About Your Pet</span>
                            help Adopt Us</b></h2>
							<p>At Animal Companion Health, we treat your pets like family. Our mission is to ensure every pet receives personalized care to live a healthy, happy life. We’re here to support your pet’s well-being, from routine check-ups to specialized treatments.</p>
                                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="./user_contact.php">Contact
								us</a>
							<!-- <a href="about.html" class="abbtn">Contact
								us</a> -->
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="adapt_about">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<div class="single_adapt text-center">
									<!-- <img src="img/adapt_icon/1.png" alt=""> -->
									<i class="fa-solid fa-paw fa-2xl "></i>
									<div class="adapt_content">
										<h3><span class="counter">452</span></h3>

										<p>Pets Available</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="single_adapt text-center">
									<!-- <img src="img/adapt_icon/3.png" alt=""> -->
									<i class="fa-solid fa-dog fa-2xl"></i>
									<div class="adapt_content">
										<h3><span class="counter">52</span>+</h3>
										<p>Pets Available</p>
									</div>
								</div>
								<div class="single_adapt text-center">
									<!-- <img src="img/adapt_icon/2.png" alt=""> -->
									<i class="fa-solid fa-cat fa-2xl"></i>
									<div class="adapt_content">
										<h3><span class="counter">52</span>+</h3>
										<p>Pets Available</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- about 3 -->

    <section class="about ">
                <div class="container ">
                    <div class="row">
                    <div class="col-lg-12">
						<div class="section-title text-center">
							<h2><b>We Offer Different Services To  <br> Improve Your Health</b></h2>
							
							<!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p> -->
                           
						</div>
					</div>
         
                        <div class="col-lg-2 col-12 mt-auto mb-auto ">
                            <ul class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="btn my-1 nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Introduction</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="btn my-1 nav-link" id="pills-youtube-tab" data-bs-toggle="pill" data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube" aria-selected="true">How we work?</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="btn my-1 nav-link" id="pills-skill-tab" data-bs-toggle="pill" data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill" aria-selected="false">Capabilites</button>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-10 col-12">
                            <div class="tab-content mt-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <img src="images/doctor.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">We Need Your Help</h4>

                                                <p>At Animal Companion Health, we treat your pets like family. Our mission is to ensure every pet receives personalized care to live a healthy, happy life.</p>

                                                <p> We’re here to support your pet’s well-being, from routine check-ups to specialized treatments.Your support enables us to provide exceptional care to more pets. Whether through donations or spreading the word, every contribution helps. Together, we can make a difference in the lives of pets and their families.</p>

                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab">

                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <div class="ratio ratio-16x9">
                                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Q6xEwfanPM0?si=dHNIFksL2qEx2kGJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                                              <div>
                                            <img src="images/home 1.jpg" class="img-fluid" alt="">
                                        </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">We Need Your Help</h4>

                                                <p>At Animal Companion Health, we treat your pets like family. Our mission is to ensure every pet receives personalized care to live a healthy, happy life.</p>

                                                <p>We’re here to support your pet’s well-being, from routine check-ups to specialized treatments.Your support enables us to provide exceptional care to more pets. Whether through donations or spreading the word, every contribution helps. Together, we can make a difference in the lives of pets and their families.</p>

                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <img src="images/about 2.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">We Need Your Help</h4>

                                                <p>At Animal Companion Health, we treat your pets like family. Our mission is to ensure every pet receives personalized care to live a healthy, happy life.</p>

                                                <p>We’re here to support your pet’s well-being, from routine check-ups to specialized treatments.Your support enables us to provide exceptional care to more pets. Whether through donations or spreading the word, every contribution helps. Together, we can make a difference in the lives of pets and their families.</p>

                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <!-- about 4 -->
	<div class="team_area">
		<div   class="container">
			<div class="row justify-content-center ">
				<div class="col-lg-6 col-md-10">
					<div class="section_title text-center mb-95">
						<h3><b>Blog's</b></h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p> -->
					</div>
				</div>
			</div>
			<div class="row justify-content-center my-2">
				<div class="col-lg-4 col-md-6">
					<div class="single_team">
						<div class="thumb">
							<img src="./images/bg10.jpg" alt="">
						</div>
						<div class="member_name text-center">
							<div class="mamber_inner">
								<h4>LATEST POST</h4>
								<p>Animal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_team">
						<div class="thumb">
							<img src="./images/bg11.jpg" alt="">
						</div>
						<div class="member_name text-center">
							<div class="mamber_inner">
              <h4>LATEST POST</h4>
              <p>Animal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_team">
						<div class="thumb">
							<img src="./images/bg14.jpg" alt="">
						</div>
						<div class="member_name text-center">
							<div class="mamber_inner">
              <h4>LATEST POST</h4>
              <p>Animal</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <?php
    include('./user_footer.php');
    ?>




	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<!-- Typed js cdn -->
	<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>


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


</body>

</html>
	
