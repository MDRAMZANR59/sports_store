<?php include('include/header.php') ; ?>
<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>

<div class="container-fluid">
    <h4 class="page-header"><small>Stock/</small> List</h4>

    <!-- Basic Bootstrap Table -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">Stock</h5>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Product Id</th>
                            <th>In</th>
                            <th>Out</th>
                            <th>Balance</th>
                            <th>price</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $stockin=$stockout=$balance=$price=0;
                        $result=$mysqli->common_select_query("SELECT sum(if(stock.qty > 0,qty,0)) as stockin,
                                                                    sum(if(stock.qty < 0,qty,0)) as stockout,
                                                                    sum(stock.qty) as balance,AVG(stock.price) as price,
                                                                     items.product_name FROM `stock`
                                                                JOIN items on items.id=stock.item_id
                                                                group by item_id");
                        if($result){
                            if($result['data']){
                                $i=1;
                                foreach($result['data'] as $data){
                                    $stockin+=$data->stockin;
                                    $stockout+=abs($data->stockout);
                                    $balance+=$data->balance;
                                    $price+=($data->price * $data->balance);
                    ?>
                    <tr>
                    
                        <td><?= $i++ ?></td>
                        <td><?= $data->product_name ?></td>
                        <td><?= $data->stockin ?></td>
                        <td><?= abs($data->stockout) ?></td>
                        <td><?= $data->balance ?></td>
                        <td>BDT <?= $data->price * $data->balance ?></td>
                    </tr>

                    <?php } } } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Total</th>
                        <th><?= $stockin ?></th>
                        <th><?= $stockout ?></th>
                        <th><?= $balance ?></th>
                        <th>BDT <?= $price ?></th>
                    </tr>
                </tfoot>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

</div>
<!-- / Content -->

<?php include('include/footer.php') ; ?>
