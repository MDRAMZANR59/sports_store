<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container-fluid">
    <h4 class="page-header"><small>Sales/</small> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Sales</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="customer_id">Customer Id</label>
                            <input type="number" name="customer_id" class="form-control" id="customer_id" placeholder="Customer Id" />
                            <label for="sales_date">Sales Date</label>
                            <input type="date" name="sales_date" class="form-control" id="sales_date" placeholder="" />
                            <label for="Qty">Qty</label>
                            <input type="number" name="qty" class="form-control" id="Qty" placeholder="Qty" />
                            <label for="SubAmount">Sub Amount </label>
                            <input type="number" name="sub_amount" class="form-control" id="SubAmount" placeholder="Sub Amount" />
                            <label for="Discount">Discount</label>
                            <input type="number" name="discount" class="form-control" id="Discount" placeholder="Discount" />
                            <label for="Vat">Vat</label>
                            <input type="number" name="vat" class="form-control" id="Vat" placeholder="Vat" />
                            <label for="TotalAmount">Total Amount</label>
                            <input type="number" name="total_amount" class="form-control" id="TotalAmount" placeholder="Total Amount" />
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['created_at']=date('Y-m-d H:i:s');
                            $_POST['created_by']=1;
                            $rs=$mysqli->common_create('sales',$_POST);
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
