<?php include('include/header.php') ; ?>

<div class="container">
    <h4 class="page-header"><small>User/</small> Add New</h4>
    <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('authentication','*',$con);
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
                    <h5 class="panel-title">User Information</h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="fullname">Category Name</label>
                            <input type="text" name="name" class="form-control" id="fullname" value="<?= $olddata->name ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['updated_at']=date('Y-m-d H:i:s');
                            $_POST['updated_by']=1;
                            $rs=$mysqli->common_update('authentication',$_POST,$con);
                            if($rs){
                                if($rs['data'])
                                    echo "<script>window.location='{$baseurl}authentication_list.php'</script>";
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
