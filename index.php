<?php include_once('include/header.php') ?>

<!-- Start Hero Section -->
<div class="hero">
<div class="container">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= $baseurl ?>images/Carousel1.jpg" alt="Los Angeles" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block" style="position:absolute; top:131px">
        <div class="container">
            <div class="row justify-content-between" style="text-align:center">
                <div style="width:100%" class="col-lg-5">
                    <div class="intro-excerpt" style="max-width:100%">
                        <h2 style="font-weight:800; font-size:50px; color:#ffde01; border:3px solid; border-radius:10px">Modern Interior Design Studio</h2>
                        <h3 class="mb-4" style="color:white;font-weight:800; font-size:30px">Organize your life with us</h3>
                        <p style="margin-tom:36px"><a href="<?= $baseurl ?>shop.php" class="btn btn-secondary me-2">Shop Now</a><a style="color:white; background-color:green" href="<?= $baseurl ?>shop.php" class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="<?= $baseurl ?>images/Carousel2.jpg" alt="Los Angeles" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block" style="position:absolute; top:131px">
        <div class="container">
            <div class="row justify-content-between" style="text-align:center">
                <div style="width:100%" class="col-lg-5">
                    <div class="intro-excerpt" style="max-width:100%">
                        <h2 style="font-weight:800; font-size:50px; color:deepskyblue; border:3px solid; border-radius:10px">Compliments your lifestyle</h2>
                        <h3 class="mb-4" style="color:black;font-weight:800; font-size:30px">The expression of rest </h3>
                        <p style="margin-tom:36px"><a href="<?= $baseurl ?>shop.php" class="btn btn-secondary me-2">Shop Now</a><a style="color:white; background-color:green" href="<?= $baseurl ?>shop.php" class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    
      <div class="carousel-item">
        <img src="<?= $baseurl ?>images/Carousel3.jpg" alt="Los Angeles" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block" style="position:absolute; top:131px">
        <div class="container">
            <div class="row justify-content-between" style="text-align:center">
                <div style="width:100%" class="col-lg-5">
                    <div class="intro-excerpt" style="max-width:100%">
                        <h2 style="font-weight:800; font-size:45px; color:darkviolet; border:3px solid; border-radius:10px">Made for creating tasty memories </h2>
                        <h3 class="mb-4" style="color:#1fc32a;font-weight:800; font-size:30px">Bundle of satisfaction</h3>
                        <p style="margin-tom:36px"><a href="<?= $baseurl ?>shop.php" class="btn btn-secondary me-2">Shop Now</a><a style="color:white; background-color:green" href="<?= $baseurl ?>shop.php" class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
    
</div>
<!-- End Hero Section -->

<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
                <p><a href="<?= $baseurl ?>shop.php" class="btn">Explore</a></p>
            </div> 
            <!-- End Column 1 -->
            <?php 
                $result=$mysqli->common_select_query('SELECT items.*, catagory.name as cat FROM `items` join catagory on catagory.id=items.catagory_id WHERE items.deleted_at is null');
                if($result){
                    if($result['data']){
                        $i=1;
                        foreach($result['data'] as $data){
                            if($i < 3){
            ?>
                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0 text-center">
                    <a class="product-item" href="<?= $baseurl ?>product.php?id=<?= $data->id ?>">
                        <img style="height:300px" src="<?= $baseurl ?>admin/assets/items/<?= $data->photo ?>" class="img-fluid product-thumbnail">
                         </a>
                        <h5 class="product-title"><?= $data->product_name ?></h5>
                        <strong class="product-price">BDT <?= $data->price ?></strong><br/>
                        <button type="button" class="btn btn-info btn-sm" onclick="addToCart(<?= $data->id ?>)">Add To Cart</button>
                        
                </div> 
                <!-- End Column 2 -->
            <?php } } } } ?>
        </div>
    </div>
</div>
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">Why Choose Us</h2>
                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/truck.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Fast &amp; Free Shipping</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/bag.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Easy to Shop</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/support.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>24/7 Support</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/return.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Hassle Free Returns</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Footer -->
<?php include_once('include/footer.php') ?>
<!-- End Footer -->
