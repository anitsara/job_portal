<?php
include('connection/conn.php');
$category = $_POST['category'];
$description = $_POST['description'];


$sql = "INSERT INTO job_category(category, des)
        VALUES('$category','$description')";

$res = mysqli_query($con,$sql);

if($res)
{
    echo "Data has been successfully inserted";
}
 else {
    echo "Please try again";    
}
?>