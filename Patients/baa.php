<?php
session_start(); 
?>
<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Free NGO Resonsive Website Tempalte | Smarteyeapps.com</title>
        <link rel="shortcut icon" href="../assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="shortcut icon" href="../assets/images/fav.jpg">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../assets/plugins/testimonial/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/plugins/testimonial/css/owl.theme.min.css">
        <link rel="stylesheet" href="../assets/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    
    
    <style>
        /********** Template CSS **********/
:root {
    --primary: #13C5DD;
    --secondary: #354F8E;
    --light: #EFF5F9;
    --dark: #1D2A4D;
}

.btn {
    font-weight: 700;
    transition: .5s;
}

.btn:hover {
    -webkit-box-shadow: 0 8px 6px -6px #555555;
    -moz-box-shadow: 0 8px 6px -6px #555555;
    box-shadow: 0 8px 6px -6px #555555;
}

.btn-primary {
    color: #FFFFFF;
}

.btn-square {
    width: 36px;
    height: 36px;
}

.btn-sm-square {
    width: 28px;
    height: 28px;
}

.btn-lg-square {
    width: 46px;
    height: 46px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding-left: 0;
    padding-right: 0;
    text-align: center;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 30px;
    bottom: 0;
    border-radius: 50% 50% 0 0;
    z-index: 99;
}

.navbar-light .navbar-nav .nav-link {
    font-family: 'Jost', sans-serif;
    position: relative;
    margin-left: 30px;
    padding: 30px 0;
    font-size: 18px;
    font-weight: 700;
    color: var(--dark);
    outline: none;
    transition: .5s;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link.active {
    color: var(--primary);
}

@media (min-width: 992px) {
    .navbar-light .navbar-nav .nav-link::before {
        position: absolute;
        content: "";
        width: 0;
        height: 5px;
        bottom: 0;
        left: 50%;
        background: var(--primary);
        transition: .5s;
    }

    .navbar-light .navbar-nav .nav-link:hover::before,
    .navbar-light .navbar-nav .nav-link.active::before {
        width: 100%;
        left: 0;
    }
}

@media (max-width: 991.98px) {
    .navbar-light .navbar-nav .nav-link  {
        margin-left: 0;
        padding: 10px 0;
    }
}

.hero-header {
    background: url(../img/hero.jpg) top right no-repeat;
    background-size: cover;
}

.service-item {
    position: relative;
    height: 350px;
    padding: 0 30px;
    transition: .5s;
}

.service-item .service-icon {
    width: 150px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--primary);
    border-radius: 50%;
    transform: rotate(-14deg);
}

.service-item .service-icon i {
    transform: rotate(15deg);
}

.service-item a.btn {
    position: absolute;
    width: 60px;
    bottom: -48px;
    left: 50%;
    margin-left: -30px;
    opacity: 0;
}

.service-item:hover a.btn {
    bottom: -24px;
    opacity: 1;
}

.price-carousel::after {
    position: absolute;
    content: "";
    width: 100%;
    height: 50%;
    bottom: 0;
    left: 0;
    background: var(--primary);
    border-radius: 8px 8px 50% 50%;
    z-index: -1;
}

.price-carousel .owl-nav {
    margin-top: 35px;
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
}

.price-carousel .owl-nav .owl-prev,
.price-carousel .owl-nav .owl-next{
    position: relative;
    margin: 0 5px;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    background: #FFFFFF;
    font-size: 22px;
    border-radius: 45px;
    transition: .5s;
}

.price-carousel .owl-nav .owl-prev:hover,
.price-carousel .owl-nav .owl-next:hover {
    color: var(--dark);
}

@media (min-width: 576px) {
    .team-item .row {
        height: 350px;
    }
}

.team-carousel .owl-nav {
    position: absolute;
    padding: 0 45px;
    width: 100%;
    height: 45px;
    top: calc(50% - 22.5px);
    left: 0;
    display: flex;
    justify-content: space-between;
}

.team-carousel .owl-nav .owl-prev,
.team-carousel .owl-nav .owl-next {
    position: relative;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    background: var(--primary);
    border-radius: 45px;
    font-size: 22px;
    transition: .5s;
}

.team-carousel .owl-nav .owl-prev:hover,
.team-carousel .owl-nav .owl-next:hover {
    background: var(--dark);
}

.testimonial-carousel .owl-dots {
    margin-top: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.testimonial-carousel .owl-dot {
    position: relative;
    display: inline-block;
    margin: 0 5px;
    width: 20px;
    height: 20px;
    background: var(--light);
    border: 2px solid var(--primary);
    border-radius: 20px;
    transition: .5s;
}

.testimonial-carousel .owl-dot.active {
    width: 40px;
    height: 40px;
    background: var(--primary);
}

.testimonial-carousel .owl-item img {
    width: 150px;
    height: 150px;
}
body{
  background-color: #e6e6e6;
  width: 100%;
  height: 100%;
}
 #success_tic .page-body{
  max-width:300px;
  background-color:#FFFFFF;
  margin:10% auto;
}
 #success_tic .page-body .head{
  text-align:center;
}
/* #success_tic .tic{
  font-size:186px;
} */
#success_tic .close{
      opacity: 1;
    position: absolute;
    right: 0px;
    font-size: 30px;
    padding: 3px 15px;
  margin-bottom: 10px;
}
#success_tic .checkmark-circle {
  width: 150px;
  height: 150px;
  position: relative;
  display: inline-block;
  vertical-align: top;
}
.checkmark-circle .background {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: red;
  position: absolute;
}
#success_tic .checkmark-circle .checkmark {
  border-radius: 5px;
}
#success_tic .checkmark-circle .checkmark.draw:after {
  -webkit-animation-delay: 300ms;
  -moz-animation-delay: 300ms;
  animation-delay: 300ms;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-name: checkmark;
  -moz-animation-name: checkmark;
  animation-name: checkmark;
  -webkit-transform: scaleX(-1) rotate(135deg);
  -moz-transform: scaleX(-1) rotate(135deg);
  -ms-transform: scaleX(-1) rotate(135deg);
  -o-transform: scaleX(-1) rotate(135deg);
  transform: scaleX(-1) rotate(135deg);
  -webkit-animation-fill-mode: forwards;
  -moz-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
#success_tic .checkmark-circle .checkmark:after {
  opacity: 1;
  height: 75px;
  width: 37.5px;
  -webkit-transform-origin: left top;
  -moz-transform-origin: left top;
  -ms-transform-origin: left top;
  -o-transform-origin: left top;
  transform-origin: left top;
  border-right: 15px solid #fff;
  border-top: 15px solid #fff;
  border-radius: 2.5px !important;
  content: '';
  left: 35px;
  top: 80px;
  position: absolute;
}

@-webkit-keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}
@-moz-keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}
@keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}


    </style>
    
    
    <script>function trigger(){
    document.getElementById('btn').click()
    }
    </script>
    
    
    </head>

  
<body>
        <div class="dummy"></div>
        <header id="menu-jk" class="header-container">
            <div class="container">
                <div class="header-row row">
                    <div class="col-md-3 logocol">
                        <img src="../logo.jpg" alt="">
                         <a class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                     <i class="fas fa-bars"></i>
                            </a>
                    </div>
                    <div id="navbarNavDropdown" class="col-md-9 d-none d-md-block navcol">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="aboutus.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contactus.html">Contact Us</a></li>
                      <!--      <li>-->
                      <!--<a href="login-form-17/index.html" > <button type="button" class="btn btn-outline-primary" style="border-radius:20px;">Login/SignUp</button></a>-->
                      <!--  </li>-->
                          <li><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:50%;background-color:#00B0F0;border:none;">
    <i class="fa fa-user"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="patient_profile.php">Profile</a>
    <a class="dropdown-item" href="#">Appointments</a>
   <form method=post action=../index.php><button name=btn1 type=submit style="border:none;background-color:white">&emsp;&nbsp;&nbsp;Sign Out</button></form>
  </div>
</div></li>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Please</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Confirm, you are a doctor or patient?
      </div>
      <div class="modal-footer">
        <a href=login-form-11/doctor_login.php><button type="button" class="btn btn-warning" >Doctor</button></a>
       <a href=login-form-11/patient_login.php> <button type="button" class="btn btn-primary">Patient</button></a>
      <a href=login-form-11/admin_login.php> <button type="button" class="btn btn-danger">Admin</button></a>
      </div>
    </div>
  </div>
</div>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
   
    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointment</h5>
                        <h1 class="display-4">Make An Appointment For Your Family</h1>
                    </div>
                    <p class="mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="../aboutus.html">Find Doctor</a>
                    <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Read More</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-white border-0" style="height: 55px;">
                                        <option selected>Choose Department</option>
                                        <option value="1">Department 1</option>
                                        <option value="2">Department 2</option>
                                        <option value="3">Department 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-white border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        <option value="1">Doctor 1</option>
                                        <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Make An Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

        
     <!--  ************************* Footer Start Here ************************** -->
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h2>About Us</h2>
                        <p>
                            Smart Eye is a leading provider of information technology, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                        </p>
                        <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2>Useful Links</h2>
                        <ul class="list-unstyled link-list">
                            <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                            <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                            <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                            <li><a ui-sref="gallery" href="#/gallery">Pricing</a><i class="fa fa-angle-right"></i></li>
                            <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12 map-img">
                        <h2>Contact Us</h2>
                        <address class="md-margin-bottom-40">
                            BlueDart Hosting <br>
                            765th Boulevard, <br>
                            Rochester, CA <br>
                            Phone: +1 831 143 556 <br>
                            Email: <a href="mailto:info@bluedart.com" class="">info@bluedart.in</a><br>
                            Web: <a href="https://smarteyeapps.com/" class="">www.bluedart.in</a>
                        </address>
                    </div>
                </div>
            </div>
            
        </footer>
        <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/">2019 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps</a>
                
                <span>
                    <a><i class="fab fa-github"></i></a>
                    <a><i class="fab fa-google-plus-g"></i></a>
                    <a><i class="fab fa-pinterest-p"></i></a>
                    <a><i class="fab fa-twitter"></i></a>
                    <a><i class="fab fa-facebook-f"></i></a>
                </span>
            </div>
        </div>
        
        
     
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>