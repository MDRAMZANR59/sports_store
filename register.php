<?php include_once('include/header.php') ?>
	<div class="error-pagewrap mt-3">
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
                <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Register</button>
                </div>
                  
                  
              </form>
            <?php
              if($_POST){
                $_POST['password']=sha1($_POST['password']);
                $_POST['created_at']=date('Y-m-d H:i:s');
                $rs=$mysqli->common_create('customer',$_POST);
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
		</div>   
  </div>
  <?php include_once('include/footer.php')?>