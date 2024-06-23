<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container">
    <h4 class="page-header"><small>supplier/</small> Add New</h4>

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
                            <label for="fullname">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="fullname" placeholder="Product Name " />
                            <label for="fullname">Details</label>
                            <input type="text" name="details" class="form-control" id="fullname" placeholder="Product Details " />
                            <label for="fullname">Photo</label>
                            <input type="file" name="photo" class="form-control" id="fullname" placeholder="" />
                            <label for="fullname">Price</label>
                            <input type="text" name="price" class="form-control" id="fullname" placeholder="Price " />
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['created_at']=date('Y-m-d H:i:s');
                            $_POST['created_by']=1;
                            $rs=$mysqli->common_create('items_list',$_POST);
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
