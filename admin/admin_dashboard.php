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
            

        </ol>
       </nav>   
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">All Jobs</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
                 
            </div>
          </div>
            
           <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#SL</th>
                
                <th>Job Title</th>
                
                
                <th>Job Seeker Name</th>
                <th>Job Seeker Email</th>
                <th>Job Status</th>
                <!--<th>Resume</th>-->
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
  include('connection/conn.php');
  
  $a=1;
  $sql = "SELECT * FROM job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id WHERE customer_email='{$_SESSION['email']}' AND status!='Rejected'";
  $query = mysqli_query($con, $sql);
  while($row = mysqli_fetch_array($query))
  {
          ?>
        <form action="" method="GET">
            <tr>
                <td><?php echo $a; ?></td>
                
                <td><?php echo $row['job_title']; ?></td>
                
                <td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                <td><?php echo $row['job_seeker']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <!--<td><a href="http://localhost/JobPortal/files/<?php echo $row['file']; ?>">Download File </a></td>
                -->
                
                <td>
                    <div class="row">
                        <div class="btn-group">
                            <a href="view_applied_jobs.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-eye-open" style="font-size:10px;"></span></a>
                            <!--<a href="job_delete.php?del=<?php echo $row['job_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" style="font-size:10px;"></span></a>-->
                        </div>
                    </div>
                </td>
            </tr>
            </form>
  <?php $a++; } ?>
     
        </tbody>
        <tfoot>
            <tr>
                <th>#SL</th>
                
                <th>Job Title</th>
                
                
                <th>Job Seeker Name</th>
                <th>Job Seeker Email</th>
                <th>Job Status</th>
                <!--<th>Resume</th>-->
                
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

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
