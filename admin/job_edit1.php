<?php
include('connection/conn.php');
 include('include/header.php');
  include('include/sidebar.php');
  $id = $_GET['edit'];
  $sql = "SELECT * FROM all_jobs WHERE job_id = '$id'";
  $query = mysqli_query($con,$sql);
  while ($row = mysqli_fetch_array($query)){
      
      $job_title = $row['job_title'];
      $des = $row['des'];
      $country = $row['country'];
      $state = $row['state'];
      $city = $row['city'];
      $keyword = $row['keyword'];
      $category = $row['category'];
      $company=$row['company_name'];
      $cust  = $row['customer_email'];
      
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="job_create1.php">All Job</a></li>
            <li class="breadcrumb-item"><a href="#">Update Job</a></li>
        </ol>
       </nav>   
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Update Job</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
                  <!--<a class="btn btn-primary" href="add_customer.php">Add Customers</a>
            --></div>
          </div>
            
            <div style="width: 60%; margin-left:20%; background-color:#F2F4F4; ">
                
                <form action="" method="POST" style="margin: 3%; padding: 3%;" name="customer_form" id="customer_form">
                
                <div id="msg"></div>
                
                
                
                    <div class="form-group">
                    <label for="job_title">Job Title</label>
                    <input type="text" name="job_title" id="job_title" class="form-control"
                           placeholder="Enter Job Title" required value="<?php echo $job_title; ?>">
                    </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description"  id="description" class="form-control" required cols="30" rows="10"><?php echo $des; ?></textarea>   
                </div>
                
                <div class="form-group">
                    <label for="keyword">Enter Keyword</label>
                    <input type="text" class="form-control" required name="keyword" id="keyword" value="<?php echo $keyword; ?>">
                </div>
                
                <div class="form-group">
                    <label for="country">Country</label>
                    <select name="country" class="countries form-control" value="<?php echo $country; ?>" id="countryId" required>
                    <option value="">Select Country</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="state">State</label>
                    <select name="state" class="states form-control" id="stateId" value="<?php echo $state; ?>" required>
                    <option value="">Select State</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <select name="city" class="cities form-control" value="<?php echo $city; ?>" id="cityId" required>
                    <option value="">Select City</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="category">Select Category</label>
                    <select name="category" class="form-control" id="category" required>
                    
                        <option value="<?php
                        $cat = $row['category'];
                        echo $cat;
                         ?>"><?php
                    $sql = "SELECT category FROM job_category WHERE id='$cat'";
                    $query = mysqli_query($con,$sql);
                    while($row= mysqli_fetch_array($query)){
                    echo $row['category'];  }?></option> 
                      <?php
                    $sql = "SELECT id,category FROM job_category WHERE id!='$cat'";
                    $query = mysqli_query($con,$sql);
                    while($row= mysqli_fetch_array($query)){
                      ?>
                        <option value="<?php
                    echo $row['id'];?>"><?php
                    echo $row['category']; ?></option>
                        <?php } ?>
                    </select>
                </div> 
                
                <div class="form-group">
                    <label for="comp_name">Select Company</label>
                    <select name="comp_name" class="form-control" id="comp_name" required>
                    
                        <option value="<?php
                    
                        echo $comany;
                         ?>"><?php
                    $sql = "SELECT company FROM company WHERE company = '$company' AND admin='$cust'";
                    $query = mysqli_query($con,$sql);
                    while($row= mysqli_fetch_array($query)){
                    echo $row['company'];  }?></option> 
                      <?php
                    $sql = "SELECT company FROM company WHERE admin='$cust' AND company!='$company'";
                    $query = mysqli_query($con,$sql);
                    while($row= mysqli_fetch_array($query)){
                      ?>
                        <option value="<?php
                    echo $row['company'];?>"><?php
                    echo $row['company']; ?></option>
                        <?php } ?>
                    </select>
                </div> 
                
                <?php
                    }?>
                
                <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>">
                <div class="form-group">
                  
                    <input type="submit" class="btn btn-block btn-success" value="Update" name="submit" id="submit">
                </div>
            </form>
                

            </div>
            
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
          <div class="table-responsive">
            
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
   <!--datatables plugin -->
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
   
   <script>
       $(document).ready(function() {
    $('#example').DataTable();
} );
   </script>
   
  </body>
</html>

<?php

include('connection/conn.php');
if(isset($_POST['submit'])){

   $id = $_POST['id'];
   $job_title = $_POST['job_title'];
   $des = $_POST['description'];
   $country = $_POST['country'];
   $state = $_POST['state'];
   $city = $_POST['city'];
   $keyword = $_POST['keyword'];
   $category = $_POST['category'];
   $company = $_POST['comp_name'];
   
$query1=mysqli_query($con,"UPDATE all_jobs SET  job_title ='$job_title', des='$des', country='$country', state='$state', city='$city', keyword='$keyword', category = '$category',company_name='$company' WHERE job_id = '$id'");
if($query1){
    echo "<script> alert('Record has been updated successfully'); </script>";
}
else {
    echo "<script>alert('Please try again');</script>";
}
}
?>