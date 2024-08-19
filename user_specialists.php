<?php
include('./user_navbar.php');
include('./user_header.php');
?>

<style>
    /* doctors */
    .team-item img {
        position: relative;
        top: 0;
        transition: .5s;
    }

    .team-item:hover img {
        top: -30px;
    }

    .team-item .team-text {
        position: relative;
        height: 100px;
        transition: .5s;
    }

    .team-item:hover .team-text {
        margin-top: -60px;
        height: 160px;
    }

    .team-item .team-text .team-social {
        opacity: 0;
        transition: .5s;
    }

    .team-item:hover .team-text .team-social {
        opacity: 1;
    }

    .team-item .team-social .btn {
        display: inline-flex;
        color: var(--primary);
        background: #FFFFFF;
        border-radius: 40px;
    }

    .team-item .team-social .btn:hover {
        color: gray;
        background: var(--primary);
    }
</style>

<body>



    <!--  specialists title -->

    <div style="border: none;" class="card text-light">
        <img style="height: 325px;" src="images/background 4.png" class="card-img1" alt="...">
        <div class="card-img-overlay">
            <h1 style="text-align: center;  margin-top: 110px;" class="card-title "> <b>Our Specialists</b> </h1>
            <p style="text-align: center; color: #d4d0da;" class="card-text text-light">Here’s a list of  fictional veterinarians with different specialties tailored of "Animal Companion Health
            </p>
        </div>
    </div>
    <!-- Doctor 1 -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">

                <h2><b>Our Experience Doctors</b></h2>
                <p>Here’s a list of  fictional veterinarians with different specialties tailored of "Animal Companion Health</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 13.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Michael Thompson</h5>
                            <!-- <a style="color: white;" href="./user_appoinment.php"><button class="btn btn-primary">Appoinment</button></a> -->
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark">Tigers, Elephants, Monkeys, and Other Wildlife
                                The Wildlife Conservation Society (WCS) Pakistan</p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./appoinments_con.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">DOB</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">HEALTH</label>
                                        <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NUMBER</label>
                                        <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">MESSAGE</label>
                                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 2.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Laura Bennett</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark">Parrots and Other Birds <br>
                                Dr. Aftab Ahmed</p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./appoinments_con.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">DOB</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">HEALTH</label>
                                        <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NUMBER</label>
                                        <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">MESSAGE</label>
                                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 3.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Aiden Walker</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <div class="team-social text-center">
                            <!-- <p class="text-dark">Anacondas and Other Reptiles
                                Reptile & Exotic Animal Clinic
                            </p> -->
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./appoinments_con.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">DOB</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">HEALTH</label>
                                        <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NUMBER</label>
                                        <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">MESSAGE</label>
                                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 4.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Olivia James</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark">Dogs, Cats, and Other Pets
                            Pets’ Hospital</p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./appoinments_con.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">DOB</label>
                            <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">HEALTH</label>
                            <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NUMBER</label>
                            <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">MESSAGE</label>
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- docter end -->

    <!-- Doctor 2 -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 5.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Ava Wilson</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark">Goldfish, Rabbits, and Turtles
                            Pet’s Care Veterinary Clinic
                            </p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./appoinments_con.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">DOB</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">HEALTH</label>
                                        <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NUMBER</label>
                                        <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">MESSAGE</label>
                                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 6.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Sophia Clark</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark">Tigers, Elephants, Monkeys, and Other Wildlife
                            The Wildlife Conservation Society (WCS) Pakistan</p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./appoinments_con.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">DOB</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">HEALTH</label>
                                        <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NUMBER</label>
                                        <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">MESSAGE</label>
                                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 7.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Isabella Martinez</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark">Parrots and Other Birds
                            Dr. Aftab Ahmed</p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./appoinments_con.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">DOB</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">HEALTH</label>
                                        <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NUMBER</label>
                                        <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">MESSAGE</label>
                                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 10.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Liam Scott</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark">Anacondas and Other Reptiles
                            Reptile & Exotic Animal Clinic</p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./appoinments_con.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">DOB</label>
                            <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">HEALTH</label>
                            <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NUMBER</label>
                            <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">MESSAGE</label>
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- docter end -->

    <!-- Doctor 3 -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 9.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Noah Lewis</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark">Dogs, Cats, and Other Pets
                            Pets’ Hospital</p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./appoinments_con.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">DOB</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">HEALTH</label>
                                        <input type="text" name="health" class="form-control" placeholder="Enter Health">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NUMBER</label>
                                        <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">MESSAGE</label>
                                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 8.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Elijah Davis</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark">Goldfish, Rabbits, and Turtles
                            Pet’s Care Veterinary Clinic</p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./appoinments_con.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">DOB</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">HEALTH</label>
                                        <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NUMBER</label>
                                        <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">MESSAGE</label>
                                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor 14.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. James Anderson</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark">Tigers, Elephants, Monkeys, and Other Wildlife
                            The Wildlife Conservation Society (WCS) Pakistan</p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./appoinments_con.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">DOB</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">HEALTH</label>
                                        <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NUMBER</label>
                                        <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">MESSAGE</label>
                                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/doctor_12-removebg-preview.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Emily Green</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href=""></a>Appoinment</button>
                            <!-- <p class="text-dark"> Parrots and Other Birds
                            Dr. Aftab Ahmed</p> -->
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./appoinments_con.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">DOB</label>
                            <input type="date" name="dob" class="form-control" placeholder="Enter Dob" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">HEALTH</label>
                            <input type="text" name="health" class="form-control" placeholder="Enter Health" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NUMBER</label>
                            <input type="text" name="number" class="form-control" placeholder="Enter Number" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">MESSAGE</label>
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- docter end -->




    <?php
    include('./user_footer.php');
    ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Typed js cdn -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>


</body>

</html>