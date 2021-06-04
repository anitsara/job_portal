<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=olB1KxjBftOx5VHkHzqKG9er-2yoHEsHKZYVBPwf_BWBZs_RB_SlhnvLM3ZsOoiZOaFvf-cd_jbHPmmEP7y1mvSs9Rc9i_zxaO_dY0kUzx4" charset="UTF-8"></script></head>

  <body class="text-center">
      <form class="form-signin" action="sign_up.php" id="sign_up" method="POST" name="sign_up">
      <img class="mb-4" src="admin/img/logo.jpg" alt="" width="140" height="140">
      <h1 class="h3 mb-3 font-weight-normal">Please Sign Up</h1>
      <label for="email" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
      
      <label for="pass" class="sr-only">Password</label>
      <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
      
      <label for="fname" class="sr-only">First Name</label>
      <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Your First Name" required autofocus>
      
      <label for="lname" class="sr-only">Last Name</label>
      <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter Your Last Name" required autofocus>
      
      <label for="phno" class="sr-only">Mobile Number</label>
      <input type="text" maxlength="10" id="phno" class="form-control" name="phno" placeholder="Enter Your Mobile Number" size="10" required autofocus>
      
      <label for="dob" class="sr-only">Date Of Birth</label>
      <input type="date" id="dob" class="form-control" name="dob" placeholder="Enter Your Date Of Birth" required autofocus>
      
      
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Sign Up">
      <a href="job-post.php">Already have an account</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </form>
  </body>
</html>
<?php
include('connection/conn.php');
if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $dob = $_POST['dob'];
  $phno = $_POST['phno'];
  
  
  $query = mysqli_query($con,"INSERT INTO jobskeer(email,password,first_name,last_name,dob,mobile_number)
          VALUES('$email','$pass','$fname','$lname','$dob','$phno')");
  if($query)
  {
       echo "<script>alert('Now You can Login!')</script>";
       header('location:job-post.php');
  }
  else
  {
      echo "<script>alert('Some Error Please Try Again')</script>";
      
  }
}
?>