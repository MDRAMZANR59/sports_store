<?php include('include/header.php') ; ?>

<div class="container-fluid">
    <h4 class="page-header"><small>Sales/</small> Add New</h4>
    <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('sales','*',$con);
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
                    <h5 class="panel-title">Purchase Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                        <label for="customer_id">Customer Id</label>
                        <input type="number" name="customer_id" class="form-control" id="customer_id" value="<?= $olddata->customer_id ?>" />
                            <label for="Qty">Qty</label>
                            <input type="number" name="qty" class="form-control" id="Qty" value="<?= $olddata->qty ?>" />
                            <label for="SubAmount">Sub Amount </label>
                            <input type="number" name="sub_amount" class="form-control" id="SubAmount" value="<?= $olddata->sub_amount ?>" />
                            <label for="Discount">Discount</label>
                            <input type="number" name="discount" class="form-control" id="Discount" value="<?= $olddata->discount ?>" />
                            <label for="Vat">Vat</label>
                            <input type="number" name="vat" class="form-control" id="Vat" value="<?= $olddata->vat ?>" />
                            <label for="TotalAmount">Total Amount</label>
                            <input type="number" name="total_amount" class="form-control" id="TotalAmount" value="<?= $olddata->total_amount ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['updated_at']=date('Y-m-d H:i:s');
                            $_POST['updated_by']=1;
                            $rs=$mysqli->common_update('sales',$_POST,$con);
                            if($rs){
                                if($rs['data'])
                                    echo "<script>window.location='{$baseurl}sales_list.php'</script>";
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
