<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container">
    <h4 class="page-header"><small>Catagory/</small> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Catagory </h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="fullname">Catagory </label>
                            <input type="text" name="name" class="form-control" id="fullname" placeholder="Category" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['created_at']=date('Y-m-d H:i:s');
                            $_POST['created_by']=1;
                            $rs=$mysqli->common_create('catagory',$_POST);
                            if($rs){
                                if($rs['data'])
                                    echo "<script>window.location='{$baseurl}category_list.php'</script>";
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
