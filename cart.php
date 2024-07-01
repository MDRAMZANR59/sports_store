<?php include_once('include/header.php') ?>
<div class="untree_co-section before-footer-section">
  <div class="container">
    <div class="row mb-5">
      <form class="col-md-12" method="post">
        <div class="site-blocks-table">
          <table class="table">
            <thead>
              <tr>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-total">Total</th>
                <th class="product-remove">Remove</th>
              </tr>
            </thead>
            <tbody class="cart_data">
              
            </tbody>
          </table>
        </div>
      </form>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <label class="text-black h4" for="coupon">Coupon</label>
            <p>Enter your coupon code if you have one.</p>
          </div>
          <div class="col-md-7 mb-3 mb-md-0">
            <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
          </div>
          <div class="col-md-5">
            <button class="btn btn-black">Apply Coupon</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 pl-5">
        <div class="row justify-content-end">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-12 text-right border-bottom mb-5">
                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <span class="text-black">Subtotal</span>
              </div>
              <div class="col-md-6 text-right">
                <strong class="text-black">$230.00</strong>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6">
                <span class="text-black">Total</span>
              </div>
              <div class="col-md-6 text-right">
                <strong class="text-black">$230.00</strong>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- Start Footer Section -->
<?php include_once('include/footer.php')?>

<script>
  let cart_data=<?= json_encode($_SESSION['cart']) ?>;
  
  writeProduct(cart_data)
  function writeProduct(data){
    let tbodydata="";
    if(data.item !=""){
      for (const [key, value] of Object.entries(data.item)) {
        tbodydata+=`<tr>
                    <td class="product-thumbnail">
                      <img src="<?= $baseurl ?>admin/assets/items/${value.photo}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">${value.product_name}</h2>
                    </td>
                    <td>BDT ${value.price}</td>
                    <td>
                      <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button onclick="updateCart(${key},'out')" class="btn btn-outline-black decrease" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center quantity-amount" value="${value.qty}" placeholder="">
                        <div class="input-group-append">
                          <button onclick="updateCart(${key},'in')" class="btn btn-outline-black increase" type="button">&plus;</button>
                        </div>
                      </div>
                    </td>
                    <td>BDT ${value.price * value.qty}</td>
                    <td><a href="javascript:void(0)" onclick="deleteCart(${key})" class="btn btn-black btn-sm">X</a></td>
                  </tr>`;
      }
    }else{
      tbodydata=`<tr>
                    <td colspan="6">
                      Please add product to cart
                    </td>
                  </tr>`;
    }
    $('.cart_data').html(tbodydata)
  }

  function updateCart(id,type){
    $.get('cart_update.php',
      { id : id,type:type},
      function(data){
        if(data){
          data=JSON.parse(data);
          writeProduct(data)
        }
      }
    )
  }
  function deleteCart(id){
    $.get('cart_delete.php',
      { id : id},
      function(data){
        if(data){
          data=JSON.parse(data);
          writeProduct(data)
        }
      }
    )
  }
</script>