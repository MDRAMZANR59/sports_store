<?php include_once('include/header.php') ?>

	<!-- Start Hero Section -->
		<div class="hero">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="intro-excerpt">
							<h1>Checkout</h1>
						</div>
					</div>
					<div class="col-lg-7">
						
					</div>
				</div>
			</div>
		</div>
	<!-- End Hero Section -->

		<div class="untree_co-section">
		    <div class="container">
				<form action="" method="post">
					<div class="row mb-5">
						<div class="col-md-12">
						<div class="border p-4 rounded" role="alert">
							Returning customer? <a href="#">Click here</a> to login
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-5 mb-md-0">
						<h2 class="h3 mb-3 text-black">Billing Details</h2>
						<div class="p-3 p-lg-5 border bg-white">
							<div class="form-group">
							<label for="bill_country" class="text-black">Country <span class="text-danger">*</span></label>
							<select required="" id="bill_country" name="bill_country" class="form-control">
								<option value="0">Select a country</option>    
								<option value="2">bangladesh</option>    
								<option value="3">Algeria</option>    
								<option value="4">Afghanistan</option>    
								<option value="5">Ghana</option>    
								<option value="6">Albania</option>    
								<option value="7">Bahrain</option>    
								<option value="8">Colombia</option>    
								<option value="9">Dominican Republic</option>    
							</select>
							</div>
							<div class="form-group row">
							<div class="col-md-6">
								<label for="bill_first_name" class="text-black">First Name <span class="text-danger">*</span></label>
								<input required="" type="text" class="form-control" id="bill_first_name" name="bill_first_name">
							</div>
							<div class="col-md-6">
								<label for="bill_last_name" class="text-black">Last Name <span class="text-danger">*</span></label>
								<input required="" type="text" class="form-control" id="bill_last_name" name="bill_last_name">
							</div>
							</div>

							<div class="form-group row">
							<div class="col-md-12">
								<label for="bill_company_name" class="text-black">Company Name </label>
								<input required="" type="text" class="form-control" id="bill_company_name" name="bill_company_name">
							</div>
							</div>

							<div class="form-group row">
							<div class="col-md-12">
								<label for="bill_address" class="text-black">Address <span class="text-danger">*</span></label>
								<input required="" type="text" class="form-control" id="bill_address" name="bill_address" placeholder="Street address">
							</div>
							</div>

							<div class="form-group mt-3">
							<input required="" type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<label for="bill_state" class="text-black">State / Country <span class="text-danger">*</span></label>
									<input required="" type="text" class="form-control" id="bill_state" name="bill_state">
								</div>
								<div class="col-md-6">
									<label for="bill_post" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
									<input required="" type="text" class="form-control" id="bill_post" name="bill_post">
								</div>
							</div>

							<div class="form-group row mb-5">
							<div class="col-md-6">
								<label for="bill_email" class="text-black">Email Address <span class="text-danger">*</span></label>
								<input required="" type="text" class="form-control" id="bill_email" name="bill_email">
							</div>
							<div class="col-md-6">
								<label for="bill_phone" class="text-black">Phone <span class="text-danger">*</span></label>
								<input required="" type="text" class="form-control" id="bill_phone" name="bill_phone" placeholder="Phone Number">
							</div>
							</div>

							
							<div class="form-group">
							<label for="c_ship_different_address" class="text-black" data-bs-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
							<div class="collapse" id="ship_different_address">
								<div class="py-2">

								<div class="form-group">
									<label for="ship_country" class="text-black">Country <span class="text-danger">*</span></label>
									<select id="ship_country" name="ship_country" class="form-control">
										<option value="1">Select a country</option>    
										<option value="2">bangladesh</option>    
										<option value="3">Algeria</option>    
										<option value="4">Afghanistan</option>    
										<option value="5">Ghana</option>    
										<option value="6">Albania</option>    
										<option value="7">Bahrain</option>    
										<option value="8">Colombia</option>    
										<option value="9">Dominican Republic</option>    
									</select>
								</div>


								<div class="form-group row">
									<div class="col-md-6">
										<label for="ship_first_name" class="text-black">First Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="ship_first_name" name="ship_first_name">
									</div>
									<div class="col-md-6">
										<label for="ship_last_name" class="text-black">Last Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="ship_last_name" name="ship_last_name">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-12">
										<label for="ship_company_name" class="text-black">Company Name </label>
										<input type="text" class="form-control" id="ship_company_name" name="ship_company_name">
									</div>
								</div>

								<div class="form-group row  mb-3">
									<div class="col-md-12">
										<label for="ship_address" class="text-black">Address <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="ship_address" name="ship_address" placeholder="Street address">
									</div>
								</div>

								<div class="form-group">
									<input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
								</div>

								<div class="form-group row">
									<div class="col-md-6">
										<label for="ship_state" class="text-black">State / Country <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="ship_state" name="ship_state">
									</div>
									<div class="col-md-6">
										<label for="ship_post" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="ship_post" name="ship_post">
									</div>
								</div>

								<div class="form-group row mb-5">
									<div class="col-md-6">
										<label for="ship_email" class="text-black">Email Address <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="ship_email" name="ship_email">
									</div>
									<div class="col-md-6">
										<label for="ship_phone" class="text-black">Phone <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="ship_phone" name="ship_phone" placeholder="Phone Number">
									</div>
								</div>

								</div>

							</div>
							</div>

							<div class="form-group">
								<label for="notes" class="text-black">Order Notes</label>
								<textarea name="notes" id="notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
							</div>

						</div>
						</div>
						<div class="col-md-6">
							<div class="row mb-5">
								<div class="col-md-12">
								<h2 class="h3 mb-3 text-black">Your Order</h2>
								<div class="p-3 p-lg-5 border bg-white">
									<table class="table site-block-order-table mb-5">
									<thead>
										<th>Product</th>
										<th>Total</th>
									</thead>
									<tbody>
										<tr>
										<td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
										<td>$250.00</td>
										</tr>
										<tr>
										<td>Polo Shirt <strong class="mx-2">x</strong>   1</td>
										<td>$100.00</td>
										</tr>
										<tr>
										<td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
										<td class="text-black">$350.00</td>
										</tr>
										<tr>
										<td class="text-black font-weight-bold"><strong>Order Total</strong></td>
										<td class="text-black font-weight-bold"><strong>$350.00</strong></td>
										</tr>
									</tbody>
									</table>

									<div class="border p-3 mb-3">
									<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

									<div class="collapse" id="collapsebank">
										<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
									</div>

									<div class="border p-3 mb-3">
									<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

									<div class="collapse" id="collapsecheque">
										<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
									</div>

									<div class="border p-3 mb-5">
									<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

									<div class="collapse" id="collapsepaypal">
										<div class="py-2">
										<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
									</div>

									<div class="form-group">
									<button class="btn btn-black btn-lg py-3 btn-block" type="submit">Place Order</button>
									</div>

								</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<?php 
					if($_POST){
						$_POST['cart_data']=base64_encode(json_encode($_SESSION['cart']));
						$_POST['total_amount']=$_SESSION['cart']['total'];
						$_POST['discount']=$_SESSION['cart']['discount'];
						$_POST['total_qty']=$_SESSION['cart']['total_qty'];
						$_POST['coupon_code']=$_SESSION['cart']['cupon'];
						$_POST['created_at']=date('Y-m-d H:i:s');
						$_POST['created_by']=1;
						$rs=$mysqli->common_create('orders',$_POST);
						if($rs){
							if($rs['data']){
								unset($_SESSION['cart']);
								echo "<script>window.location='{$baseurl}thankyou.php'</script>";
							}else{
								echo $rs['error'];
							}
						}
					}
				?>
		      <!-- </form> -->
		    </div>
		  </div>

		<!-- Start Footer Section -->
<?php include_once('include/footer.php')?>