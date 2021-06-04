<?php
$con = mysqli_connect("localhost","root","","job_portal");
$query = mysqli_query($con,"SELECT * FROM admin_login WHERE admin_email = '{$_SESSION['email']}' and admin_type='1'");
if(mysqli_num_rows($query)>0){
?>
    <div class="container-fluid">
      <div class="row">
         
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link active" href="admin_dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
             
             
              <li class="nav-item">
                <a class="nav-link"  href="customers.php">
                  <span data-feather="users"></span>
                  Customers 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="job_create.php">
                  <span data-feather="bar-chart-2"></span>
                  Job Create
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="create_company.php">
                  <span data-feather="layers"></span>
                  Company
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="apply_jobs.php">
                  <span data-feather="bar-chart-2"></span>
                  Apply Jobs
                </a>
              </li>
            </ul>

            
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="category.php">
                  <span data-feather="file-text"></span>
                  Category
                </a>
              </li>
              
              
            </ul>
          </div>
        </nav>
          
    <?php
}
else{
?>
           <div class="container-fluid">
      <div class="row">
         
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link active" href="admin_dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <!--<a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>-->
              </li>
              <li class="nav-item">
                <!--<a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>-->
              </li>
              <li class="nav-item">
                <!--<a class="nav-link"  href="customers.php">
                  <span data-feather="users"></span>
                  Customers 
                </a>-->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="job_create1.php">
                  <span data-feather="bar-chart-2"></span>
                  Job Create
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="job_company.php">
                  <span data-feather="bar-chart-2"></span>
                  My Company
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="apply_jobs.php">
                  <span data-feather="bar-chart-2"></span>
                  Apply Jobs
                </a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>-->

            
              <li class="nav-item">
                <!--<a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>-->
              </li>
              <li class="nav-item">
                <!--<a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>-->
              </li>
            </ul>
          </div>
        </nav>
<?php } ?>
