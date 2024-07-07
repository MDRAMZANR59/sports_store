<?php include('include/header.php') ; ?>
<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>

<div class="container-fluid">
    <h4 class="page-header"><small>Orders /</small> List</h4>

    <!-- Basic Bootstrap Table -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">Orders List</h5>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Bill First Name</th>
                            <th>Bill Last Name</th>
                            <th>Bill Phone</th>
                            <th>Total Amount</th>
                            <th>Discount</th>
                            <th>Total Qty</th>
                            <th>Coupon Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $result=$mysqli->common_select('orders');
                            if($result){
                                if($result['data']){
                                    $i=1;
                                    foreach($result['data'] as $data){
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $data->bill_first_name ?></td>
                            <td><?= $data->bill_last_name ?></td>
                            <td><?= $data->bill_phone ?></td>
                            <td><?= $data->total_amount ?></td>
                            <td><?= $data->discount ?></td>
                            <td><?= $data->total_qty ?></td>
                            <td><?= $data->coupon_code ?></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="glyphicon glyphicon-option-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= $baseurl ?>orders_delete.php?id=<?= $data->id ?>"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
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
