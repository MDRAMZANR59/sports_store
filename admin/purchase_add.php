<?php include('include/header.php') ; ?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Purchase/</span> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
    <div class="col-xl">
        <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Purchase Information</h5>
        </div>
        <div class="card-body">
            <form class="form" method="post" action="">
                <div class="row">
                    <div class="col-md-2 mt-2">
                        <label for="customrName" class="float-end"><h6>Customer</h6></label>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control form-select" name="supplier_id" id="supplier_id">
                            <option value="">Select Supplier</option>
                            <?php 
                                $result=$mysqli->common_select('supplier');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                                <option value="<?= $d->id ?>" > <?= $d->contact ?> <?= $d->name ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                    
                    <div class="col-md-2 mt-2">
                        <label for="date" class="float-end"><h6>Date</h6></label>
                    </div>
                    <div class="col-md-4">
                        <input type="date" id="purchase_date" class="form-control" value="<?= date("Y-m-d") ?>" name="purchase_date">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2 mt-2">
                        <label for="reference_no" class="float-end"><h6>Product</h6></label>
                    </div>
                    <div class="col-md-10">
                        <select class="form-control form-select" onchange="return_row_with_data(this)" id="product">
                            <option value="">Select Medicine</option>
                            <?php 
                                $result=$mysqli->common_select('medicine');
                                $medicine=array();
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                                            $medicine[$d->id]=$d;
                            ?>
                                <option value='<?= json_encode($d) ?>' > <?= $d->brand_name ?> <?= $d->generic_name ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>
                
                <table class="table mb-5">
                    <thead>
                        <tr class="">
                            <th class="p-2">Product Name</th>
                            <th class="p-2">Qty</th>
                            <th class="p-2">Sell Price</th>
                            <th class="p-2">Amount</th>
                            <th class="p-2">Action</th>
                        </tr>
                    </thead>
                    <tbody id="details_data">

                    </tbody>
                </table>


                <div class="row mb-5">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-4 offset-2 mt-2 text-end pe-3">
                                <label for="" class="form-group"><h6>Total Quantities</h6></label> 
                            </div>
                            <div class="col-4 mt-2">
                                <label for="" class="form-group"><h6 id="total_qty">0</h6></label>
                                <input type="hidden" name="total_qty" id="total_qty_p">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 offset-2 mt-2 text-end pe-3">
                                <label for="" class="form-group"><h6>Discount</h6></label> 
                            </div>
                            <div class="col-6 mt-2">
                                <input type="text" class="form-control form-group" id="discount" name="discount" onkeyup="check_change()">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 offset-2 mt-2 text-end pe-3">
                                <label for="" class="form-group"><h6>Vat (%)</h6></label> 
                            </div>
                            <div class="col-4 mt-2">
                                <input type="text" class="form-control form-group" id="vat" onkeyup="check_change()">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Subtotal</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="tsubtotal">0.00</h6></label>
                                <input type="hidden" name="tsubtotal" id="tsubtotal_p">
                            </div>
                        </div>   
                        
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Discount</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="tdiscount">0.00</h6></label>
                                <input type="hidden" name="tdiscount" id="tdiscount_p">
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Vat</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="vat_v">0.00</h6></label>
                                <input type="hidden" name="vat" id="vat_p">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Grand Total</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="tgrandtotal">0.00</h6></label>
                                <input type="hidden" name="tgrandtotal" id="tgrandtotal_p">
                            </div>
                        </div> 
                    </div>
                </div>
                                
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                        
                    </div>
                </div>
            </form>
            <?php 
                if($_POST){
                    $pur['supplier_id']=$_POST['supplier_id'];
                    $pur['purchase_date']=$_POST['purchase_date'];
                    $pur['qty']=$_POST['total_qty'];
                    $pur['sub_amount']=$_POST['tsubtotal'];
                    $pur['discount']=$_POST['tdiscount'];
                    $pur['vat']=$_POST['vat'];
                    $pur['total_amount']=$_POST['tgrandtotal'];
                    $pur['created_at']=date("Y-m-d H:i:s");
                    $pur['created_by']=$_SESSION['id'];
                    $rs=$mysqli->common_create('purchase',$pur);
                    if($rs){
                        if($rs['data']){
                            if($_POST['medicine_id']){
                                foreach($_POST['medicine_id'] as $k => $v){
                                    $purd['purchase_id']=$rs['data'];
                                    $purd['purchase_date']=$_POST['purchase_date'];
                                    $purd['medicine_id']=$v;
                                    $purd['qty']=$_POST['qty'][$k];
                                    $purd['price']=$_POST['price'][$k];
                                    $purd['created_at']=date("Y-m-d H:i:s");
                                    $purd['created_by']=$_SESSION['id'];
                                    $rs=$mysqli->common_create('purchase_details',$purd);
                                }
                            }

                            echo "<script>window.location='{$baseurl}purchase_list.php'</script>";
                        }else{
                            echo $rs['error'];
                        }
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

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>


<script>
    var medicine_data=<?= json_encode($medicine) ?>;
    var selected_medicine=[];
    function return_row_with_data(item){
        let data=JSON.parse(item.value);
        if(!selected_medicine.some(k => k == data.id)){
            let row=`<tr>
                        <td class="p-2">
                            ${data.brand_name}
                            <input type="hidden" name="medicine_id[]" value="${data.id}">
                        </td>
                        <td class="p-2">
                            <input type="text" class="form-control qty" name="qty[]" onkeyup="get_cal(this,${data.id})">
                        </td>
                        <td class="p-2">
                            ${data.price}
                            <input type="hidden" class="price" name="price[]" value="${data.price}">
                        </td>
                        <td class="p-2">
                            <span id="price${data.id}" class="subprice"> </span>
                        </td>
                        <td class="p-2">Action</td>
                    </tr>`
            document.getElementById('details_data').insertRow().innerHTML=row;
            selected_medicine.push(data.id)
        }
        
    }
    //INCREMENT ITEM
    function removerow(e){
        $(e).parents('tr').remove();
    }

    //CALCUALATED SALES PRICE
    function get_cal(qty,mid){
        var price = (isNaN(parseFloat(medicine_data[mid].price))) ? 0 :parseFloat(medicine_data[mid].price); 
        var qty = (isNaN(parseFloat(qty.value))) ? 0 :parseFloat(qty.value); 
    
        var subtotal = price * qty;
            document.getElementById('price'+mid).innerHTML=subtotal

        total_calculate();
    }
    //END
    //CALCULATE PROFIT MARGIN PERCENTAGE
    function total_calculate(){
        var totalqty = 0;
        document.querySelectorAll('.qty').forEach(function(e){
            totalqty += (isNaN(parseFloat(e.value))) ? 0 :parseFloat(e.value);
        });
        
        var subtotal = 0;
        document.querySelectorAll('.subprice').forEach(function(e){
            subtotal += (isNaN(parseFloat(e.innerHTML))) ? 0 :parseFloat(e.innerHTML);
        });

        document.getElementById('total_qty').innerHTML=totalqty;
        document.getElementById('total_qty_p').value=totalqty;
        
        document.getElementById('tsubtotal').innerHTML=subtotal;
        document.getElementById('tsubtotal_p').value=subtotal;

        
        check_change();
    }
    //END

    function check_change(){
        var vat=(isNaN(parseFloat(document.getElementById('vat').value))) ? 0 :parseFloat(document.getElementById('vat').value);
        var discount=(isNaN(parseFloat(document.getElementById('discount').value))) ? 0 :parseFloat(document.getElementById('discount').value);
        var tsubtotal=document.getElementById('tsubtotal_p').value;
        vat= tsubtotal * (vat/100)
        document.getElementById('tdiscount').innerHTML=discount.toFixed(2)
        document.getElementById('tdiscount_p').value=discount.toFixed(2)
        document.getElementById('vat_v').innerHTML=vat.toFixed(2)
        document.getElementById('vat_p').value=vat.toFixed(2)

        cal_grandtotl()
    }

    function cal_grandtotl(){
        var tsubtotal_p=(isNaN(parseFloat(document.getElementById('tsubtotal_p').value))) ? 0 :parseFloat(document.getElementById('tsubtotal_p').value);
        var vat=(isNaN(parseFloat(document.getElementById('vat_p').value))) ? 0 :parseFloat(document.getElementById('vat_p').value);
        var discount=(isNaN(parseFloat(document.getElementById('tdiscount_p').value))) ? 0 :parseFloat(document.getElementById('tdiscount_p').value);
        var grandtotal=((tsubtotal_p-discount)+vat);
        var roundof=Math.floor(grandtotal);
            subtotal_diff=grandtotal-roundof;

        document.getElementById('tgrandtotal').innerHTML=parseFloat(roundof).toFixed(2)
        document.getElementById('tgrandtotal_p').value=parseFloat(roundof).toFixed(2)
    }

</script>