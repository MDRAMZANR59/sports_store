<?php include_once('include/header.php') ?>

<div class="">
	<div class="container mt-3">
		<div class="row">
      <div class="col-12">
          <h2>All Product</h2>
      </div>
      <!-- Start Column -->
      <?php 
          $result=$mysqli->common_select_query('SELECT items.*, catagory.name as cat FROM `items` join catagory on catagory.id=items.catagory_id WHERE items.deleted_at is null');
          if($result){
              if($result['data']){
                  $i=1;
                  foreach($result['data'] as $data){
                      if($i < 3){
      ?>
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <div class="border m-1 pb-2">
            <a class="product-item text-decoration-none" href="<?= $baseurl ?>product.php?id=<?= $data->id ?>">
              <img style="height:300px;" src="<?= $baseurl ?>admin/assets/items/<?= $data->photo ?>" class="img-fluid product-thumbnail">
              <b class="product-title"><?= $data->product_name ?></b>
            </a>
            <div class="d-flex">
              <div class="flex-fill"><strong class="product-price">BDT <?= $data->price ?></strong></div>
              <div class="flex-fill"><button type="button" class="btn btn-info btn-sm" onclick="addToCart(<?= $data->id ?>)">Add To Cart</button></div>
            </div>
          </div>
        </div> 
      <!-- End Column 2 -->
      <?php } } } } ?>
    </div>
  </div>
</div>
<?php include_once('include/footer.php')?>

