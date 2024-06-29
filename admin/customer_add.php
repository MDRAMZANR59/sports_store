<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container-fluid">
    <h4 class="page-header"><small>Customer/</small> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Customer Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="name" class="form-control" id="fullname" placeholder="John Doe" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone No</label>
                            <input type="text" name="contact" id="phone" class="form-control" placeholder="658 799 8941" />
                        </div>
                        <div class="form-group">
                            <label for="due">Due</label>
                            <input type="text" name="due" id="due" class="form-control" placeholder="0.00" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['created_at']=date('Y-m-d H:i:s');
                            $_POST['created_by']=1;
                            $rs=$mysqli->common_create('customer',$_POST);
                            if($rs){
                                if($rs['data']){
                                    echo "<script>window.location='{$baseurl}customer_list.php'</script>";
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
