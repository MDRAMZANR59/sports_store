<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container-fluid">
    <h4 class="page-header"><small>Customer</small> Add New</h4>

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
                            <label for="country">Country</label>
                            <input type="text" name="country" class="form-control" id="country" placeholder="Country" />
                        </div>
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" />
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" />
                        </div>
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name" />
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="address" />
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" name="state" class="form-control" id="state" placeholder="state" />
                        </div>
                        <div class="form-group">
                            <label for="post">Post</label>
                            <input type="text" name="post" class="form-control" id="post" placeholder="Post" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone" />
                        </div>
                        <div class="form-group">
                            <label for="fullname">Notes</label>
                            <input type="text" name="notes" class="form-control" id="notes" placeholder="Notes" />
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
