<?php include_once('include/header.php') ?>

<div class="container mt-4">
  <div class="row">
    <!-- Profile Navigation -->
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
        <a href="#">
            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid rounded-circle" alt="Profile Picture">
          </a>
          <h4 class="mt-3">Camila Smith</h4>
          <p class="text-muted">deydey@theEmail.com</p>
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
              <p><strong>First Name</strong>: Camila</p>
              <p><strong>Last Name</strong>: Smith</p>
              <p><strong>Company Name</strong>: 13 July 1983</p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header">
          Address
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6 mb-3">
            <div class="card-header">Bill Address</div>
              <p><strong>Country</strong>: </p>
              <p><strong>State</strong>: Smith</p>
              <p><strong>Address</strong>: Australia</p>
              <p><strong>Post</strong>: 13 July 1983</p>
              <p><strong>Email</strong>: UI Designer</p>
              <p><strong>Phone</strong>: 88 (02) 123456</p>
            </div>
            <div class="col-sm-6 mb-3">
            <div class="card-header">Ship Address</div>
            <p><strong>Country</strong>: </p>
              <p><strong>State</strong>: Smith</p>
              <p><strong>Address</strong>: Australia</p>
              <p><strong>Post</strong>: 13 July 1983</p>
              <p><strong>Email</strong>: UI Designer</p>
              <p><strong>Phone</strong>: 88 (02) 123456</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('include/footer.php')?>
