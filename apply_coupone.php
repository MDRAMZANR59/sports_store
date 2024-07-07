<?php 
  session_start();
  require_once('include/connection.php');
  $con['cupon_code']=$_GET['cupon_code'];
  $result=$mysqli->common_select_single('coupon','*',$con);

  if($result){
    if($result['data']){
      if($result['data']->discount > 0){
        $_SESSION['cart']['cupon']=$result['data']->cupon_code;
        $_SESSION['cart']['discount']=$_SESSION['cart']['total'] * ($result['data']->discount/100);
      }
    }
  }
  
  
  echo json_encode($_SESSION['cart']);
  
?>