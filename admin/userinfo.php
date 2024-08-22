<?php include_once('include/header.php') ?>
</br></br></br></br></br>
<div class="container mt-4">
  <div class="row">
    <!-- Profile Navigation -->
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
        
        <img src="<?= $baseurl ?>assets/users/<?= $result['data']->photo ?>" width="200px" alt="">
        <h4 class="mt-5"><?= $_SESSION['name'] ?> </h4>
        <p class="text-muted"><?= $_SESSION['email'] ?> </p>
        
          
        </div>

        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link bg-primary active" href="#"><i class="fa fa-user"></i> Profile</a>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-edit"></i> Edit Profile</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Profile Information -->
    <div class="col-md-9">
      <!-- Bio Graph -->
      <div style="width:500px" class="card mb-4">
        <div style="font-size:30px" class="card-header">
          Bio Graph
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6 mb-3">
            <?php 
            $con['id']=$_SESSION['id'];
            $result=$mysqli->common_select_single('authentication','*',$con);
            if($result){
                if($result['data']){
        ?>
              <span style="color:white" class="last_name">f</span>
              <p><strong>Name</strong>: <?= $result['data']->name ?> </p>
              <p><strong>Email</strong>: <?= $result['data']->email ?> </p>
              <p><strong>Contact</strong>: <?= $result['data']->contact ?> </p>
              <p><strong>User Name</strong>: <?= $result['data']->username ?> </p>
            </div>
            <?php  }} ?>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header">
          Address
        </div>
        <div class="card-body">
          <div class="row">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
<br/>
<?php include_once('include/footer.php')?>