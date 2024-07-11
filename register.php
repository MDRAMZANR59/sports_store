<?php include_once('include/header.php') ?>
	<div class="error-pagewrap mt-3">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
          <h3>PLEASE REGISTER TO APP</h3>
        </div>
        <div class="content-error" style="margin:auto; width:50% ">
          <div class="hpanel">
            <div class="panel-body">
              <form method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
									<label for="ship_country" class="text-black">Country <span class="text-danger">*</span></label>
									<select id="ship_country" name="country" class="form-control">
										<option value="0">Select a country</option>    
										<option value="2">bangladesh</option>    
										<option value="3">Algeria</option>    
										<option value="4">Afghanistan</option>    
										<option value="5">Ghana</option>    
										<option value="6">Albania</option>    
										<option value="7">Bahrain</option>    
										<option value="8">Colombia</option>    
										<option value="9">Dominican Republic</option>    
									</select>
								</div>
                <div class="form-group">
                    <label for="first_name" class="col-md-4" >First Name<span class="text-danger">*</span></label>
                    <input required="" type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" />
                </div>
                <div class="form-group">
                    <label for="last_name" >Last Name<span class="text-danger">*</span></label>
                    <input required="" type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" />
                </div>
                <label for="img">Photo </label>
                    <input type="file" name="photo" class="form-control" id="img" placeholder="" />
                <div class="form-group">
                    <label for="password" >Password<span class="text-danger">*</span></label>
                    <input required="" type="password" name="password" class="form-control" id="password" placeholder="Password" />
                </div>
                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name" />
                </div>
                <div class="form-group">
                    <label for="address" >Address<span class="text-danger">*</span></label>
                    <input required="" type="text" name="address" class="form-control" id="address" placeholder="address" />
                </div>
                <div class="form-group">
                    <label for="state" >State<span class="text-danger">*</span></label>
                    <input required="" type="text" name="state" class="form-control" id="state" placeholder="state" />
                </div>
                <div class="form-group">
                    <label for="post" >Post<span class="text-danger">*</span></label>
                    <input required="" type="text" name="post" class="form-control" id="post" placeholder="Post" />
                </div>
                <div class="form-group">
                    <label for="email" >Email<span class="text-danger">*</span></label>
                    <input required="" type="email" name="email" class="form-control" id="email" placeholder="Email" />
                </div>
                <div class="form-group">
                    <label for="phone">Phone<span class="text-danger">*</span></label>
                    <input required="" type="number" name="phone" class="form-control" id="phone" placeholder="Phone" />
                </div>
                <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Register</button>
                </div>
                  
                  
              </form>
            <?php
            
            if($_POST){
                if($_FILES){
                    $img=$_FILES["photo"];
                    $imagename=time().rand(1111,9999).".jpg";
                    $rs=move_uploaded_file($img['tmp_name'],'admin/assets/customer_photos/'.$imagename);
                    if($rs){
                        $_POST['photo']=$imagename;
                    }
                }
                
            }
       
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