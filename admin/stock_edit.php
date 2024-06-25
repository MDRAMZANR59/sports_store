<?php include('include/header.php') ; ?>

<div class="container">
    <h4 class="page-header"><small>Stock/</small> Add New</h4>
    <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('stock','*',$con);
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
                    <h5 class="panel-title">Stock Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                        <label for="purchase_id">Purchase Id</label>
                        <input type="number" name="purchase_id" class="form-control" id="purchase_id" value="<?= $olddata->purchase_id ?>" />
                        <label for="product_id">Product Id</label>
                        <input type="number" name="product_id" class="form-control" id="product_id" value="<?= $olddata->product_id ?>" />
                            <label for="Qty">Qty</label>
                            <input type="number" name="qty" class="form-control" id="Qty" value="<?= $olddata->qty ?>" />
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" id="price" value="<?= $olddata->price ?>" />
                            <label for="stock_date">Stock Date</label>
                            <input type="number" name="stock_date" class="form-control" id="stock_date" value="<?= $olddata->stock_date ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['updated_at']=date('Y-m-d H:i:s');
                            $_POST['updated_by']=1;
                            $rs=$mysqli->common_update('stock',$_POST,$con);
                            if($rs){
                                if($rs['data'])
                                    echo "<script>window.location='{$baseurl}stock_list.php'</script>";
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
