<?php
session_start();
error_reporting(0);
?>

                <?php
include('connection/conn.php');

   $user=$_SESSION['email'];
   $name=$_POST['name']; 
   $email=$_POST['myemail'];
   $subject=$_POST['subject'];
   $msg=$_POST['msg'];
   
if(empty($user)){
$query = mysqli_query($con,"INSERT INTO contact(user_email, name, email, subject, message) VALUES ('Nil','$name','$email','$subject','$msg')");
}
 else {
    $query = mysqli_query($con,"INSERT INTO contact(user_email, name, email, subject, message) VALUES ('$user','$name','$email','$subject','$msg')");
 }

 echo "<script>alert('Message send Successfully !!');</script>";

if($query)
{
   
    header('location:contact.php');
}
else{
    echo "<h1>Some Error please Try Again!!</h1>";
 }

        ?>
        
      