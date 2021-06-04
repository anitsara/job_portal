<?php

  include('include/my_profile.php');
  include('connection/conn.php');
  $query=mysqli_query($con,"SELECT * FROM profile WHERE user_email='{$_SESSION['email']}'");
  while($row=mysqli_fetch_array($query)){
      $img = $row['img'];
      $name = $row['name'];
      $dob = $row['dob'];
      $number = $row['number'];
      $email = $row['email'];
      
  }
?>
<br>
<div style="margin-left: 25%; width:50%; color:black; border:1px solid gray; padding:10px;">
    <form action="profile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data">
        
       <div class="row">
        
            <div class="col-md-6">
                <img src="profile_img/<?php if(!empty($img)){ echo $img; } else { echo 'pro.png'; } ?>" class="img-thumbnail" alt="Cinque Terre" height="50%" width="50%">
                <br><br>
                <input type="file" class="form-control" name="image" id="image" style="width:700px" required>
            </div>
            
            
       </div>
        

       
        <br>
        
        <div class="row">
            <div class="col-md-6">
                <td>Enter Your Name:</td>
            </div>
            <div class="col-md-6">
                <td><input type="text" value="<?php if(!empty($name)) echo $name; ?>" name="name" id="name" placeholder="Enter Your Name..." class="form-group" size="24" required></td>     
            </div>
            
              
        </div>
            
        <div class="row">
            <div class="col-md-6">
                <td>Enter Your DOB: </td>
            </div>
            <div class="col-md-6">
                <td><input type="date" name="dob" value="<?php if(!empty($dob)) echo $dob; ?>" id="dob" placeholder="Enter Your dob..." class="form-group" style="width:219px" required></td>  
            </div>
              
        </div>
            
        <div class="row">
            <div class="col-md-6">
                <td>Enter Your Mobile Number: </td>
            </div>
            <div class="col-md-6">
                <td><input type="phone" name="mob" value="<?php if(!empty($number)) echo $number; ?>" id="mob" placeholder="Enter Your Mobile Number..." class="form-group" size="24" maxlength="10" required></td>  
            </div>
            
        </div>
            
         <div class="row">
            <div class="col-md-6">
                <td>Enter Your Email: </td>
            </div>
            <div class="col-md-6">
                <td><input type="email" name="email" value="<?php if(!empty($email)) echo $email; ?>" id="email" placeholder="Enter Your Email..." class="form-group" size="24" required></td>  
            </div>
              
        </div>
            <div class="form-group">
                <input type="submit" id="submit" value="Update" name="submit" class="btn btn-success">
            </div>
            
       
    </form>
</div>

<br>
		
	
<?php
  include('include/footer.php')
?>
<!--<script>
    
    $(document).ready(function(){
       $("#submit").click(function(){
            var data = $("#profile_form").serialize();
            
            
             $.ajax({
                  type:"POST",
                  url:"profile_add.php",
                  data:data,
                  success:function(data){
                   alert(data);   
              }
              });
       }) 
    });
    </script>-->