<?php
include('connection/conn.php');
 include('include/header.php');
  include('include/sidebar.php');
  ?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="apply_jobs.php">Apply Jobs</a></li>
            <li class="breadcrumb-item"><a href="#">Applied Jobs</a></li>
            
        </ol>
       </nav>   
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">All Jobs</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
                 
            </div>
          </div>
            
            <form action="" method="POST" style="border: 1px solid gray; width:80%; margin-left: 10%; padding: 10px;">
            <?php
            $id=$_GET['id'];
  include('connection/conn.php');
  
  
  $sql = "SELECT * FROM job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id WHERE id='$id'";
  
  $query = mysqli_query($con, $sql);
  while($row = mysqli_fetch_array($query))
  {
          ?>
            <div class="form-group">
            <label for="">Job Title:</label>
            <td><?php echo $row['job_title']; ?></td>
            </div>
            
            <div class="form-group">
            <label for="">Job Description:</label>
            <td> <?php echo $row['des']; ?></td>
            </div>
            
           <div class="form-group">
             <label for="">Job Seeker Name:</label>
           <td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
           </div>
            
           <div class="form-group"> 
           <label for="">Job Seeker Email:</label>
                <td><?php echo $row['job_seeker']; ?></td>
           </div>
             
                <div class="form-group"> 
           <label for="">Job Seeker Mobile Number:</label>
                <td><?php echo $row['mobile_number']; ?></td>
           </div>
                
            <div class="form-group">
            <label for="">Job Seeker File:</label>
               <td> <a href="http://localhost/JobPortal/files/<?php echo $row['file']; ?>">Download File </a></td>
            </div>
                
               
           
  <?php } ?>
        
               <input type="submit" class="btn btn-success" name="accept" id="accept" value="Accept">
               <input type="submit" class="btn btn-danger" name="reject" id="reject" value="Reject">
               <input type="submit" class="btn btn-primary" name="waiting" id="waiting" value="Waiting List">
               <?php
if(isset($_POST['accept']))
{
    $query=mysqli_query($con,"UPDATE job_apply SET status = 'Accepted' WHERE id='$id'");
    if($query)
    {
        echo 'Updated successfully';
    }
}
if(isset($_POST['reject']))
{
    $query=mysqli_query($con,"UPDATE job_apply SET status = 'Rejected' WHERE id='$id'");
    if($query)
    {
        echo 'Updated successfully';
       
    }
    
}
if(isset($_POST['waiting']))
{
    $query=mysqli_query($con,"UPDATE job_apply SET status = 'Waiting List' WHERE id='$id'");
    if($query)
    {
        echo 'Updated successfully';
    }
}
?>
               
        </form>
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
