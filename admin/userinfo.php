<?php include_once('include/header.php') ?>

<div class="container mt-4">
  <div class="row">
    <!-- Profile Navigation -->
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <?php 
            $result=$mysqli->common_select_single('customer','*',);
              if($result){
                if($result['data']){
          ?>
            <img class="img-fluid rounded-circle" alt="Profile Picture" src="<?= $baseurl ?>admin/assets/customer_photos/<?= $result['data']->photo ?>" width="100px">
          <?php  }} ?>
          <?php if(isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin']){ ?>
          <h4 class="mt-3"><?= $_SESSION['user_data']->first_name ?> <?= $_SESSION['user_data']->last_name ?> </h4>
          <p class="text-muted"><?= $_SESSION['user_data']->email ?></p>
          <?php }else{ ?>
            <?php } ?>
        </div>

        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#"><i class="fa fa-user"></i> Profile</a>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-edit"></i> Edit Profile</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Profile Information -->
    <div class="col-md-9">
      <!-- Bio Graph -->
      <div class="card mb-4">
        <div class="card-header">
          Bio Graph
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6 mb-3">
            <?php if(isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin']){ ?>
              <span style="color:white" class="last_name"><?= $_SESSION['user_data']->last_name ?></span>
              <p><strong>First Name</strong>: <?= $_SESSION['user_data']->first_name ?> </p>
              <p><strong>Last Name</strong>: <?= $_SESSION['user_data']->last_name ?></p>
              <p><strong>Company Name</strong>: <?= $_SESSION['user_data']->company_name ?></p>
              <p><strong>Phone</strong>: +880 <?= $_SESSION['user_data']->phone ?></p>
              <p><strong>Address <br/> </strong><?= $_SESSION['user_data']->post ?>, <?= $_SESSION['user_data']->state ?>, <?= $_SESSION['user_data']->address ?></p>
            </div>
              <?php }else{ ?>
              <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
<br/>
<?php include_once('include/footer.php')?>