<?php include_once('include/header.php') ?>
<div class="container mt-4">
    <article class="card">
        <header class="card-header">My Orders / Tracking</header>
        <div class="card-body">
            <h6>Order ID: OD45345345435</h6>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Estimated Delivery time:</strong> <br>29 Nov 2019 </div>
                    <div class="col"> <strong>Shipping BY:</strong> <br> BLUEDART | <span class="fa fa-phone"></span> +1598675986 </div>
                    <div class="col"> <strong>Status:</strong> <br>Picked by the courier </div>
                    <div class="col"> <strong>Tracking #:</strong> <br> BD045903594059 </div>
                </div>
            </article>
            <div class="track">
                <div class="step active"> 
                    <span class="icon"> <span class="fa fa-check"></span> </span> 
                    <span class="text">Order confirmed</span> 
                </div>
                <div class="step active"> 
                    <span class="icon"> <span class="fa fa-user"></span> </span> 
                    <span class="text">Picked by courier</span> 
                </div>
                <div class="step"> 
                    <span class="icon"> <span class="fa fa-truck"></span> </span> 
                    <span class="text">On the way</span> 
                </div>
                <div class="step"> 
                    <span class="icon"> <span class="fa fa-box"></span> </span> 
                    <span class="text">Ready for pickup</span> 
                </div>
            </div>
            <hr>
            <ul class="row">
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="" class="img-fluid border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">Dell Laptop with 500GB HDD <br> 8GB RAM</p> 
                            <span class="text-muted">$950</span>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="" class="img-fluid border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">HP Laptop with 500GB HDD <br> 8GB RAM</p> 
                            <span class="text-muted">$850</span>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="" class="img-fluid border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">ACER Laptop with 500GB HDD <br> 8GB RAM</p> 
                            <span class="text-muted">$650</span>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <hr>
            <a href="#" class="btn btn-warning" data-abc="true"> <span class="fa fa-chevron-left"></span> Back to orders</a>
        </div>
    </article>
</div>
<?php include_once('include/footer.php')?>
