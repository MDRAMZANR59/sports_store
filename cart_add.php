<?php 
  session_start();
  require_once('include/connection.php');
  
  $con['id']=$_GET['id'];
  $result=$mysqli->common_select_single('items','*',$con);
  if($result){
    if($result['data']){
      if(isset($_SESSION['cart']['item'][$result['data']->id])){
        $_SESSION['cart']['item'][$result['data']->id]['qty']= $_SESSION['cart']['item'][$result['data']->id]['qty'] + 1;
      }else{
        $_SESSION['cart']['item'][$result['data']->id]['product_name']=$result['data']->product_name;
        $_SESSION['cart']['item'][$result['data']->id]['photo']=$result['data']->photo;
        $_SESSION['cart']['item'][$result['data']->id]['price']=$result['data']->price;
        $_SESSION['cart']['item'][$result['data']->id]['qty']=1;
      }
      cal_total();
      echo json_encode($_SESSION['cart']);
    }
  }

  function cal_total(){
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
  }
?>