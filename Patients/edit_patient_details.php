<?php
session_start();
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
 
if(isset($_POST['name'])){
$sql1= "update patient set name ='".$_POST['name']."' where patient_id='".$_SESSION['patient']."'";
$result1 = mysqli_query($conn,$sql1);      
}

if(isset($_POST['phone'])){
    $sql1= "update patient set phone ='".$_POST['phone']."' where patient_id='".$_SESSION['patient']."'";
    $result1 = mysqli_query($conn,$sql1);      
    }


    if(isset($_POST['dob'])){
        $sql1= "update patient set dob ='".$_POST['dob']."' where patient_id='".$_SESSION['patient']."'";
        $result1 = mysqli_query($conn,$sql1);      
        }

        if(isset($_POST['address'])){
            $sql1= "update patient set address ='".$_POST['address']."' where patient_id='".$_SESSION['patient']."'";
            $result1 = mysqli_query($conn,$sql1);      
            }
    
            
                header("Location:patient_profile.php");


          
     
?>