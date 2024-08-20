<?php include_once('include/header.php') ?>
<div class="container mt-4 mb-5 pb-5">
    <article class="card mb-5">
        <div class="row">
            <div class="col-sm-12 mb-5">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Total Amount</th>
                            <th>Discount</th>
                            <th>Total Qty</th>
                            <th>Coupon Code</th>
                            <th>Status</th>
                            <th>Status Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $con['customer_id']=$_SESSION['user_data']->id;
                            $result=$mysqli->common_select('orders','*',$con);
                            if($result){
                                if($result['data']){
                                    $i=1;
                                    foreach($result['data'] as $data){
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $data->total_amount ?></td>
                            <td><?= $data->discount ?></td>
                            <td><?= $data->total_qty ?></td>
                            <td><?= $data->coupon_code ?></td>
                            <td><?= $data->status ?></td>
                            <td><?= $data->status_date ?></td>
                            <td>
                                <a href="invoice.php?txnid=<?= $data->transaction_id ?>" class="btn btn-sm btn-outline-black">Invoice</a>
                            </td>
                        </tr>
                        <?php } } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </article>
</div>
<?php include_once('include/footer.php')?>
