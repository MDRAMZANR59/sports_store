<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container-fluid">
    <h4 class="page-header"><small>Coupon/</small> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Coupon Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="cupon_code">Coupon Code</label>
                            <input type="text" name="cupon_code" id="cupon_code" class="form-control" placeholder="F5D68XF" />
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="number" name="discount" id="discount" class="form-control" placeholder="0.00" />
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="Finish_date">Finish Date</label>
                            <input type="date" name="finish_date" id="Finish_date" class="form-control" placeholder="" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['created_at']=date('Y-m-d H:i:s');
                            $_POST['created_by']=1;
                            $rs=$mysqli->common_create('coupon',$_POST);
                            if($rs){
                                if($rs['data']){
                                    echo "<script>window.location='{$baseurl}coupon_list.php'</script>";
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
