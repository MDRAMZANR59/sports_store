<?php include('include/header.php'); ?>
<!-- Include jQuery Library -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Include Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- Include DataTables CSS -->
<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css" rel="stylesheet">
<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>

<div class="container">
    <h4 class="page-header"><small>Items /</small> List</h4>

    <!-- Basic Bootstrap Table -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">Items</h5>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="itemsTable">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Photo</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $result = $mysqli->common_select('items');
                            if ($result && $result['data']) {
                                $i = 1;
                                foreach ($result['data'] as $data) {
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->details ?></td>
                            <td><img src="<?= $data->photo ?>" alt="<?= $data->name ?>" style="width: 50px; height: 50px;"></td>
                            <td><?= $data->price ?></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="glyphicon glyphicon-option-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= $baseurl ?>items_edit.php?id=<?= $data->id ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>
                                        <li><a href="<?= $baseurl ?>items_delete.php?id=<?= $data->id ?>"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php 
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

<!-- Initialize DataTable -->
<script>
$(document).ready(function() {
    $('#itemsTable').DataTable();
});
</script>

<?php include('include/footer.php'); ?>
