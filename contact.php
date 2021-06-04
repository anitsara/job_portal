<?php

  include('include/contact.php');
    include('connection/conn.php');
?>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span>203 ABC, XYZ, PQRSTU</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://5552342411">+91 5552342411</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:jobportal@gmail.com">jobportal@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="http://localhost/JobPortal/">JobPortal.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="contact_add.php" method="POST" class="bg-white p-5 contact-form">
              <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                  <input type="email" class="form-control" name="myemail" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea  id="" cols="30" rows="7" name="msg" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" id="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>

            </form>

          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
 
<?php
  include('include/footer.php')
?>
