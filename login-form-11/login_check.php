<?php
session_start();
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "uday";
$conn = new mysqli($servername, $username, "$pass", $dbname);



 
// $sql1= "SELECT * from admin where username='".$_POST['admin_name']."' and pass='".$_POST['admin_pass']."'";
// $result1 = mysqli_query($conn,$sql1);      

// if(mysqli_num_rows($result1)>0){
// header("Location:admin_page.php");

//             while($rows=mysqli_fetch_assoc($result3)){
//             // echo $rows['username'];
//             // echo $rows['pass'];
                
//             }
// }



// ##################################################################################################################



 
// $sql2= "SELECT * from doctors where username='".$_POST['doctor_name']."' and pass='".$_POST['doctor_pass']."'";
// $result2 = mysqli_query($conn,$sql2);      

// if(mysqli_num_rows($result2)>0){
// header("Location:../Doctor_login_page.php");

//             while($rows=mysqli_fetch_assoc($result3)){
//             // echo $rows['username'];
//             // echo $rows['pass'];
                
//             }
// }




##################################################################################################################



 
$sql3= "SELECT * from patient where name='".$_POST['patient_name']."' and pass='".$_POST['patient_pass']."'";
$result3 = mysqli_query($conn,$sql3);      

if(mysqli_num_rows($result3)>0){
while($rows=mysqli_fetch_assoc($result3)){
$_SESSION['patient']=$rows['patient_id'];
$_SESSION['LOGIN']=1;
header("Location:../patient_login_page.php");
            }
}
// echo $sql1." ".$sql2." ".$sql3;
?>