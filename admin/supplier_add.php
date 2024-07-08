<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container-fluid">
    <h4 class="page-header"><small>supplier/</small> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">supplier Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="supplier">Full Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="supplier" placeholder="supplier" />
                        </div>
                        <label for="img">Photo </label>
                            <input type="file" name="photo" class="form-control" id="img" placeholder="" />
                       
                        <div class="form-group">
                            <label for="company_name">Company Name<span class="text-danger">*</span></label>
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
                            <input required="" type="number" name="contact" class="form-control" id="phone" placeholder="Phone" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                    if($_POST){
                        if($_FILES){
                            $img=$_FILES["photo"];
                            $imagename=time().rand(1111,9999).".jpg";
                            $rs=move_uploaded_file($img['tmp_name'],'assets/supplier/'.$imagename);
                            if($rs){
                                $_POST['photo']=$imagename;
                            }
                        }
                        
                    }
                        if($_POST){
                            $_POST['created_at']=date('Y-m-d H:i:s');
                            $_POST['created_by']=1;
                            $rs=$mysqli->common_create('supplier',$_POST);
                            if($rs){
                                if($rs['data']){
                                    echo "<script>window.location='{$baseurl}supplier_list.php'</script>";
                                }else{
                                    echo $rs['error'];
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<?php include('include/footer.php') ; ?>
