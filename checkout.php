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
		<?php if(isset($_SESSION['cart'])){ ?>
		<form action="sslcmz.php" method="post">
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
								<option value="2" <?= $_SESSION['user_data']->country == 2 ? "selected":"" ?>>bangladesh</option>    
								<option value="3" <?= $_SESSION['user_data']->country == 3 ? "selected":"" ?>>Algeria</option>    
								<option value="4" <?= $_SESSION['user_data']->country == 4 ? "selected":"" ?>>Afghanistan</option>    
								<option value="5" <?= $_SESSION['user_data']->country == 5 ? "selected":"" ?>>Ghana</option>    
								<option value="6" <?= $_SESSION['user_data']->country == 6 ? "selected":"" ?>>Albania</option>    
								<option value="7" <?= $_SESSION['user_data']->country == 7 ? "selected":"" ?>>Bahrain</option>    
								<option value="8" <?= $_SESSION['user_data']->country == 8 ? "selected":"" ?>>Colombia</option>    
								<option value="9" <?= $_SESSION['user_data']->country == 9 ? "selected":"" ?>>Dominican Republic</option>     
							</select>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="bill_first_name" class="text-black">First Name <span class="text-danger">*</span></label>
								<input value="<?= $_SESSION['user_data']->first_name ?>" required="" type="text" class="form-control" id="bill_first_name" name="bill_first_name">
							</div>
							<div class="col-md-6">
								<label for="bill_last_name" class="text-black">Last Name <span class="text-danger">*</span></label>
								<input value="<?= $_SESSION['user_data']->last_name ?>" required="" type="text" class="form-control" id="bill_last_name" name="bill_last_name">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<label for="bill_company_name" class="text-black">Company Name </label>
								<input value="<?= $_SESSION['user_data']->company_name ?>" required="" type="text" class="form-control" id="bill_company_name" name="bill_company_name">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<label for="bill_address" class="text-black">Address <span class="text-danger">*</span></label>
								<input value="<?= $_SESSION['user_data']->address ?>" required="" type="text" class="form-control" id="bill_address" name="bill_address" placeholder="Street address">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="bill_state" class="text-black">State / Country <span class="text-danger">*</span></label>
								<input value="<?= $_SESSION['user_data']->state ?>" required="" type="text" class="form-control" id="bill_state" name="bill_state">
							</div>
							<div class="col-md-6">
								<label for="bill_post" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
								<input value="<?= $_SESSION['user_data']->post ?>" required="" type="text" class="form-control" id="bill_post" name="bill_post">
							</div>
						</div>

						<div class="form-group row mb-5">
							<div class="col-md-6">
								<label for="bill_email" class="text-black">Email Address <span class="text-danger">*</span></label>
								<input value="<?= $_SESSION['user_data']->email ?>" required="" type="text" class="form-control" id="bill_email" name="bill_email">
							</div>
							<div class="col-md-6">
								<label for="bill_phone" class="text-black">Phone <span class="text-danger">*</span></label>
								<input value="<?= $_SESSION['user_data']->phone ?>" required="" type="text" class="form-control" id="bill_phone" name="bill_phone" placeholder="Phone Number">
							</div>
						</div>

						
						<div class="form-group">
							<label for="c_ship_different_address" class="text-black" data-bs-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
							<div class="collapse" id="ship_different_address">
								<div class="py-2">
									<div class="form-group">
										<label for="ship_country" class="text-black">Country <span class="text-danger">*</span></label>
										<select id="ship_country" name="ship_country" class="form-control">
											<option value="2" <?= $_SESSION['user_data']->country == 2 ? "selected":"" ?>>bangladesh</option>    
											<option value="3" <?= $_SESSION['user_data']->country == 3 ? "selected":"" ?>>Algeria</option>    
											<option value="4" <?= $_SESSION['user_data']->country == 4 ? "selected":"" ?>>Afghanistan</option>    
											<option value="5" <?= $_SESSION['user_data']->country == 5 ? "selected":"" ?>>Ghana</option>    
											<option value="6" <?= $_SESSION['user_data']->country == 6 ? "selected":"" ?>>Albania</option>    
											<option value="7" <?= $_SESSION['user_data']->country == 7 ? "selected":"" ?>>Bahrain</option>    
											<option value="8" <?= $_SESSION['user_data']->country == 8 ? "selected":"" ?>>Colombia</option>    
											<option value="9" <?= $_SESSION['user_data']->country == 9 ? "selected":"" ?>>Dominican Republic</option>     
										</select>
									</div>
									<div class="form-group row">
										<div class="col-md-6">
											<label for="ship_first_name" class="text-black">First Name <span class="text-danger">*</span></label>
											<input value="<?= $_SESSION['user_data']->first_name ?>" type="text" class="form-control" id="ship_first_name" name="ship_first_name">
										</div>
										<div class="col-md-6">
											<label for="ship_last_name" class="text-black">Last Name <span class="text-danger">*</span></label>
											<input value="<?= $_SESSION['user_data']->last_name ?>" type="text" class="form-control" id="ship_last_name" name="ship_last_name">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-12">
											<label for="ship_company_name" class="text-black">Company Name </label>
											<input value="<?= $_SESSION['user_data']->company_name ?>" type="text" class="form-control" id="ship_company_name" name="ship_company_name">
										</div>
									</div>
									<div class="form-group row  mb-3">
										<div class="col-md-12">
											<label for="ship_address" class="text-black">Address <span class="text-danger">*</span></label>
											<input value="<?= $_SESSION['user_data']->address ?>" type="text" class="form-control" id="ship_address" name="ship_address" placeholder="Street address">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-6">
											<label for="ship_state" class="text-black">State / Country <span class="text-danger">*</span></label>
											<input type="text" value="<?= $_SESSION['user_data']->state ?>" class="form-control" id="ship_state" name="ship_state">
										</div>
										<div class="col-md-6">
											<label for="ship_post" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
											<input type="text" value="<?= $_SESSION['user_data']->post ?>" class="form-control" id="ship_post" name="ship_post">
										</div>
									</div>
									<div class="form-group row mb-5">
										<div class="col-md-6">
											<label for="ship_email" class="text-black">Email Address <span class="text-danger">*</span></label>
											<input type="text" value="<?= $_SESSION['user_data']->email ?>" class="form-control" id="ship_email" name="ship_email">
										</div>
										<div class="col-md-6">
											<label for="ship_phone" class="text-black">Phone <span class="text-danger">*</span></label>
											<input type="text" value="<?= $_SESSION['user_data']->phone ?>" class="form-control" id="ship_phone" name="ship_phone" placeholder="Phone Number">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="notes" class="text-black">Order Notes</label>
							<textarea name="notes" id="notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
						</div>
						<div class="form-group">
							<label for="notes" class="text-black">Payment </label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="payment_method" id="COD" value="COD">
								<label class="form-check-label" for="COD">
									COD
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" value="Online Payment" type="radio" name="payment_method" id="OP" checked>
								<label class="form-check-label" for="OP">
									Online Payment
								</label>
							</div>
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
										<?php foreach($_SESSION['cart']['item'] as $item){ ?>
												<tr>
													<td><?= $item['product_name'] ?> <strong class="mx-2"><?= $item['qty'] ?></strong></td>
													<td>BDT <?= $item['price'] ?></td>
												</tr>
										<?php } ?>
												<tr>
													<td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
													<td class="text-black">BDT <?= $_SESSION['cart']['total'] ?></td>
												</tr>
												<tr>
													<td class="text-black font-weight-bold"><strong>Discount</strong></td>
													<td class="text-black">BDT <?= $_SESSION['cart']['discount'] ?></td>
												</tr>
												<tr>
													<td class="text-black font-weight-bold"><strong>Order Total</strong></td>
													<td class="text-black">BDT <?= $_SESSION['cart']['total'] - $_SESSION['cart']['discount'] ?></td>
												</tr>
									</tbody>
								</table>

								<div class="form-group">
									<button class="btn btn-black btn-lg py-3 btn-block" type="submit">Place Order</button>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		
		<?php }else{ ?>
			<h1>Please add product to cart first.</h1>
		<?php } ?>
		<!-- </form> -->
	</div>
</div>

<!-- Start Footer Section -->
<?php include_once('include/footer.php')?>