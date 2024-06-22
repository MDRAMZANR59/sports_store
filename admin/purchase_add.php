<?php include('include/header.php'); ?>
<!-- Content -->
<div class="container-fluid">
    <h4 class="page-header"><span class="text-muted">Purchase/</span> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">Purchase Information</h5>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <label for="supplier_id" class="col-md-2 control-label"><h6>Supplier</h6></label>
                            <div class="col-md-4">
                                <select class="form-control" name="supplier_id" id="supplier_id">
                                    <option value="">Select Supplier</option>
                                    <?php 
                                        $result = $mysqli->common_select('supplier');
                                        if ($result && $result['data']) {
                                            foreach ($result['data'] as $d) {
                                                echo "<option value='{$d->id}'>{$d->contact} {$d->name}</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <label for="purchase_date" class="col-md-2 control-label"><h6>Date</h6></label>
                            <div class="col-md-4">
                                <input type="date" id="purchase_date" class="form-control" value="<?= date('Y-m-d') ?>" name="purchase_date">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product" class="col-md-2 control-label"><h6>Product</h6></label>
                            <div class="col-md-10">
                                <select class="form-control" onchange="return_row_with_data(this)" id="product">
                                    <option value="">Select Medicine</option>
                                    <?php 
                                        $result = $mysqli->common_select('medicine');
                                        if ($result && $result['data']) {
                                            foreach ($result['data'] as $d) {
                                                echo "<option value='" . json_encode($d) . "'>{$d->brand_name} {$d->generic_name}</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <table class="table table-bordered mb-5">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Qty</th>
                                    <th>Sell Price</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="details_data">
                                <!-- Rows will be added dynamically -->
                            </tbody>
                        </table>

                        <div class="row mb-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-md-4 control-label text-right"><h6>Total Quantities</h6></label>
                                    <div class="col-md-8">
                                        <label for="" class="control-label"><h6 id="total_qty">0</h6></label>
                                        <input type="hidden" name="total_qty" id="total_qty_p">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="discount" class="col-md-4 control-label text-right"><h6>Discount</h6></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="discount" name="discount" onkeyup="check_change()">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="vat" class="col-md-4 control-label text-right"><h6>Vat (%)</h6></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="vat" onkeyup="check_change()">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-md-4 control-label text-right"><h6>Subtotal</h6></label>
                                    <div class="col-md-8 text-right">
                                        <label for="" class="control-label"><h6 id="tsubtotal">0.00</h6></label>
                                        <input type="hidden" name="tsubtotal" id="tsubtotal_p">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-4 control-label text-right"><h6>Discount</h6></label>
                                    <div class="col-md-8 text-right">
                                        <label for="" class="control-label"><h6 id="tdiscount">0.00</h6></label>
                                        <input type="hidden" name="tdiscount" id="tdiscount_p">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-4 control-label text-right"><h6>Vat</h6></label>
                                    <div class="col-md-8 text-right">
                                        <label for="" class="control-label"><h6 id="vat_v">0.00</h6></label>
                                        <input type="hidden" name="vat" id="vat_p">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-4 control-label text-right"><h6>Grand Total</h6></label>
                                    <div class="col-md-8 text-right">
                                        <label for="" class="control-label"><h6 id="tgrandtotal">0.00</h6></label>
                                        <input type="hidden" name="tgrandtotal" id="tgrandtotal_p">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                    <?php 
                        if ($_POST) {
                            $pur = [
                                'supplier_id' => $_POST['supplier_id'],
                                'purchase_date' => $_POST['purchase_date'],
                                'qty' => $_POST['total_qty'],
                                'sub_amount' => $_POST['tsubtotal'],
                                'discount' => $_POST['tdiscount'],
                                'vat' => $_POST['vat'],
                                'total_amount' => $_POST['tgrandtotal'],
                                'created_at' => date('Y-m-d H:i:s'),
                                'created_by' => $_SESSION['id']
                            ];
                            $rs = $mysqli->common_create('purchase', $pur);
                            if ($rs && $rs['data']) {
                                if ($_POST['medicine_id']) {
                                    foreach ($_POST['medicine_id'] as $k => $v) {
                                        $purd = [
                                            'purchase_id' => $rs['data'],
                                            'purchase_date' => $_POST['purchase_date'],
                                            'medicine_id' => $v,
                                            'qty' => $_POST['qty'][$k],
                                            'price' => $_POST['price'][$k],
                                            'created_at' => date('Y-m-d H:i:s'),
                                            'created_by' => $_SESSION['id']
                                        ];
                                        $mysqli->common_create('purchase_details', $purd);
                                    }
                                }
                                echo "<script>window.location='{$baseurl}purchase_list.php'</script>";
                            } else {
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

<?php include('include/footer.php'); ?>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

<script>
    var medicine_data = <?= json_encode($medicine) ?>;
    var selected_medicine = [];

    function return_row_with_data(item) {
        let data = JSON.parse(item.value);
        if (!selected_medicine.includes(data.id)) {
            let row = `<tr>
                            <td>${data.brand_name}<input type="hidden" name="medicine_id[]" value="${data.id}"></td>
                            <td><input type="text" class="form-control qty" name="qty[]" onkeyup="get_cal(this,${data.id})"></td>
                            <td>${data.price}<input type="hidden" class="price" name="price[]" value="${data.price}"></td>
                            <td><span id="price${data.id}" class="subprice"></span></td>
                            <td><button type="button" class="btn btn-danger btn-sm" onclick="removerow(this)">Remove</button></td>
                        </tr>`;
            $('#details_data').append(row);
            selected_medicine.push(data.id);
        }
    }

    function removerow(e) {
        $(e).closest('tr').remove();
        total_sum();
    }

    function get_cal(e, id) {
        let qty = $(e).closest('tr').find('.qty').val();
        let price = $(e).closest('tr').find('.price').val();
        let sub_price = qty * price;
        $(`#price${id}`).text(sub_price.toFixed(2));
        total_sum();
    }

    function total_sum() {
        let total_qty = 0;
        let total_price = 0;

        $('.qty').each(function () {
            total_qty += parseInt($(this).val()) || 0;
        });

        $('.subprice').each(function () {
            total_price += parseFloat($(this).text()) || 0;
        });

        $('#total_qty').text(total_qty);
        $('#total_qty_p').val(total_qty);

        $('#tsubtotal').text(total_price.toFixed(2));
        $('#tsubtotal_p').val(total_price.toFixed(2));

        let discount = parseFloat($('#discount').val()) || 0;
        $('#tdiscount').text(discount.toFixed(2));
        $('#tdiscount_p').val(discount.toFixed(2));

        let vat = parseFloat($('#vat').val()) || 0;
        let vat_amount = (total_price * vat) / 100;
        $('#vat_v').text(vat_amount.toFixed(2));
        $('#vat_p').val(vat_amount.toFixed(2));

        let grand_total = total_price - discount + vat_amount;
        $('#tgrandtotal').text(grand_total.toFixed(2));
        $('#tgrandtotal_p').val(grand_total.toFixed(2));
    }

    function check_change() {
        total_sum();
    }
</script>
