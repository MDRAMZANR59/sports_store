<?php session_start(); ?>
<?php require_once('include/connection.php'); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
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
				<h3>PLEASE LOGIN TO APP</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
          <div class="panel-body">
            <form action="" method="post" id="loginForm">
              <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input type="text" placeholder="Kamal" title="Please enter you username" required=""name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" title="Please enter your password" placeholder="******" required="" name="password" id="password" class="form-control">
              </div>
              <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
              <a class="btn btn-default btn-block" href="register.php">Register</a>
            </form>
            <?php
              if($_POST){
                $_POST['password']=sha1($_POST['password']);
                $rs=$mysqli->common_select_single('authentication','*',$_POST);
                if($rs['data']){
                  $_SESSION['loggedin']=true;
                  $_SESSION['id']=$rs['data']->id;
                  $_SESSION['name']=$rs['data']->name;
                  $_SESSION['username']=$rs['data']->username;
                  $_SESSION['email']=$rs['data']->email;
                  echo "<script>window.location='{$baseurl}index.php'</script>";
                }else{
                  echo "Please check your user name and password again.";
                }
              }
            ?>
          </div>
        </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2024 ISDB WDFP R59.</p>
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