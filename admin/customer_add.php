<?php
include('connection/conn.php');
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$atype = $_POST['atype'];

$sql = "INSERT INTO admin_login(admin_email,admin_pass,admin_username,first_name,last_name,admin_type)
        VALUES('$email','$pass','$user','$fname','$lname','$atype')";

$res = mysqli_query($con,$sql);


if($res)
{
    echo "Data has been successfully inserted";
}
 else {
    echo "Please try again";    
}
?>