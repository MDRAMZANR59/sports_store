<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container-fluid">
    <h4 class="page-header"><small>User/</small> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">User </h5>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="user">User </label>
                            <input type="text" name="name" class="form-control" id="user" placeholder="User" />
                            <label for="email">Email </label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" />
                            <label for="contact">Contact </label>
                            <input type="number" name="phone" class="form-control" id="contact" placeholder="Phone" />
                            <label for="img">Photo </label>
                            <input type="file" name="Photo" class="form-control" id="img" placeholder="photo" />
                            <label for="uName">User Name </label>
                            <input type="text" name="User Name" class="form-control" id="uName" placeholder="User Name" />
                            <label for="password">Password </label>
                            <input type="text" name="password" class="form-control" id="password" placeholder="Password" />
                            <label for="status">Status </label>
                            <input type="text" name="Status" class="form-control" id="status" placeholder="Status" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    <?php 
                        if($_POST){
                            $_POST['created_at']=date('Y-m-d H:i:s');
                            $_POST['created_by']=1;
                            $rs=$mysqli->common_create('authentication',$_POST);
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
