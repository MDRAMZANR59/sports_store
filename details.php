<?php include_once('include/header.php') ?>
<body>
<?php 
    $result=$mysqli->common_select_query('SELECT items.*, catagory.name as cat FROM `items` join catagory on catagory.id=items.catagory_id WHERE items.deleted_at is null');
    if($result){
        if($result['data']){
            $i=1;
            foreach($result['data'] as $data){
                if($i < 3){
?>

<!-- content -->
<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class="border rounded-4 mb-3 d-flex justify-content-center">
          <a data-bs-toggle="lightbox" data-type="image" href=" <?= $data->photo ?>">
            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="" alt="Main Image"/>
          </a>
        </div>
        <!-- thumbs-wrap.// -->
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
          <?= $data->product_name?>
          </h4>
          <div class="d-flex flex-row my-3">
            <div class="text-warning mb-1 me-2">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span class="ms-1">4.5</span>
            </div>
            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
            <span class="text-success ms-2">In stock</span>
          </div>

          <div class="mb-3">
            <span class="h5">BDT <?= $data->price ?></span>
            <span class="text-muted">/Per Pcs</span>
          </div>

          <p>
          <?= $data->details ?>
          </p>

          <div class="row">
            <dt class="col-3">Color</dt>
            <dd class="col-9"><?= $data->color ?></dd>

            <dt class="col-3">Material</dt>
            <dd class="col-9"> <?= $data->material ?></dd>

            <dt class="col-3">Brand</dt>
            <dd class="col-9"> <?= $data->company_name ?></dd>
          </div>
          <hr />
          <br />
          <br />
          <br />

        </div>
      </main>
    </div>
  </div>
</section>
<?php } } } } ?>
<!-- content -->
 <?php include_once('include/footer.php')?>