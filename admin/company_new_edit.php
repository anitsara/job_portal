<?php
include('connection/conn.php');
 include('include/header.php');
  include('include/sidebar.php');
  $id = $_GET['edit'];
  $sql = "SELECT * FROM company WHERE company_id = '$id'";
  $query = mysqli_query($con,$sql);
  while ($row = mysqli_fetch_array($query)){
      $company_name = $row['company'];
      $des = $row['des'];
      
  
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="job_company.php">Company</a></li>
            <li class="breadcrumb-item"><a href="#">Update Company</a></li>
        </ol>
       </nav>   
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Update Company</h1>
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
                    <label for="company_name">Company Name</label>
                    <input type="text" name="company_name" id="company_name" class="form-control" required
                           placeholder="Enter Company Name" value="<?php echo $company_name ?>">
                    </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="30" required rows="10"><?php echo $des ?></textarea>   
                </div>
                
                
                <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>">
                <div class="form-group">
                  
                    <input type="submit" class="btn btn-block btn-success" value="Update" name="submit" id="submit">
                </div>
            </form>
                <?php
                
  }
  ?>

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
   $company_name = $_POST['company_name'];
   $des = $_POST['description'];
   
$query1=mysqli_query($con,"UPDATE company SET company ='$company_name', des='$des' WHERE company_id = '$id'");
if($query1){
    echo "<script> alert('Record has been updated successfully'); </script>";
}
else {
    echo "<script>alert('Please try again');</script>";
}
}
?>