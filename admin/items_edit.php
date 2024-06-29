<?php include('include/header.php') ; ?>

<div class="container-fluid">
    <h4 class="page-header"><small>Items/</small> Add New</h4>
    <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('items','*',$con);
        if($result){
            if($result['data']){
                $olddata=$result['data'];
            }
        }
    ?>
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Items</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="fullname">Items Name</label>
                            <input type="text" name="product_name" class="form-control" id="fullname" value="<?= $olddata->product_name ?>" />
                            <label for="details">Details </label>
                            <textarea name="details" class="form-control" id="details"><?= $olddata->details ?></textarea>
                            <label for="img">Photo </label>
                            <input type="file" name="photo" class="form-control" id="img" value="<?= $olddata->photo ?>" />
                            <label for="price">Price </label>
                            <input type="number" name="price" class="form-control" id="price" value="<?= $olddata->price ?>" />
                            <label for="catagoryId">Catagory Id </label>
                            <select class="form-control form-select" name="catagory_id">
                                    <option value="">Select Catagory</option>
                                    <?php 
                                        $result=$mysqli->common_select('catagory');
                                        if($result){
                                            if($result['data']){
                                                $i=1;
                                                foreach($result['data'] as $d){
                                    ?>
                                        <option value="<?= $d->id ?>" <?= $d->id==$olddata->catagory_id ? "selected":"" ?> > <?= $d-> name ?></option>
                                    <?php } } } ?>
                                </select>
                            <label for="companyName">Company Name </label>
                            <input type="text" name="company_name" class="form-control" id="companyName" value="<?= $olddata->company_name ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            if($_FILES){
                                $img=$_FILES["photo"];
                                $imagename=time().rand(1111,9999).".jpg";
                                $rs=move_uploaded_file($img['tmp_name'],'assets/items/'.$imagename);
                                if($rs){
                                    $_POST['photo']=$imagename;
                                }
                            }
                            $_POST['updated_at']=date('Y-m-d H:i:s');
                            $_POST['updated_by']=1;
                            $rs=$mysqli->common_update('items',$_POST,$con);
                            if($rs){
                                if($rs['data'])
                                    echo "<script>window.location='{$baseurl}items_list.php'</script>";
                                else
                                    echo $rs['error'];
                                
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
