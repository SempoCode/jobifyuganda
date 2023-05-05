<?php require "../layouts/header.php"; ?>           
<?php require "../../config/config.php"; ?>

<?php

if(!isset($_SESSION['adminname'])) {

    header("location: ".ADMINURL."/admins/login-admins.php");

  }


$select = $conn->query("SELECT * FROM users WHERE type='Worker'");
$select->execute();

$allWorkers = $select->fetchAll(PDO::FETCH_OBJ);

?>




<section class="site-section" id="home-section">
    <div class="container">
        <div class="row">
            <?php foreach($allWorkers as $worker) : ?>
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                    <a target="_blank" href="profile.php?id=<?php echo $worker->id; ?>"><img class="card-img-top" style="200px"src="../../users/user-images/<?php echo $worker->img; ?>" alt="<?php echo $worker->img; ?>"></a>
                        <div class="card-body">
                            <a target="_blank" href="profile.php?id=<?php echo $worker->id; ?>"><h5 class="card-title"><?php echo $worker->username; ?></h5></a>
                            <p class="card-text"><?php echo substr($worker->bio, 0, 50); ?></p>
                            <a target="_blank" href="profile.php?id=<?php echo $worker->id; ?>" class="btn btn-primary">Go to profile</a>
                            <a href="<?php echo ADMINURL; ?>/clients/delete-worker.php?id=<?php echo $worker->id; ?>" class="btn btn-danger  text-center ">delete</a>
                        </div>
                    </div><br>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php require "../layouts/footer.php"; ?>

