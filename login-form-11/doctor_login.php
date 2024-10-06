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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    
    
    
    
    <script>function trigger(){
    document.getElementById('btn').click()
    }
    </script>
    
    
    </head>

  
<?php
session_start();        
if(isset($_POST['btn1'])) {
   echo "<body onload=trigger()>";
  }
  else{
      echo "<body>";
  }
session_destroy();
?>
    
        
    
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
                        
                        <!-- Button trigger modal -->
<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Login/SignUP
</button></li>

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
        <a href=doctor_login.php><button type="button" class="btn btn-warning" >Doctor</button></a>
       <a href=patient_login.php> <button type="button" class="btn btn-primary">Patient</button></a>
      <a href=admin_login.php> <button type="button" class="btn btn-danger">Admin</button></a>
      </div>
    </div>
  </div>
</div>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
      
     
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 >Doctor Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
						<form action="login_check.php" method=post class="login-form">
		      		<div class="form-group">
		      			<input type="text" name=doctor_name class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password"  name=doctor_pass  class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <center>OR<br>Sign in with google</center>
	            <div class="w-100">
								<p class="social-media d-flex" >
										<center>	<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-google" style="font-size:50px;"></span></a>
										</center>
									</p>
								</div>
	            <div class="form-group d-md-flex">
	            	
								<div class="w-50">
									<a href="#">Forgot Password?</a>
								</div>
								
							
	            </div>
	            
    Don't have an account? &emsp;<a href="doctor_signup.html">SignUp</a>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

