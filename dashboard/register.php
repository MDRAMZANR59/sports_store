<?php
  $baseurl="http://localhost/sports_store/dashboard/";
  include_once('class/crud.php');
  $mysqli=new crud();
?>
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
        <div class="content-error" style="margin:auto; width:50% ">
          <div class="hpanel">
          <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="country col-sm-4" required="">Country</label>
                            <input type="text" name="country" class="form-control col-sm-4" id="country" placeholder="Country" />
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="col-md-4" required="">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" />
                        </div>
                        <div class="form-group">
                            <label for="last_name" required="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" />
                        </div>
                        <div class="form-group">
                            <label for="password" required="">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name" />
                        </div>
                        <div class="form-group">
                            <label for="address" required="">Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="address" />
                        </div>
                        <div class="form-group">
                            <label for="state" required="">State</label>
                            <input type="text" name="state" class="form-control" id="state" placeholder="state" />
                        </div>
                        <div class="form-group">
                            <label for="post" required="">Post</label>
                            <input type="text" name="post" class="form-control" id="post" placeholder="Post" />
                        </div>
                        <div class="form-group">
                            <label for="email" required="">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone" />
                        </div>
                        <!-- <div class="form-group">
                            <label for="fullname">Notes</label>
                            <input type="text" name="notes" class="form-control" id="notes" placeholder="Notes" />
                        </div> -->
                        
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                    <?php
              if($_POST){
                $crud=new crud();
                $_POST['password']=sha1($_POST['password']);
                $_POST['created_at']=date('Y-m-d H:i:s');
                $rs=$crud->common_create('customer',$_POST);
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