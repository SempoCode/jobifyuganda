<?php require "../layouts/header.php"; ?>           
<?php require "../../config/config.php"; ?>

<?php
  if(!isset($_SESSION['adminname'])) {

    header("location: ".ADMINURL."/admins/login-admins.php");

  }

$select = $conn->query("SELECT * FROM users WHERE type='Company'");
$select->execute();

$allCompanies = $select->fetchAll(PDO::FETCH_OBJ);

?>


<section class="site-section" id="home-section">
    <div class="container">
        <div class="row">
            <?php foreach($allCompanies as $company) : ?>
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                    <a target="_blank" href="profile.php?id=<?php echo $company->id; ?>"><img class="card-img-top" style="200px"src="../../users/user-images/<?php echo $company->img; ?>" alt="<?php echo $company->username; ?>"></a>
                        <div class="card-body">
                            <a target="_blank" href="profile.php?id=<?php echo $company->id; ?>"><h5 class="card-title"><?php echo $company->username; ?></h5></a>
                            <p class="card-text"><?php echo substr($company->bio, 0, 50); ?></p>
                            <a target="_blank" href="profile.php?id=<?php echo $company->id; ?>" class="btn btn-primary">Go to profile</a>
                            <a href="<?php echo ADMINURL; ?>/clients/delete-company.php?id=<?php echo $worker->id; ?>" class="btn btn-danger  text-center ">delete</a>
                        </div>
                    </div><br>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php require "../layouts/footer.php"; ?>

