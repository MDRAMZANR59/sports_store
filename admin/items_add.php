<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container">
    <h4 class="page-header"><small>Product/</small> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Items </h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="fullname">Product Name </label>
                            <input type="text" name="product_name" class="form-control" id="fullname" placeholder="Product Name" />
                            <label for="details">Details </label>
                            <input type="text" name="details" class="form-control" id="details" placeholder="Product Details" />
                            <label for="img">Photo </label>
                            <input type="file" name="photo" class="form-control" id="img" placeholder="" />
                            <label for="price">Price </label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Category" />
                            <label for="catagoryId">Catagory Id </label>
                            <input type="text" name="catagory_id" class="form-control" id="catagoryId" placeholder="Category Id" />
                            <label for="companyName">Company Name </label>
                            <input type="text" name="company_name" class="form-control" id="companyName" placeholder="Company Name" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['created_at']=date('Y-m-d H:i:s');
                            $_POST['created_by']=1;
                            $rs=$mysqli->common_create('items',$_POST);
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
