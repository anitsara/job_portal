<?php
session_start();
session_unset();


include('connection/conn.php');

$query = mysqli_query($con, "SELECT * FROM admin_login WHERE admin_email ='{$_SESSION['email']}'");
if($query)
{
    header("location:http://localhost/JobPortal");
}
 else 
 {
     header('location:index.php');
 }
?>