<?php
include('connection/conn.php');
$company_name = $_POST['company_name'];
$description = $_POST['description'];
$admin = $_POST['admin'];

$sql = "INSERT INTO company(company, des,admin)
        VALUES('$company_name','$description','$admin')";

$res = mysqli_query($con,$sql);

if($res)
{
    echo "Data has been successfully inserted";
}
 else {
    echo "Please try again";    
}
?>