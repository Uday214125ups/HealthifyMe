<!doctype html>
<html lang="en">
  <head>
  	<title>Patient Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				<strong><h2 >Patient Login</h2></strong>	
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
		      			<input type="text"  name=patient_name class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password"  name=patient_pass  class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <center>OR<br>Sign in with google</center>
	            <div class="w-100">
								<p class="social-media d-flex" >
										<center>	<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span id="login" class="fa fa-google" style="font-size:50px;"></span></a>
										</center>
									</p>
								</div>
	            <div class="form-group d-md-flex">
	            	
								<div class="w-50">
									<a href="#">Forgot Password?</a>
								</div>
								
							
	            </div>
	            
    Don't have an account? &emsp;<a href="patient_signup.php">SignUp</a>
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
  
  
    <script type="module">
      // Import the functions you need from the SDKs you need
      import { initializeApp } from "https://www.gstatic.com/firebasejs/10.5.2/firebase-app.js";
      import {
        getAuth,
        GoogleAuthProvider,
        signInWithRedirect,
        getRedirectResult,
        signInWithPopup,
        signOut,
      } from "https://www.gstatic.com/firebasejs/10.5.2/firebase-auth.js";

      // TODO: Add SDKs for Firebase products that you want to use
      // https://firebase.google.com/docs/web/setup#available-libraries

      // Your web app's Firebase configuration
      const firebaseConfig = {
        apiKey: "AIzaSyDzQBwGRP8gIFfSH61KmufhBN1kSVukRuI",
        authDomain: "hospitalum-efd99.firebaseapp.com",
        projectId: "hospitalum-efd99",
        storageBucket: "hospitalum-efd99.appspot.com",
        messagingSenderId: "7827598175",
        appId: "1:7827598175:web:e6a4096a60a0ded13964ea",
      };

      // Initialize Firebase
      const app = initializeApp(firebaseConfig);
      const auth = getAuth(app);
      const provider = new GoogleAuthProvider(app);

      login.addEventListener("click", (e) => {
        // signInWithRedirect(auth, provider);

        signInWithPopup(auth, provider)
          .then((result) => {
            // This gives you a Google Access Token. You can use it to access the Google API.
            const credential = GoogleAuthProvider.credentialFromResult(result);
            const token = credential.accessToken;
            // The signed-in user info.
            const user = result.user;
            // IdP data available using getAdditionalUserInfo(result)
            // ...

            window.location.href = "../Patients/patient_profile_edit.php";
          })
          .catch((error) => {
            // Handle Errors here.
            const errorCode = error.code;
            const errorMessage = error.message;
            // The email of the user's account used.
            const email = error.customData.email;
            // The AuthCredential type that was used.
            const credential = GoogleAuthProvider.credentialFromError(error);
            // ...

            alert(errorMessage);
          });
      });

      login.addEventListener("click", (e) => {
        signOut(auth)
          .then(() => {
            // Sign-out successful.
          })
          .catch((error) => {
            // An error happened.
          });
      });
    </script>

	</body>
</html>

