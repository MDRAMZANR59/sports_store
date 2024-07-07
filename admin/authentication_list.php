<?php include('include/header.php') ; ?>
<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>

<div class="container-fluid">
    <h4 class="page-header"><small>Category /</small> List</h4>

    <!-- Basic Bootstrap Table -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">Category</h5>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Photo</th>
                            <th>User Name</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $result=$mysqli->common_select('authentication');
                            if($result){
                                if($result['data']){
                                    $i=1;
                                    foreach($result['data'] as $data){
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->email ?></td>
                            <td><?= $data->contact ?></td>
                            <td> <img src="<?= $baseurl ?>assets/users/<?= $data->photo ?>" width="80px" alt=""> </td>
                            <td><?= $data->username ?></td>
                            <td><?= $data->password ?></td>
                            <td><?= $data->status ?></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="glyphicon glyphicon-option-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= $baseurl ?>authentication_delete.php?id=<?= $data->id ?>"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php } } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

</div>
<!-- / Content -->

<?php include('include/footer.php') ; ?>
