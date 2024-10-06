<?php
session_start();
$servername = "localhost";
$username = "id20054265_udaypratapsingh";
$pass = "@Uday214125";
$dbname = "id20054265_uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);


$p_name=$_POST['p_name'];

$p_username=$_POST['p_username'];
$pass=$_POST['password'];
$p_age=$_POST['p_age'];
$p_address=$_POST['p_address'];
$p_state=$_POST['p_state'];
$p_pincode=$_POST['p_pincode'];
$p_dob=$_POST['p_dob'];
$p_email=$_POST['p_email'];
$p_mobile=$_POST['p_mobile'];

 
$sql1="insert into patients(name,username,pass,address,email,mobile,dob) values('$p_name','$p_username','$pass','$p_address $p_state - $p_pincode','$p_email',$p_mobile,'$p_dob')";
$result1 = mysqli_query($conn,$sql1);      

echo mysqli_error($conn);

?>