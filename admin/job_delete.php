<?php
include('connection/conn.php');
$del = $_GET['del'];
$sql = "DELETE FROM all_jobs WHERE job_id = '$del'";

$res = mysqli_query($con, $sql);
if($res)
{
    echo "<script>alert('Record has been successfully deleted');</script>";
    header('location:job_create.php');
}
 else {
  echo "<script>alert('Something went wrong');</script>"; 
  header('location:job_create.php');
}
?>