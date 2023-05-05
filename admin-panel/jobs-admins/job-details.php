<?php require "../layouts/header.php"; ?>           
<?php require "../../config/config.php"; ?>


<?php 

if(!isset($_SESSION['adminname'])) {

    header("location: ".ADMINURL."/admins/login-admins.php");

  }
    
  if(isset($_GET['id'])) {

    $id = $_GET['id'];

    //getting single job info
    $select = $conn->query("SELECT * FROM jobs WHERE id = '$id'");
    $select->execute();

    $row = $select->fetch(PDO::FETCH_OBJ);

   
    //getting related jobs
   $related_jobs = $conn->query("SELECT * FROM jobs WHERE job_category = '$row->job_category' AND status = 1 AND id != '$id'");
   $related_jobs->execute();

   $related_job = $related_jobs->fetchAll(PDO::FETCH_OBJ);



   //getting the count of related jobs 
   $job_count = $conn->query("SELECT COUNT(*) as job_count FROM jobs WHERE job_category = '$row->job_category' AND status = 1 AND id != '$id'");

   $job_count->execute();

   $job_num = $job_count->fetch(PDO::FETCH_OBJ);

   
    
   

 
  } else {
    header("location: ".APPURL."/404.php");
  }
  

  //getting categories 

   $categories = $conn->query("SELECT * FROM categories");
   $categories->execute();

   $allCategories = $categories->fetchAll(PDO::FETCH_OBJ);



?>
    

    <div class="d-flex justify-content-center">
        <section class="site-section">
        <div class="container">
            <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                
                <div class="d-flex align-items-center">
                    <h2><?php echo $row->job_title; ?></h2>                    
                </div>
                <div class="d-flex align-items-center">
                    <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"><strong>Posted By: </strong></span><?php echo $row->company_name; ?></span><br><br>
                </div>
                
            </div>
        
            <div class="row">
                <div class="col-lg-10">
                    <div class="mb-5">              
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
                        <p><?php echo $row->job_description; ?></p>
                    
                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $row->responsibilities; ?></span></li>
                        
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $row->education_experience; ?></span></li>
                        
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other Benifits</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $row->other_benifits; ?></span></li>
                            
                        </ul>
                    </div>

                    
                </div>
            <div class="col-lg-10">
                <div class="bg-light p-3 border rounded mb-4">
                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                    <ul class="list-unstyled pl-3 mb-0">
                        <li class="mb-2"><strong class="text-black">Published on:   </strong> <?php echo date('M', strtotime($row->created_at))  . ',' .  date('d', strtotime($row->created_at)) . ' ' . date('Y', strtotime($row->created_at)); ?></li>
                        <li class="mb-2"><strong class="text-black">Vacancy:        </strong> <?php echo $row->vacancy; ?></li>
                        <li class="mb-2"><strong class="text-black">Employment Status:</strong><?php echo $row->job_type; ?></li>
                        <li class="mb-2"><strong class="text-black">Experience:     </strong><?php echo $row->experience; ?></li>
                        <li class="mb-2"><strong class="text-black">Job Location:   </strong> <?php echo $row->job_region; ?></li>
                        <li class="mb-2"><strong class="text-black">Salary:         </strong><?php echo $row->salary; ?></li>
                        <li class="mb-2"><strong class="text-black">Gender:         </strong><?php echo $row->gender; ?></li>
                        <li class="mb-2"><strong class="text-black">Application Deadline:</strong> <?php echo date('M', strtotime($row->application_deadline))  . ',' .  date('d', strtotime($row->application_deadline)) . ' ' . date('Y', strtotime($row->application_deadline)); ?></li>
                        <li class="mb-2"><strong class="text-black">Job Category:   </strong> <?php echo ucfirst($row->job_category); ?></li>
                    </ul>
                </div>

            </div>         

            </div>
            </div>
        </div>
        </section>
    </div>


    

<?php require "../layouts/footer.php"; ?>