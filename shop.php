<?php include_once('include/header.php') ?>

<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

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
                        <img src="<?= $baseurl ?>admin/assets/items/<?= $data->photo ?>" class="img-fluid product-thumbnail">
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

