<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>

<?php
//getting the count of companies 
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



  $select = $conn->query("SELECT * FROM jobs  WHERE status = 1 ORDER BY created_at DESC LIMIT 5");

  $select->execute();

  $jobs = $select->fetchAll(PDO::FETCH_OBJ);


  $searches = $conn->query("SELECT COUNT(keyword) AS count, keyword FROM searches
   GROUP BY keyword ORDER BY count DESC LIMIT 4");

  $searches->execute();

  $allSearches = $searches->fetchAll(PDO::FETCH_OBJ);

  //getting companies worked with
  $select_company = $conn->query("SELECT * FROM users  WHERE type = 'Company' ORDER BY created_at DESC LIMIT 5");

  $select_company->execute();

  $Companies = $select_company->fetchAll(PDO::FETCH_OBJ);


?>
    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h2 class="text-white font-weight-bold">Find a Job</h2>
              </div>
            <form method="post" action="search.php" class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input name="job-title" type="text" class="form-control form-control-lg" placeholder="Job title">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name="job-region" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                  <option>Anywhere</option>
                      <option>Kampala</option>
                      <option>Entebbe</option>
                      <option>Wakiso</option>
                      <option>Masaka</option>
                      <option>Mbale</option>
                      <option>Jinja</option>
                      <option>Gulu</option>
                      <option>Mbarara</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name="job-type" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                    <option>Part Time</option>
                    <option>Full Time</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 popular-keywords">
                  <h3>Trending Keywords:</h3>
                  <ul class="keywords list-unstyled m-0 p-0">
                    <?php foreach($allSearches as $search) : ?>
                      <li><a href="#" class=""><?php echo $search->keyword; ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

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

    

    <section class="site-section">
      <div class="container">

       
        
        <ul class="job-listings mb-5">
          <?php foreach($jobs as $job) : ?>
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
              <a href="jobs/job-single.php?id=<?php echo $job->id; ?>"></a>
              <div class="job-listing-logo">
                <img src="users/user-images/<?php echo $job->company_image; ?>" alt="<?php echo $job->company_image; ?>" class="img-fluid">
              </div>

              <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                  <h2><?php echo $job->job_title; ?></h2>
                  <strong><?php echo $job->company_name; ?></strong>
                </div>
                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                  <span class="icon-room"></span> <?php echo $job->job_region; ?>
                </div>
                <div class="job-listing-meta">
                <span class="badge badge-<?php if($job->job_type == 'Part Time') { echo 'danger'; } else { echo 'success'; } ?>"><?php echo $job->job_type; ?></span>
                </div>
              </div>
              
            </li>
            <br>
          <?php endforeach; ?>
        

          

          
        </ul>

     

      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">This is the right platform where many have got their dream Jobs in big Companies</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="<?php echo APPURL; ?>/auth/register.php" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section py-4">
      <div class="container">
  
        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Company We've Helped</h2>
                <p class="lead">These are some of the companies we have helped to get Workers</p>
              </div>
            </div>
            
          </div>
          <?php foreach($Companies as $company) : ?>{
            <div class="col-6 col-lg-3 col-md-6 text-center">
              <img src="users/user-images/<?php echo $company->img; ?>" alt="Image" class="img-fluid logo-1">
            </div>
          }
          <?php endforeach ?>
        </div>
      </div>
    </section>


    <section class="bg-light pt-5 testimony-full">
        
        <div class="owl-carousel single-carousel">

        
          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;The bigggest chellenge today is not the availability of jobs, it is the accessibility to these jobs. Join us as we bridge the gap.&rdquo;                 
                    <p><cite> &mdash; Ssempebwa Pual, @Jobifyuganda</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/paul3.png" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;Since Change is inevitable, the only way to make sense out of it is to plunge into it, move with it, and join the dance.&rdquo;</p>
                  <p><cite> &mdash; Ssali Lawrence Mugerwa, @Jobifyuganda</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/sali.png" alt="Image" class="img-fluid mb-0">
              </div>
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