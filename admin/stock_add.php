<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container">
    <h4 class="page-header"><small>Stock/</small> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Stock</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="purchase_id">Purchase Id</label>
                            <input type="number" name="purchase_id" class="form-control" id="purchase_id" placeholder="Purchase Id" />
                            <label for="product_id">Product Id</label>
                            <input type="text" name="product_id" class="form-control" id="product_id" placeholder="Product Id" />
                            <label for="Qty">Qty</label>
                            <input type="number" name="qty" class="form-control" id="Qty" placeholder="Qty" />
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Price" />
                            <label for="stock_date">Stock Date</label>
                            <input type="date" name="stock_date" class="form-control" id="stock_date" placeholder="Stock Date" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['created_at']=date('Y-m-d H:i:s');
                            $_POST['created_by']=1;
                            $rs=$mysqli->common_create('stock',$_POST);
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
