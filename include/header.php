<?php
session_start();
include('connection/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JobPortal - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">JobPortal</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	           <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
	          
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>&nbsp;
	          <?php
                  if(isset($_SESSION['email'])==true){?>
                  <li class="nav-item cta mr-md-2"><a href="#" class="nav-link"><?php echo $_SESSION['email'];  ?></a></li>
                  
                  &nbsp;
                  <li class="nav-item">   
                 
                  <div class="dropdown">
                   
                      <img src="profile_img/<?php $sql = mysqli_query($con,"SELECT img FROM profile WHERE user_email = '{$_SESSION['email']}'"); while($row = mysqli_fetch_array($sql))
                        {   
                          $img = $row['img'];
                        }
                         if(!empty($img)){ echo $img; } else { echo 'pro.png'; }
                      
                      
                        ?>" class="img-circle dropdown-toggle" type="button" data-toggle="dropdown" alt="Cinque Terre" width="50" height="50">&nbsp;&nbsp;
                      <ul class="dropdown-menu">
                          <li><a href="my_profile.php">My Profile</a></li>
                          <li><a href="my_jobs.php">My Jobs</a></li>
                          <li><a href="logout.php">Logout</a></li>
                      </ul>
                  </div>
                  </li>
                      <?php } else { ?>
                  &nbsp;
                  <li class="nav-item cta cta-colored"><a href="job-post.php" class="nav-link">Want a Job</a></li>
                  
                  &nbsp;<li class="nav-item cta mr-md"><a href="new-post.php" class="nav-link">Post a Job</a></li>
                  <?php 
                     } 
                  ?>
	          


	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About</h1>
          </div>
        </div>
      </div>
    </div>