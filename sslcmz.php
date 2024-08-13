<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

# This is a sample page to understand how to connect payment gateway

require_once(__DIR__ . "/sslcmz/lib/SslCommerzNotification.php");

include("include/connection.php");

use SslCommerz\SslCommerzNotification;

# Organize the submitted/inputted data
$post_data = array();

$post_data['total_amount'] = $_SESSION['cart']['total'];
$post_data['currency'] = "BDT";
$post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();

# CUSTOMER INFORMATION
$post_data['cus_name'] = $_POST['first_name']." ".$_POST['last_name'];
$post_data['cus_email'] = $_POST['bill_email'];
$post_data['cus_add1'] = $_POST['bill_address'];
$post_data['cus_add2'] = $_POST['bill_state'];
$post_data['cus_city'] = $_POST['bill_state'];
$post_data['cus_state'] = $_POST['bill_state'];
$post_data['cus_postcode'] =$_POST['bill_post'];
$post_data['cus_country'] = $_POST['bill_country'];
$post_data['cus_phone'] = $_POST['bill_phone'];
$post_data['cus_fax'] = $_POST['bill_phone'];

# SHIPMENT INFORMATION
$post_data["shipping_method"] = "NO";
$post_data['ship_name'] = "Tickf0";
$post_data['ship_add1'] = "Chattogram";
$post_data['ship_add2'] = "Chattogram";
$post_data['ship_city'] = "Chattogram";
$post_data['ship_state'] = "Chattogram";
$post_data['ship_postcode'] = "1000";
$post_data['ship_phone'] = "";
$post_data['ship_country'] = "Bangladesh";

$post_data['emi_option'] = "1";
$post_data["product_category"] = "furniture";
$post_data["product_profile"] = "general";
$post_data["product_name"] = "furniture";
$post_data["num_of_item"] = $_SESSION['cart']['total_qty'];

$_POST['cart_data']=base64_encode(json_encode($_SESSION['cart']));
$_POST['total_amount']=$_SESSION['cart']['total'];
$_POST['discount']=$_SESSION['cart']['discount'];
$_POST['total_qty']=$_SESSION['cart']['total_qty'];
$_POST['coupon_code']=$_SESSION['cart']['cupon'];
$_POST['transaction_id']=$post_data['tran_id'];
$_POST['created_at']=date('Y-m-d H:i:s');
$_POST['created_by']=1;
$rs=$mysqli->common_create('orders',$_POST);
if($rs){
    if($rs['data']){
        if($_SESSION['cart']['item']){
            foreach($_SESSION['cart']['item'] as $k => $v){
                $purs['sales_id']=$rs['data'];
                $purs['item_id']=$k;
                $purs['qty']="-".$v['qty'];
                $purs['price']=$v['price'];
                $purs['stock_date']=date("Y-m-d H:i:s");
                $purs['created_at']=date("Y-m-d H:i:s");
                $purs['created_by']=1;
                $srs=$mysqli->common_create('stock',$purs);
            }
        }
        unset($_SESSION['cart']);
        $sslcz = new SslCommerzNotification();
        $msg = $sslcz->makePayment($post_data, 'hosted');
        if (!is_array($msg)) {
            echo $msg;
        }
    }else{
        echo $rs['error'];
    }
}
