<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container-fluid">
    <h4 class="page-header"><small>Coupon/</small> Update</h4>
    <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('coupon','*',$con);
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
                    <h5 class="panel-title">Cupon Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                        <label for="cupon_code">Cupon Code</label>
                            <input type="text" name="cupon_code" id="cupon_code" class="form-control" value="<?= $olddata->cupon_code ?>" />
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="number" name="discount" id="discount" class="form-control" value="<?= $olddata->discount ?>" />
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" value="<?= $olddata->start_date ?>" />
                        </div>
                        <div class="form-group">
                            <label for="Finish_date">Finish Date</label>
                            <input type="date" name="finish_date" id="Finish_date" class="form-control" value="<?= $olddata->finish_date ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['updated_at']=date('Y-m-d H:i:s');
                            $_POST['updated_by']=1;
                            $rs=$mysqli->common_update('cupon',$_POST,$con);
                            if($rs){
                                if($rs['data']){
                                    echo "<script>window.location='{$baseurl}cupon_list.php'</script>";
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
