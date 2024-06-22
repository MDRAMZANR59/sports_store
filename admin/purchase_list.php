<?php include('include/header.php'); ?>
<link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/datatables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/v/bs5/dt-2.0.8/datatables.min.js"></script>

<div class="container">
    <h4 class="py-3 mb-4"><span class="text-muted">Purchase </span> List</h4>

    <!-- Basic Bootstrap Table -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">Purchase</h5>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Supplier</th>
                            <th>Date</th>
                            <th>Qty</th>
                            <th>Sub Total</th>
                            <th>Discount</th>
                            <th>VAT</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $result = $mysqli->common_select_query("SELECT supplier.name AS sup_name, purchase.* FROM purchase JOIN supplier ON supplier.id=purchase.supplier_id");
                            if ($result) {
                                if ($result['data']) {
                                    $i = 1;
                                    foreach ($result['data'] as $data) {
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $data->sup_name ?></td>
                            <td><?= date('d-m-Y', strtotime($data->purchase_date)) ?></td>
                            <td><?= $data->qty ?></td>
                            <td><?= $data->sub_amount ?></td>
                            <td><?= $data->discount ?></td>
                            <td><?= $data->vat ?></td>
                            <td><?= $data->total_amount ?></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="glyphicon glyphicon-option-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= $baseurl ?>medicine_edit.php?id=<?= $data->id ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>
                                        <li><a href="<?= $baseurl ?>medicine_delete.php?id=<?= $data->id ?>"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php 
                                    }
                                }
                            } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

</div>
<!-- / Content -->

<?php include('include/footer.php'); ?>
