<?php include_once('include/header.php') ?>

<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">
                    
<div class="container mt-3">
  <h2>Toggleable Pills</h2>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="pill" href="#home">Home Accesorice</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#office">Office Accesorice</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#store">Store Accesorice</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="office" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="store" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
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
                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" onclick="addToCart(<?= $data->id ?>)" href="javascript:void(0)">
                        <img style="height:300px;" src="<?= $baseurl ?>admin/assets/items/<?= $data->photo ?>" class="img-fluid product-thumbnail">
                        <h3 class="product-title"><?= $data->product_name ?></h3>
                        <strong class="product-price">BDT <?= $data->price ?></strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div> 
                <!-- End Column 2 -->
            <?php } } } } ?>
					<!-- End Column -->

		      	</div>
		    </div>
		</div>
<?php include_once('include/footer.php')?>

