<?php
session_start();
include('connection/conn.php');
$login = $_SESSION['email'];
$job_title = $_POST['job_title'];
$description = $_POST['description'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$category = $_POST['category'];
$keyword = $_POST['keyword'];
$company = $_POST['comp_name'];

$sql = "INSERT INTO all_jobs(customer_email,job_title,des,country,state,city,keyword,category,company_name)
        VALUES('$login','$job_title','$description','$country','$state','$city','$keyword','$category','$company')";

$res = mysqli_query($con,$sql);

if($res)
{
    echo "Data has been successfully inserted";
}
 else {
    echo "Please try again";    
}
?>