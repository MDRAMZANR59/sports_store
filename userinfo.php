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
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-calendar"></i> Recent Activity <span class="badge bg-warning float-end">9</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-edit"></i> Edit Profile</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Profile Information -->
    <div class="col-md-9">
      <div class="card mb-4">
        <div class="card-body">
          <form>
            <textarea placeholder="What's on your mind today?" rows="2" class="form-control"></textarea>
          </form>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <button class="btn btn-warning">Post</button>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-map-marker"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-camera"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-film"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-microphone"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Bio Graph -->
      <div class="card mb-4">
        <div class="card-header">
          Bio Graph
        </div>
        <div class="card-body">
          <div class="card-title">
            Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac magna metus.
          </div>
          <div class="row">
            <div class="col-sm-6 mb-3">
              <p><strong>First Name</strong>: Camila</p>
              <p><strong>Last Name</strong>: Smith</p>
              <p><strong>Country</strong>: Australia</p>
              <p><strong>Birthday</strong>: 13 July 1983</p>
              <p><strong>Occupation</strong>: UI Designer</p>
              <p><strong>Email</strong>: jsmith@flatlab.com</p>
              <p><strong>Mobile</strong>: (12) 03 4567890</p>
              <p><strong>Phone</strong>: 88 (02) 123456</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Projects -->
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="35" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 100px; height: 100px;">
              </div>
              <div class="text-center mt-3">
                <h5 class="text-danger">Envato Website</h5>
                <p>Started: 15 July</p>
                <p>Deadline: 15 August</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="63" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 100px; height: 100px;">
              </div>
              <div class="text-center mt-3">
                <h5 class="text-info">ThemeForest CMS</h5>
                <p>Started: 15 July</p>
                <p>Deadline: 15 August</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="75" data-fgcolor="#96be4b" data-bgcolor="#e8e8e8" style="width: 100px; height: 100px;">
              </div>
              <div class="text-center mt-3">
                <h5 class="text-success">VectorLab Portfolio</h5>
                <p>Started: 15 July</p>
                <p>Deadline: 15 August</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="50" data-fgcolor="#cba4db" data-bgcolor="#e8e8e8" style="width: 100px; height: 100px;">
              </div>
              <div class="text-center mt-3">
                <h5 class="text-purple">Adobe Muse Template</h5>
                <p>Started: 15 July</p>
                <p>Deadline: 15 August</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('include/footer.php')?>