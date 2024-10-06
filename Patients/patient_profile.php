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

  <body>
    
        
    
        <div class="dummy"></div>
        <header id="menu-jk" class="header-container">
            <div class="container">
                <div class="header-row row" >
                    <div class="col-md-3 logocol" >
                        <a href="../index_login.php"><img src="../logo.jpg" alt=""></a>
                         <a class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                     <i class="fas fa-bars"></i>
                            </a>
                    </div>
                    <div id="navbarNavDropdown" class="col-md-9 d-none d-md-block navcol">
                        <ul>
                            <li><a href="../patient_login_page.php">Home</a></li>
                            <li><a href="../aboutus.html">About Us</a></li>
                            <li><a href="../services.html">Services</a></li>
                            <li><a href="../blog.html">Blog</a></li>
                            <li><a href="../contactus.html">Contact Us</a></li>
                    <li><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:50%;background-color:#00B0F0;border:none;">
    <i class="fa fa-user"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="patient/patient_profile.php">Profile</a>
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
        
        
      
     
        <section style="background-color: #eee;">
  <div class="container py-5">
    

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
          <i class="fas fa-user fa-3x"></i>
            <h5 class="my-3"><?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo ucfirst($rows['name']);
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?></h5>
            <p class="text-muted mb-1">Health Status - <span class="text-primary font-italic me-1" style="color:green;"><?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['health_status'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?><span></span></p>
            <p class="text-muted mb-4">Mathura, UP - 281006</p>
            <div class="d-flex justify-content-center mb-2">
            <!-- <a href=baa.php>  <button type="button" class="btn btn-primary">Personalised health Checkup</button></a> -->
              <button type="button" class="btn btn-outline-primary ms-1">Health Checkup</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                &nbsp;&nbsp;<i class="fas fa-male fa-lg text-warning"></i>
                <p class="mb-0">&nbsp;&nbsp;&nbsp;&emsp;Height - <?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['height'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-user-circle fa-lg" style="color: #333333;"></i>
                <p class="mb-0">&nbsp;&nbsp;&emsp;Weight - <?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);

// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['weight'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-user-secret fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">&nbsp;&nbsp;&emsp;BMI - <?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);




// // Execute the Python script from the same directory
// $output = [];
// $return_var = 0;

// // Use the full path to Python executable
// $python_path = "C:\\Users\\uday2\\AppData\\Local\\Programs\\Python\\Python310\\python.exe";
// exec("$python_path bmi.py 2>&1", $output, $return_var);

// if ($return_var === 0) {
//     echo implode("\n", $output);
// } else {
//     echo "Error executing Python script:\n";
//     echo implode("\n", $output);
//     echo "\nReturn value: $return_var";
// }
// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            $height= $rows['height'];
            $weight= $rows['weight'];
            $BMI=round(($weight/($height/100 * $height/100)),2);
            echo $BMI;
            
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-user-plus fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">&nbsp;&nbsp;&nbsp;Status - <span class="text-primary font-italic me-1"><?php
                
                if($BMI<16)echo "Severe Thinness";
                if($BMI>=16 && $BMI<17)echo "Moderate Thinness";
                
                if($BMI>=17 && $BMI<18.5)echo "Mild Thinness";
                if($BMI>=18.5 && $BMI<25)echo "Normal";
                if($BMI>=25 && $BMI<30)echo "Overweight";
                if($BMI>=30 && $BMI<35)echo "Obese Class I";
                if($BMI>=35 && $BMI<40)echo "Obese Class II";
                if($BMI>40)echo "Obese Class III";
                
                
                
                
                ?></span></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT name from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['name'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['email'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo "+91 ".$rows['phone'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Birth</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['dob'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['address'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?></p>
              </div>

             
            </div>
            
            <hr>
            <a href="patient_profile_edit.php"> <button type="button" class="btn btn-outline-primary ms-1">Edit Details</button></a>
             
            <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Report</span> Health Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Heart Health</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: <?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['heart_health'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?>%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Blood Pressure</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: <?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['bp'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?>%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Cholestrol</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: <?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['cholestrol'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?>%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Diabetes</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width:  <?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['diabetes'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?>%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Bone health</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width:  <?php

$servername = "localhost";
$username = "id20872459_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20872459_uday";
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


// if(isset($_SESSION['patient']))echo $_SESSION['patient'];
// else echo "uday";
 
$sql1= "SELECT * from patient where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      

        if(mysqli_num_rows($result1)>0){

            while($rows=mysqli_fetch_assoc($result1)){
            echo $rows['bone_health'];
            // echo $sql1;
            // echo $rows['pass'];
                
            }
}

?>%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">History</span> Health checkup
                </p>
                No record Found
                <!--<p class="mb-1" style="font-size: .77rem;">Web Design</p>-->
                <!--<div class="progress rounded" style="height: 5px;">-->
                <!--  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"-->
                <!--    aria-valuemin="0" aria-valuemax="100"></div>-->
                <!--</div>-->
                <!--<p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>-->
                <!--<div class="progress rounded" style="height: 5px;">-->
                <!--  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"-->
                <!--    aria-valuemin="0" aria-valuemax="100"></div>-->
                <!--</div>-->
                <!--<p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>-->
                <!--<div class="progress rounded" style="height: 5px;">-->
                <!--  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"-->
                <!--    aria-valuemin="0" aria-valuemax="100"></div>-->
                <!--</div>-->
                <!--<p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>-->
                <!--<div class="progress rounded" style="height: 5px;">-->
                <!--  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"-->
                <!--    aria-valuemin="0" aria-valuemax="100"></div>-->
                <!--</div>-->
                <!--<p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>-->
                <!--<div class="progress rounded mb-2" style="height: 5px;">-->
                <!--  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"-->
                <!--    aria-valuemin="0" aria-valuemax="100"></div>-->
                <!--</div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </body>
</html>