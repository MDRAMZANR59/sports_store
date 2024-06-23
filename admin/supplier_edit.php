<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container">
    <h4 class="page-header"><small>supplier/</small> Update</h4>
    <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('supplier','*',$con);
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
                    <h5 class="panel-title">supplier Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="name" class="form-control" id="fullname" value="<?= $olddata->name ?>" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone No</label>
                            <input type="text" name="contact" id="phone" class="form-control" value="<?= $olddata->contact ?>" />
                        </div>
                        <div class="form-group">
                            <label for="due">Due</label>
                            <input type="text" name="due" id="due" class="form-control" value="<?= $olddata->due ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['updated_at']=date('Y-m-d H:i:s');
                            $_POST['updated_by']=1;
                            $rs=$mysqli->common_update('supplier',$_POST,$con);
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
