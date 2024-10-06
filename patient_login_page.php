<?php
session_start();    
?>
<!doctype html>
    <html lang="en">


    <head>
       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Free NGO Resonsive Website Tempalte | Smarteyeapps.com</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
       
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <style>
        
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
  background: #1ab394;
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

<?php
    
if($_SESSION['LOGIN']=1) {
   echo "<body onload=trigger()>";
  }
  else{
      echo "<body>";
  }

$_SESSION['LOGIN']=2;
?>
    
        <div class="dummy"></div>
        <header id="menu-jk" class="header-container">
            <div class="container">
                <div class="header-row row">
                    <div class="col-md-3 logocol">
                        <a href="index_login.php"><img src="logo.jpg" alt=""></a>
                         <a class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                     <i class="fas fa-bars"></i>
                            </a>
                    </div>
                    <div id="navbarNavDropdown" class="col-md-9 d-none d-md-block navcol">
                        <ul>
                            <li><a href="index_login.php">Home</a></li>
                            <li><a href="aboutus_login.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contactus.html">Contact Us</a></li>
                      <!--      <li>-->
                      <!--<a href="login-form-17/index.html" > <button type="button" class="btn btn-outline-primary" style="border-radius:20px;">Login/SignUp</button></a>-->
                      <!--  </li>-->
                        
                        <!-- Button trigger modal -->
<li><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:50%;background-color:#00B0F0;border:none;">
    <i class="fa fa-user"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="Patients/patient_profile.php">Profile</a>
    <a class="dropdown-item" href="#">Appointments</a>
   <form method=post action=index.php><button name=btn1 type=submit style="border:none;background-color:white">&emsp;&nbsp;&nbsp;Sign Out</button></form>
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
        <a href=login-form-11/doctor_login.html><button type="button" class="btn btn-warning" >Doctor</button></a>
       <a href=login-form-11/patient_login.html> <button type="button" class="btn btn-primary">Patient</button></a>
      <a href=login-form-11/admin_login.html> <button type="button" class="btn btn-danger">Admin</button></a>
      </div>
    </div>
  </div>
</div>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
        <!----- ################### Slider Starts Here #################### -->
        
        <div class="slider container-fluid">
            <br><br>
            <div class="container">
                

<!-- Modal -->
<div id="success_tic" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <a class="close" href="#" data-dismiss="modal">&times;</a>
      <div class="page-body">
    <div class="head">  
      <h3 style="margin-top:5px;">Login Successfully</h3>
      <h4>Welcome </h4><h4 style="color:red">
<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);

$sql3= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result3 = mysqli_query($conn,$sql3);      

if(mysqli_num_rows($result3)>0){
while($rows=mysqli_fetch_assoc($result3)){
echo ucfirst($rows['name']);
}
}

?></h4>
    </div>

  <h1 style="text-align:center;"><div class="checkmark-circle">
  <div class="background"></div>
  <div class="checkmark draw"></div>
</div><h1>

  </div>
</div>
    </div>

  </div>

               <div class="row slider-row">
                   <div class="col-md-7  animate__animated animate__fadeInLeft contentcol">
                        <h2>Professional & Highly Quality <br> Medical Services</h2><br>

                        <p style="text-align:left;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor ipsum dolor sit amet, consectetuer adipiscing elit.</p>
<a href="Patients/baa.php"> <button type="button" class="btn btn-outline-primary">Personalised Health Checkup</button></a>
<button type="button"  id="btn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#success_tic" style="display:none;">Open Modal</button>
                    </div>
                    <div class="col-md-5  animate__animated animate__fadeInRight imgcol">
                      <br><br>  <img src="assets/images/team/d3.jpg" alt="">
                    </div>
               </div>
            </div>
        </div>
        
        
        
         <!----- ################### Key Features Starts Here #################### -->
        
        <div class="key-feature-row row">
            <div class="col-md-3 c1 keycol">
               <img src="assets/images/icon/001.png" alt="">
                <h4>Dental Implants</h4>
                <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
            </div>
            <div class="col-md-3 c2 keycol">
                 <img src="assets/images/icon/002.png" alt="">
                <h4>Maxillofacial Surgery</h4>
                <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
            </div>
            <div class="col-md-3 c3 keycol">
                 <img src="assets/images/icon/003.png" alt="">
                <h4>Endodontics</h4>
                <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
            </div>
            <div class="col-md-3 c4 keycol">
                 <img src="assets/images/icon/004.png" alt="">
                <h4>Intervention Dentistry</h4>
                <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
            </div>
        </div>
        
         <!----- ################### About US Starts Here #################### -->
         
         <div class="about-home container-fluid">
             <div class="container">
                 <div class="row">
                     <div class="col-md-6 logocol">
                         <img src="assets/images/dental-team.jpg" alt="">
                     </div>
                     <div class="col-md-6 contentcol">
                         <h6>Changing Lives One Smile At a Time!</h6>
                         <h2>Welcome to DentalCare</h2>
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                         
                         <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo aliquet nec, vulputate eget.</p>
                     </div>
                 </div>
             </div>
         </div>
         
         
         <!--    Services Starts Here   -->
  
    <section class="services container-fluid">
        <div class="container">
            <div class="row section-title">
                <h2>Our Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper in magna quis tincidunt. Donec at nisi et eros blandit elementum fermentum eget augue</p>
            </div>
            <div class="servic-row row">
                <div class="servic-col col-md-4">
                    <div class="servcover">
                        <img src="assets/images/icon/001.png" alt="">
                        <h4>Dental Implants</h4>
                        <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                    </div>
                </div>
                <div class="servic-col col-md-4">
                    <div class="servcover">
                        <img src="assets/images/icon/002.png" alt="">
                        <h4>Maxillofacial Surgery</h4>
                        <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                    </div>
                </div>
                <div class="servic-col col-md-4">
                    <div class="servcover">
                        <img src="assets/images/icon/003.png" alt="">
                        <h4>Endodontics</h4>
                        <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                    </div>
                </div>
                <div class="servic-col col-md-4">
                    <div class="servcover">
                        <img src="assets/images/icon/004.png" alt="">
                        <h4>Intervention Dentistry</h4>
                        <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                    </div>
                </div>
                <div class="servic-col col-md-4">
                    <div class="servcover">
                        <img src="assets/images/icon/005.png" alt="">
                        <h4>Braces</h4>
                        <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                    </div>
                </div>
                <div class="servic-col col-md-4">
                    <div class="servcover">
                        <img src="assets/images/icon/006.png" alt="">
                        <h4>Teeth Whitening</h4>
                        <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
       
       <!--  ************************* Testimonial Start Here ************************** -->
       
    <section class="testimonial-container pb-5">
        <div class="container">
         <div class="section-title row">
            <h2>Testimonial</h2>
            <p>Take a look at what people say about us</p>
        </div>
        <div class="row mt-5">
            <div class="col-md-offset-2 float-auto col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="pic">
                            <img src="assets/images/testimonial/member-01.jpg" alt="">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <h3 class="title">williamson
                            <span class="post"> -  Developer</span>
                        </h3>
                    </div>

                    <div class="testimonial">
                        <div class="pic">
                            <img src="assets/images/testimonial/member-02.jpg" alt="">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <h3 class="title">Kristina
                            <span class="post"> - Teacher</span>
                        </h3>
                    </div>


                    <div class="testimonial">
                        <div class="pic">
                            <img src="assets/images/testimonial/member-03.jpg" alt="">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <h3 class="title">Kristina
                            <span class="post"> - Teacher</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
      
    
<!--  ************************* Latest Blog ************************** -->
       
       
 <div class="blog container-fluid">
            <div class="container">
                <div class="section-title row">
                    <h2>Our Latest Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat bibendum. Phasellus at convallis elit. In purus enim, scelerisque id arcu vitae</p>
                </div>
                <div class="row mt-5 blog-row">
                    <div class="col-md-4">
                        <div class="blogcol">
                            <img src="assets/images/blog/b1.jpg" alt="">
                            <span>Oct 12, 2019</span>
                            <h4>Journeys Are Best Measured In New Best Measured Friends</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blogcol">
                            <img src="assets/images/blog/b2.jpg" alt="">
                            <span>Oct 12, 2019</span>
                            <h4>Morbi sollicitudin nisi id consequat bibendum</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blogcol">
                            <img src="assets/images/blog/b3.jpg" alt="">
                            <span>Oct 12, 2019</span>
                            <h4>Journeys Are Best Measured In New Best Measured In  Friends</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
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