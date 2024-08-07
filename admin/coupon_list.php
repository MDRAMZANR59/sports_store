<?php include('include/header.php') ; ?>
<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>

<div class="container-fluid">
    <h4 class="page-header"><small>Coupon /</small> List</h4>

    <!-- Basic Bootstrap Table -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">Coupon</h5>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Coupon Code</th>
                            <th>Discount</th>
                            <th>Start Date</th>
                            <th>Finish Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $result=$mysqli->common_select('coupon');
                            if($result){
                                if($result['data']){
                                    $i=1;
                                    foreach($result['data'] as $data){
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $data->cupon_code ?></td>
                            <td><?= $data->discount ?></td>
                            <td><?= $data->start_date ?></td>
                            <td><?= $data->finish_date ?></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="glyphicon glyphicon-option-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= $baseurl ?>coupon_edit.php?id=<?= $data->id ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>
                                        <li><a href="<?= $baseurl ?>coupon_delete.php?id=<?= $data->id ?>"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
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
