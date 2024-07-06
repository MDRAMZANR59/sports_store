<?php 
  session_start();

  $id=$_GET['id'];
  $type=$_GET['type'];
  if(isset($_SESSION['cart']['item'][$id])){
    if($type=='in')
      $_SESSION['cart']['item'][$id]['qty']= $_SESSION['cart']['item'][$id]['qty'] + 1;
    else{
      if($_SESSION['cart']['item'][$id]['qty'] > 1){
        $_SESSION['cart']['item'][$id]['qty']= $_SESSION['cart']['item'][$id]['qty'] - 1;
      }
    }
  }
  $total_price=$total_qty=0;
  if(isset($_SESSION['cart']['item']) and $_SESSION['cart']['item']){
    foreach($_SESSION['cart']['item'] as $item){
      $total_price+=$item['qty'] * $item['price'];
      $total_qty+=$item['qty'];
    }
  }
  $_SESSION['cart']['total']=$total_price;
  $_SESSION['cart']['discount']=0;
  $_SESSION['cart']['cupon']="";
  $_SESSION['cart']['total_qty']=$total_qty;
  
  echo json_encode($_SESSION['cart']);
  
?>