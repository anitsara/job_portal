<?php
session_start();

?>
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
      <form class="form-signin" action="job-post.php" enctype="multipart/form-data" method="POST">
      <img class="mb-4" src="admin/img/logo.jpg" alt="" width="140" height="140">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <!--<div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>-->
      <input class="btn btn-lg btn-primary btn-block" name="submit" value="Sign In" type="submit">
      <a href="sign_up.php">Create an Account </a>
      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </form>
  </body>
</html>

<?php
include('connection/conn.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
   $sql = "SELECT * FROM jobskeer WHERE email = '$email' AND password = '$pass' ";

   $query = mysqli_query($con, $sql);
   
   if($query){
   
   if(mysqli_num_rows($query)>0){
       
       $_SESSION['email']=$email;
       header('location:index.php');
   }
 else 
 {
       echo "<script>alert('Email or password incorrect, Please try again');</script>";
       
   }
}
}
?>