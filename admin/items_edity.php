<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container">
    <h4 class="page-header"><small>Items/</small> Update</h4>
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
                    <h5 class="panel-title">items Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="fullname">Items Name</label>
                            <input type="text" name="items_name" class="form-control" id="fullname" value="<?= $olddata->name ?>" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Details</label>
                            <input type="text" name="details" id="phone" class="form-control" value="<?= $olddata->contact ?>" />
                        </div>
                        <div class="form-group">
                            <label for="due">Photo</label>
                            <input type="text" name="photo" id="due" class="form-control" value="<?= $olddata->due ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['updated_at']=date('Y-m-d H:i:s');
                            $_POST['updated_by']=1;
                            $rs=$mysqli->common_update('items',$_POST,$con);
                            if($rs){
                                if($rs['data']){
                                    echo "<script>window.location='{$baseurl}items_list.php'</script>";
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
