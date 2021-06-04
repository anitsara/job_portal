<?php
include('connection/conn.php');
$del = $_GET['del'];
$sql = "DELETE FROM admin_login WHERE id = '$del'";

$res = mysqli_query($con, $sql);
if($res)
{
    echo "<script>alert('Record has been successfully deleted');</script>";
    header('location:customers.php');
}
 else {
  echo "<script>alert('Something went wrong');</script>"; 
  header('location:customers.php');
}
?>