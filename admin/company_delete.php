<?php
include('connection/conn.php');
$del = $_GET['del'];
$sql = "DELETE FROM company WHERE company_id = '$del'";

$res = mysqli_query($con, $sql);
if($res)
{
    echo "<script>alert('Record has been successfully deleted');</script>";
    header('location:create_company.php');
}
 else {
  echo "<script>alert('Something went wrong');</script>"; 
  header('location:create_company.php');
}
?>