<!doctype html>
<html lang="en">
  <head>
  	<title>Patient SignUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				<strong><h2 class="heading-section" >Patient SignUp</h2></strong>	
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign UP</h3>
						<form action="add_patient.php"  method=post class="login-form">
						    <div class="form-group">
		      			<input type="text" name="p_name" class="form-control rounded-left" placeholder="Patient Name" required>
		      		</div>
		      			<div class="form-group">
		      			<input type="text" name="p_username" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	           <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            </div>
            <div class="alert alert-danger" id="passwordMismatch" style="display: none;">
                Passwords do not match.
            </div>
		      		<div class="form-group">
		      			<input type="number" class="form-control rounded-left" name="p_age" placeholder="Pateint Age" required>
		      		</div>
		      		<div class="form-group">
		      			<textarea class="form-control rounded-left"  name="p_address" placeholder="Address" required></textarea>
		      		</div>
		      		 <div class="form-group">
            <select class="form-control" name=state id="stateSelect">
                <option value="">Select State</option>
            </select>
        </div>
        <div class="form-group">
		      			<input type="number" class="form-control rounded-left"  name="p_pincode" placeholder="Pincode" required>
		      		</div>
		      	<div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control"  name="p_dob" id="dob" name="p_dob">
            </div>
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left"  name="p_email" placeholder="Email" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="number" class="form-control rounded-left"  name="p_mobile" placeholder="Mobile number" required>
		      		</div>
		      		
		      	
	            <div class="form-group">
	            	<button type="submit"  id="submitBtn" class="form-control btn btn-primary rounded submit px-3">SignUp</button>
	            </div>
	            <center>OR<br>Sign up with google</center>
	            <div class="w-100">
								<p class="social-media d-flex" >
										<center>	<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-google" style="font-size:50px;"></span></a>
										</center>
									</p>
								</div>
	           
	            
    Already have an account? &emsp;<a href="patient_login.php">Sign In</a> here
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
	 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
    
<script>
        $(document).ready(function() {
            $('#password, #confirmPassword').on('input', function() {
                var password = $('#password').val();
                var confirmPassword = $('#confirmPassword').val();

                if (password === confirmPassword) {
                    $('#passwordMismatch').hide();
                } else {
                    $('#passwordMismatch').show();
                }
            });
        });
    </script>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // JavaScript code to populate the state dropdown
        var states = [
            "Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar",
            "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi",
            "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand",
            "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya",
            "Mizoram", "Nagaland", "Odisha", "Puducherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu",
            "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal"
        ];

        var select = document.getElementById("stateSelect");

        states.forEach(function(state) {
            var option = document.createElement("option");
            option.value = state;
            option.text = state;
            select.appendChild(option);
        });
    </script>
	</body>
</html>

