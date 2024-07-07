<?php require_once('include/connection.php'); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>PLEASE REGISTER TO APP</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
          <div class="panel-body">
            <form action="" method="post" id="loginForm">
              <div class="form-group">
                <label class="control-label" for="name">Name</label>
                <input type="text" placeholder="Full Name" title="Please enter you name" name="name" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label" for="email">Email</label>
                <input type="email" placeholder="example@gmail.com" title="Please enter you email" name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input type="text" placeholder="No space" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
              </div>
              <button class="btn btn-success btn-block loginbtn">Register</button>
              <a class="btn btn-default btn-block" href="login.php">Login</a>
            </form>
            <?php
              if($_POST){
                $crud=new crud();
                $_POST['password']=sha1($_POST['password']);
                $_POST['created_at']=date('Y-m-d H:i:s');
                $rs=$crud->common_create('authentication',$_POST);
                if($rs['data']){
                  echo "<script>window.location='{$baseurl}login.php'</script>";
                }else{
                  print_r($rs['error']);
                }
              }
            ?>
          </div>
        </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2024.</p>
			</div>
		</div>   
  </div>
    <!-- jquery
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= $baseurl ?>assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= $baseurl ?>assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/icheck/icheck.min.js"></script>
    <script src="<?= $baseurl ?>assets/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= $baseurl ?>assets/js/main.js"></script>
    
</body>

</html>