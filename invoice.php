<?php require_once('include/connection.php'); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Sports Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="css/invoice.css">
</head>
<body>
<?php 
    $invdata=array();
    $con['id']=$_GET['invoice'];
    $result=$mysqli->common_select_single('orders','*',$con);
    if($result){
        if($result['data']){
            $invdata=$result['data'];
        }
    }
?>
<!-- Invoice 2 start -->
<div class="invoice-2 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-headar">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-logo">
                                        <!-- logo started -->
                                        <div class="logo">
                                            <h1 style="color:white">Furni.</h1>
                                        </div>
                                        <!-- logo ended --> 
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-id">
                                        <div class="info">
                                            <h1 class="inv-header-1">Invoice</h1>
                                            <p class="mb-1">Invoice Number: <span>#<?= str_pad($invdata->id,7,"0",STR_PAD_LEFT) ?></span></p>
                                            <p class="mb-0">Invoice Date: <span><?= date('d M Y',strtotime($invdata->created_at)) ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <h4 class="inv-title-1">Invoice To</h4>
                                        <h2 class="name"><?= $invdata->bill_first_name ?> <?= $invdata->bill_last_name ?></h2>
                                        <span>Phone: <?= $invdata->bill_phone ?></span><br/>
                                        <span>Email: <?= $invdata->bill_email ?></span><br/>
                                        <span>Address: <?= $invdata->bill_address ?>, <?= $invdata->bill_state ?>, <?= $invdata->bill_post ?></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <div class="invoice-number-inner">
                                            <h4 class="inv-title-1">Invoice From</h4>
                                            <h2 class="name">Fruni</h2>
                                            <p class="invo-addr-1">
                                                Furniture BD  <br/>
                                                shop@furni.com <br/>
                                                Chittagong, Bangladesh <br/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped invoice-table">
                                    <thead class="bg-active">
                                    <tr class="tr">
                                        <th>No.</th>
                                        <th class="pl0 text-start">Item Description</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-end">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $cartdata=json_decode(base64_decode($invdata->cart_data));
                                            
                                            $i=0;
                                            foreach($cartdata->item as $item){
                                        ?>
                                            <tr class="tr">
                                                <td>
                                                    <div class="item-desc-1">
                                                        <span><?= str_pad(++$i,2,"0",STR_PAD_LEFT) ?></span>
                                                    </div>
                                                </td>
                                                <td class="pl0"><?= $item->product_name ?></td>
                                                <td class="text-center">BDT <?= $item->price ?></td>
                                                <td class="text-center"><?= $item->qty ?></td>
                                                <td class="text-end">BDT <?= $item->price * $item->qty ?></td>
                                            </tr>
                                        <?php } ?>
                                    
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">SubTotal</td>
                                        <td class="text-end">BDT <?= $cartdata->total ?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">Discount</td>
                                        <td class="text-end">BDT <?= $cartdata->discount ?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center f-w-600 active-color">Grand Total</td>
                                        <td class="f-w-600 text-end active-color">BDT <?= $cartdata->total - $cartdata->discount ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-lg-6 col-md-5 col-sm-5">
                                    <div class="payment-method mb-30">
                                        <h3 class="inv-title-1">Delivery To</h3>
                                        <h2 class="name"><?= $invdata->ship_first_name ?> <?= $invdata->ship_last_name ?></h2>
                                        <span>Phone: <?= $invdata->ship_phone ?></span><br/>
                                        <span>Email: <?= $invdata->ship_email ?></span><br/>
                                        <span>Address: <?= $invdata->ship_address ?>, <?= $invdata->ship_state ?>, <?= $invdata->ship_post ?></span>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-7">
                                    <div class="terms-conditions mb-30">
                                        <h3 class="inv-title-1">Terms & Conditions</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy has</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-contact clearfix">
                            <div class="row g-0">
                                <div class="col-sm-12">
                                    <div class="contact-info clearfix">
                                        <a href="tel:+55-4XX-634-7071" class="d-flex"><i class="fa fa-phone"></i> +00 123 647 840</a>
                                        <a href="tel:info@themevessel.com" class="d-flex"><i class="fa fa-envelope"></i> info@themevessel.com</a>
                                        <a href="tel:info@themevessel.com" class="mr-0 d-flex d-none-580"><i class="fa fa-map-marker"></i> 169 Teroghoria, Bangladesh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-download"></i> Download Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 2 end -->

</body>
</html>
