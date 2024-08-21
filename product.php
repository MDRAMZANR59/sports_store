<?php include_once('include/header.php') ?>
<body>
<?php 
    $id=$_GET['id'];
    $result=$mysqli->common_select_query("SELECT items.*, catagory.name as cat FROM `items` join catagory on catagory.id=items.catagory_id WHERE items.deleted_at is null and items.id=$id");
    if($result){
      if($result['data']){
        foreach($result['data'] as $data){
?>
<!-- content -->
<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class="border rounded-4 mb-3 d-flex justify-content-center">
          <a data-bs-toggle="lightbox" data-type="image" href="<?= $baseurl ?>admin/assets/items/<?= $data->photo ?>">
            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="<?= $baseurl ?>admin/assets/items/<?= $data->photo ?>" alt="Main Image"/>
          </a>
        </div>
        <!-- thumbs-wrap.// -->
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
          <?= $data->product_name?>
          </h4>
<?php  } } } ?>

<?php 
    $id=$_GET['id'];
    $result=$mysqli->common_select_query("SELECT items.*, catagory.name as cat FROM `items` join catagory on catagory.id=items.catagory_id WHERE items.deleted_at is null and items.id=$id");
    if($result){
      if($result['data']){
        foreach($result['data'] as $data){
?>
          <div class="mb-3">
            <span class="h5">BDT <?= $data->price ?></span>
            <span class="text-muted">/Per Pcs</span>
          </div>

          <p>
            <?= $data->details ?>
          </p>

          <div class="row">
            <dt class="col-3">Brand</dt>
            <dd class="col-9"> <?= $data->company_name ?></dd>
          </div>
          <hr />
          <button type="button" class="btn btn-info btn-sm" onclick="addToCart(<?= $data->id ?>)">Add To Cart</button>
          <br />
          <br />
          <br />

        </div>
      </main>
    </div>
  </div>
</section>
<?php  } } } ?>
<!-- content -->
 <?php include_once('include/footer.php')?>