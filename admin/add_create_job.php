<?php 
 include('include/header.php');
  include('include/sidebar.php');
  include('connection/conn.php');

  
  ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="job_create.php">All Job List</a></li>
            <li class="breadcrumb-item"><a href="add_create_job.php">Add Job</a></li>
        </ol>
       </nav>   
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Add Job</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
                  <!--<a class="btn btn-primary" href="add_customer.php">Add Customers</a>
            --></div>
          </div>
            
            <div style="width: 60%; margin-left:20%; background-color:#F2F4F4; ">
                
                <form action="" method="POST" style="margin: 3%; padding: 3%;" name="job_form" id="job_form">
                <div id="msg"></div>
                 
                    <div class="form-group">
                    <label for="job_title">Job Title</label>
                    <input type="text" name="job_title" id="job_title" class="form-control"
                           placeholder="Enter Job Title" required>
                    </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" required cols="30" rows="10" required></textarea>   
                </div>
                
                <div class="form-group">
                    <label for="keyword">Enter Keyword</label>
                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Enter keyword" required>
                </div>
                
                <div class="form-group">
                    <label for="country">Country</label>
                    <select name="country" class="countries form-control" id="countryId" required>
                    <option value="">Select Country</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="state">State</label>
                    <select name="state" class="states form-control" id="stateId" required>
                    <option value="">Select State</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <select name="city" class="cities form-control" id="cityId" required>
                    <option value="">Select City</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="category">Select Category</label>
                    <select name="category" class="form-control" id="category" required>
                    <?php 
                    
                    $query= mysqli_query($con, "SELECT * FROM job_category");
                    while($row = mysqli_fetch_array($query)){
                        ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
                        <?php
                    }
                    ?>
                        
                    </select>
                </div> 
                
                <div class="form-group">
                    <label for="comp_name">Select Company Name</label>
                    <select name="comp_name" class="form-control" id="comp_name" required>
                     <?php
                        $query= mysqli_query($con, "SELECT * FROM company WHERE admin='{$_SESSION['email']}'");
                    while($row = mysqli_fetch_array($query))
                    {
                        ?>
                    <option value="<?php echo $row['company_id']; ?>"><?php echo $row['company']; ?></option>
                        <?php
                    }
                    ?>
                   
                    </select>
                    
                </div> 
                
                <div class="form-group">
                  
                    <input type="submit" class="btn btn-block btn-success" value="Submit" name="submit" id="submit">
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <script>
       $(document).ready(function() {
    $('#example').DataTable();
} );
   </script>
   <script>
    $(document).ready(function(){
       $("#submit").click(function(){
           var description = $("#description").val();
           var job_title = $("#job_title").val();
           var countryId = $("#countryId").val();
           var cityId = $("#cityId").val();
           var stateId = $("#stateId").val();
           var data = $("#job_form").serialize();
            
             $.ajax({
                  type:"POST",
                  url:"add_new_job.php",
                  data:data,
                  success:function(data){
                   alert(data);   
              }
              });
                
       }); 
    });
  </script>

  </body>
</html>
