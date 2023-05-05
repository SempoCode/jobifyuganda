<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>

<?php


//getting the count of workers 
$companies = $conn->query("SELECT COUNT(*) as company_num FROM users WHERE  type = 'Company'");
$companies->execute();
$company = $companies->fetch(PDO::FETCH_OBJ);


//getting the count of workers 
$filledJobs = $conn->query("SELECT COUNT(*) as applications FROM job_applications");
$filledJobs->execute();
$filledJob = $filledJobs->fetch(PDO::FETCH_OBJ); 


//getting the count of workers 
  $workers = $conn->query("SELECT COUNT(*) as candidates FROM users WHERE  type = 'Worker'");
  $workers->execute();
  $worker = $workers->fetch(PDO::FETCH_OBJ);


  //getting the count of related jobs 
  $job_count = $conn->query("SELECT COUNT(*) as job_count FROM jobs");
  $job_count->execute();
  $job_num = $job_count->fetch(PDO::FETCH_OBJ);

?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">About Us</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>About Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next-section" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">Jobify Uganda Site Stats</h2>
          </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?php echo $worker->candidates; ?>">0</strong>
            </div>
            <span class="caption">Candidates</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?php echo $job_num->job_count; ?>">0</strong>
            </div>
            <span class="caption">Jobs Posted</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?php echo $filledJob->applications; ?>">0</strong>
            </div>
            <span class="caption">Jobs Filled</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="<?php echo $company->company_num; ?>">0</strong>
            </div>
            <span class="caption">Companies</span>
          </div>

            
        </div>
      </div>
    </section>

    
    <section class="site-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="videos/companies1.mp4"></iframe>
            </div>
          
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Jobify Uganda for Companies</h2>
            <p class="lead">Companies can post Jobs. When these Jobs get verified, Job seekers can see them and apply</p>
            <p class="lead">Then companies recieve The applications from which they can view applicants' profiles and also download their CVs. </p>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
            
          </div>
          <div class="col-md-6 ml-auto align-self-end">
            
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
            
          </div>
          <div class="col-md-6 ml-auto align-self-end">
            
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
          <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="videos/workers1.mp4"></iframe>
            </div>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">Jobify For Workers</h2>
            <p class="lead">Workers can search for the jobs in the different regions of the country which are either full or part time jobs</p>
            <p>Then they can view details of a job, save the or apply for it. They other jobs related to the one searched</p>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-12 align-self-center text-center mb-5 mb-md-0"data-aos="fade">
          <h2 class="section-title mb-3">OUR TEAM</h2>
          <h2 class="section-title mb-3 text-white">We are the Tech Warriors Ltd</h3>
          
          </div>
          <div class="col-md-6 ml-auto align-self-end">
            
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row align-items-center block__69944">
          <div class="col-md-6">
            <img src="images/paul5.png" alt="Image" class="img-fluid mb-4 rounded">
          </div>

          <div class="col-md-6">
            <h3>Ssempebwa Paul</h3>
            <p class="text-muted">BCT Student (2021-2024)</p>
            <p>Study Computer Engineering is one of the best decisions I have ever made. It is empowering me with capability to solve various challennges in my community. I can recommend anyone to take up a course in the field of technology.</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>

          <div class="col-md-6 order-md-2 ml-md-auto">
            <img src="images/sali1.png" alt="Image" class="img-fluid mb-4 rounded">
          </div>

          <div class="col-md-6">
            <h3>Ssali Lawrence</h3>
            <p class="text-muted">BCT Student (2021-2024)</p>
            <p>At Busitema we are nurtured to think critically toward problem solving. This makes me proud of this institution. I really want to go out there and impact the workd as I represent the good work this institution does.</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div> 
      </div>
    </section>


    <section class="site-section">
      <div class="container">


        <div class="row align-items-center block__69944">

                  <div class="col-md-6">
            <img src="images/sali1.png" alt="Image" class="img-fluid mb-4 rounded">
          </div>

          <div class="col-md-6">
            <h3> Tiondi Gilbert</h3>
            <p class="text-muted">BCT Student (2021-2024)</p>
            <p>I am a student at Busitema University pirsuing my Bachelors of Science in Computer Engineering. It is in my goal to cause a change in the fast advancing world of technology.</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
      </div>
    </section>
    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
            
          </div>
          <div class="col-md-6 ml-auto align-self-end">
            
          </div>
        </div>
      </div>
    </section>

    <?php require "includes/footer.php"; ?>