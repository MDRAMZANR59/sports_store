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
                            <label for="supplier">Full Name</label>
                            <input type="text" name="name" class="form-control" id="supplier" placeholder="supplier" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone No</label>
                            <input type="text" name="contact" id="phone" class="form-control" placeholder="+88 01" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['created_at']=date('Y-m-d H:i:s');
                            $_POST['created_by']=1;
                            $rs=$mysqli->common_create('supplier',$_POST);
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
