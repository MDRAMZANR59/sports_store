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
$post_data['cus_name'] = $_POST['name'];
$post_data['cus_email'] = $_POST['email'];
$post_data['cus_add1'] = $_POST['address'];
$post_data['cus_add2'] = "Dhaka";
$post_data['cus_city'] = "Dhaka";
$post_data['cus_state'] = "Dhaka";
$post_data['cus_postcode'] = "1000";
$post_data['cus_country'] = "Bangladesh";
$post_data['cus_phone'] = $_POST['phone'];
$post_data['cus_fax'] = $_POST['phone'];

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
$post_data["product_category"] = "Ticket";
$post_data["product_profile"] = "general";
$post_data["product_name"] = "Ticket";
$post_data["num_of_item"] = $_SESSION['cart']['total_seat'];

# OPTIONAL PARAMETERS
// $post_data['value_a'] = "Regent Air";
// $post_data['value_b'] = "ref002";
// $post_data['value_c'] = "ref003";
// $post_data['value_d'] = "ref004";

# MANAGED TRANS
//$post_data['multi_card_name'] = "brac_visa,dbbl_visa,city_visa,ebl_visa,brac_master,dbbl_master,city_master,ebl_master,city_amex,qcash,dbbl_nexus,bankasia,abbank,ibbl,mtbl,city";
//$post_data['allowed_bin'] = "371598,371599,376947,376948,376949";
//$post_data['multi_card_name'] = "bankasia,mtbl,city";


# CART PARAMETERS
// $post_data['cart'] = json_encode(array(
//     array("sku" => "REF0001", "product" => "DHK TO BRS AC A1", "quantity" => "1", "amount" => "200.00"),
//     array("sku" => "REF0002", "product" => "DHK TO BRS AC A2", "quantity" => "1", "amount" => "200.00"),
//     array("sku" => "REF0003", "product" => "DHK TO BRS AC A3", "quantity" => "1", "amount" => "200.00"),
//     array("sku" => "REF0004", "product" => "DHK TO BRS AC A4", "quantity" => "2", "amount" => "200.00")
// ));

//$post_data['emi_max_inst_option'] = "9";
//$post_data['emi_selected_inst'] = "24";


//$post_data['product_amount'] = "0";
//$post_data['discount_amount'] = "5";
/*
$post_data['product_amount'] = "100";
$post_data['vat'] = "5";
$post_data['discount_amount'] = "5";
$post_data['convenience_fee'] = "3";
*/
//$post_data['discount_amount'] = "5";

//$post_data['multi_card_name'] = "brac_visa,brac_master";
//$post_data['allowed_bin'] = "408860,458763,489035,432147,432145,548895,545610,545538,432149,484096,484097,464573,539932,436475";

# RECURRING DATA
// $schedule = array(
//     "refer" => "5B90BA91AA3F2", # Subscriber id which generated in Merchant Admin panel
//     "acct_no" => "01730671731",
//     "type" => "daily", # Recurring Schedule - monthly,weekly,daily
//     //"dayofmonth"	=>	"24", 	# 1st day of every month
//     //"month"		=>	"8",	# 1st day of January for Yearly Recurring
//     //"week"	=>	"sat",	# In case, weekly recurring

// );


// $post_data["product_shipping_contry"] = "Bangladesh";
// $post_data["vip_customer"] = "YES";
// $post_data["hours_till_departure"] = "12 hrs";
// $post_data["flight_type"] = "Oneway";
// $post_data["journey_from_to"] = "DAC-CGP";
// $post_data["third_party_booking"] = "No";

// $post_data["hotel_name"] = "Sheraton";
// $post_data["length_of_stay"] = "2 days";
// $post_data["check_in_time"] = "24 hrs";
// $post_data["hotel_city"] = "Dhaka";


// $post_data["product_type"] = "Prepaid";
// $post_data["phone_number"] = "01711111111";
// $post_data["country_topUp"] = "Bangladesh";

// $post_data["shipToFirstName"] = "John";
// $post_data["shipToLastName"] = "Doe";
// $post_data["shipToStreet"] = "93 B, New Eskaton Road";
// $post_data["shipToCity"] = "Dhaka";
// $post_data["shipToState"] = "Dhaka";
// $post_data["shipToPostalCode"] = "1000";
// $post_data["shipToCountry"] = "Bangladesh";
// $post_data["shipToEmail"] = "john.doe@email.com";
// $post_data["ship_to_phone_number"] = "01711111111";

# SPECIAL PARAM
// $post_data['tokenize_id'] = "1";

# 1 : Physical Goods
# 2 : Non-Physical Goods Vertical(software)
# 3 : Airline Vertical Profile
# 4 : Travel Vertical Profile
# 5 : Telecom Vertical Profile

// $post_data["product_profile_id"] = "5";

// $post_data["topup_number"] = "01711111111"; # topUpNumber

# First, save the input data into local database table `orders`
$_POST['vehicle_id']=$_SESSION['cart']['vehicle_id'];
$_POST['schedule_id']=$_SESSION['cart']['schedule_id'];
$_POST['customer_id']="";
$_POST['total_amount']=$_SESSION['cart']['total'];
$_POST['total_seat']=$_SESSION['cart']['total_seat'];
$_POST['other_charge']=$_SESSION['cart']['other_charge'];
$_POST['discount']=$_SESSION['cart']['discount'];
$_POST['transaction_id']=$post_data['tran_id'];
$_POST['currency']=$post_data['currency'];
$_POST['created_at']=date('Y-m-d H:i:s');
$_POST['created_by']=1;
$rs=$mysqli->common_create('seat_book',$_POST);
if($rs){
    if($rs['data']){
        if($_SESSION['cart']['item']){
            foreach($_SESSION['cart']['item'] as $k => $v){
                $purd['vehicle_id']=$_SESSION['cart']['vehicle_id'];
                $purd['schedule_id']=$_SESSION['cart']['schedule_id'];
                $purd['seat_book_id']=$rs['data'];
                $purd['seat_id']=$v['seat_id'];
                $purd['price']=$v['price'];
                $purd['created_at']=date("Y-m-d H:i:s");
                $purd['created_by']=$_SESSION['id'];
                $prs=$mysqli->common_create('seat_book_details',$purd);
            }
        }
        unset($_SESSION['cart']);
        # Call the Payment Gateway Library
        $sslcz = new SslCommerzNotification();
        $msg = $sslcz->makePayment($post_data, 'hosted');
        if (!is_array($msg)) {
            echo $msg;
        }
    }else{
        echo $rs['error'];
    }
}


