<?php include_once('include/header.php') ?>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div style="margin:auto; width:50%; margin-top:50px;">
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
                <label class="control-label" for="username">Email</label>
                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required=""name="email" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" title="Please enter your password" placeholder="******" required="" name="password" id="password" class="form-control">
              </div>
              <div class="form-group mt-3">
                <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
                <a class="btn btn-default btn-block" href="register.php">Register</a></br>
                <a style="text-decoration: none; font-size:20px; color:blue;" href="#">Forget Password ?</a>
              </div>
            </form>
            <?php
              if($_POST){
                $_POST['password']=sha1($_POST['password']);
                $rs=$mysqli->common_select_single('customer','*',$_POST);
               
                if($rs['data']){
                  $_SESSION['user_loggedin']=true;
                  $_SESSION['user_email']=$rs['data']->email;
                  $_SESSION['user_data']=$rs['data'];
                  echo "<script>window.location='{$baseurl}index.php'</script>";
                }else{
                  echo "Please check your Email and Password again.";
                }
              }
            ?>
          </div>
        </div>
			</div>
		</div>   
  </div>
  </div>
    <!-- End Popular Product -->
<?php include_once('include/footer.php')?>