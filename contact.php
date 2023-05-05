<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>

<?php

if(isset($_POST['submit'])){
  // if(empty($_POST['fname']) OR empty($_POST['lname']) OR empty($_POST['email']) OR empty($_POST['subject']) OR empty($_POST['message'])){
  //   echo "<script>alert('some inputs are empty')</script>";
  // } else {
// Get form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject=$_POST['subject'];
$message = $_POST['message'];

$name = $fname." ".$lname;

// Set email parameters
$to = "sempo.code@gmail.com"; // Your email address

$headers = "From: $name <$email>"; // Email sender

// Send email
mail($to, $subject, $message, $headers);

}
//}
?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Contact Us</h1>
            <div class="custom-breadcrumbs">
              <a href="<?php echo APPURL;?>">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Contact Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
          <form action="contact.php" method="POST" class="">

            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">First Name</label>
                <input name="fname" type="text" id="fname" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Last Name</label>
                <input name="lname" type="text" id="lname" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="email">Email</label> 
                <input name="email" type="email" id="email" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label> 
                <input name="subject"type="subject" id="subject" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">Message</label> 
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input name="submit" type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
              </div>
            </div>
            </form>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Busia, Busitema along Busia - Tororo Highway</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+256 726 183 010</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">jobifyuganda@gmail.com</a></p>

            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php require "includes/footer.php"; ?>