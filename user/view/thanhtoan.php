<?php require_once('layout/header.php'); ?>
<div class="container-fluid" style="" id="body-page">
	<div class="row mt-2" id="process-bar">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="ml-2 col-md-3" id="">
						<p>Giỏ hàng của tôi</p>
						<div id="circle"><span class="center">1</span></div>
						
					</div>
					<div class="ml-2 col-md-3" id="">
						<p>Thanh toán</p>
						<div id="circle"><span class="center">1</span></div>
						
					</div>
					<div class="ml-2 col-md-3" id="step">
						<p>Hoàn tất</p>
						<div id="circle"><span class="center">1</span></div>
						
					</div>
					</div>
				</div>
				<div class="col-md-2"></div>
	</div>
	<div class="row mt-2">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="row mt-2">
				<div class="col-md-4" id="pay-col">			
					<div class="row" id="pay-header">
						<p class="pl-2 pt-2">1. ĐỊA CHỈ THANH TOÁN VÀ GIAO HÀNG</p>
					</div>	
					<div class="p-3">
						<?php foreach ($user as $key => $value) {?>
							<p class="row pl-2">Thông tin thanh toán</p>
								<div class="row pl-2">
									<p >Người nhận:</p>
									 <b class="pl-2"><?php echo $value['full_name'] ?></b>
								</div>
								<div class="row pl-2">
									<p>Điện thoại:</p>
									 <b class="pl-2"><?php echo $value['phone'] ?></b>
								</div>
								<div class="row pl-2">
									<p>Email:</p>
									 <b class="pl-2"><?php echo $value['email'] ?></b>
								</div>
								<div class="row pl-2">
									<p>Địa chỉ:</p>
									 <b class="pl-2"><?php echo $value['address'] ?></b>
								</div>				
						
					</div>
				</div>
				
				<div class="col-md-4" id="pay-col">		
						<div class="row" id="pay-header">
							<p class="pl-2 pt-2">2. THANH TOÁN VÀ VẬN CHUYỂN</p>
						</div>
						<div class="p-3">

							<p class="row pl-2">Vận chuyển </p>
							<select class="col-md-12 select-categories" id="ship-area">
								<option>Nội thành Hà Nội</option>
								<option>Các tỉnh khác</option>
							</select>
							<p class="row pl-2 mt-3">Vận chuyển </p>
							<div class="form-check">
							  <input class="form-check-input" type="radio"checked>
							  <label class="form-check-label">
							    Thanh toán online bằng thẻ ATM nội địa 
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio">
							  <label class="form-check-label">
							    Thanh toán khi giao hàng (COD) 
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio">
							  <label class="form-check-label">
							    Chuyển khoản qua ngân hàng
							  </label>
							</div>
						</div>
				</div>
				<?php } ?>
				<div class="col-md-4" id="pay-col">
					<div class="row" id="pay-header">
							<p class="pl-2 pt-2">3. THÔNG TIN ĐƠN HÀNG</p>
					</div>
					<div class="p-3" id="bill">
						<div id="pd-item">
							<?php foreach ($pd as $key => $value) {?>
								<img id="anh-cart" src="<?php echo $value['img_main']?>">
								<p><a href="" id="pd-name"><?php echo $value['name']?></a> x 1</p>
							<p class="text-right"><?php echo number_format($value['price'])?>đ</p>
							<?php } ?>
						</div>	
						<hr>
						<div class="row">
							<b class="">Thành tiền</b>
							<div class="col-md-6"></div>
							<b class="col-md-4 text-right">245.000đ</b>
						</div>
						<hr>
						<div class="row">
							<b>Phí vận chuyển</b>
							<div class="col-md-5"></div>
							<b class="col-md-4 text-right">30.000đ</b>
						</div>
						<hr>
						<div class="row" id="final">
							<b>THANH TOÁN</b>
							<div class="col-md-5"></div>
							<b class="col-md-4 text-right" id="final-price">323.000đ</b>
						</div>
						<hr>
						<div class="row">
						<div class="col-md-8"></div>	
						<div class="col-md-4 text-right">
							<a href="" class=" btn btn-default" id="confirm">ĐẶT HÀNG</a>
						</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>	
	
</div>

<?php require_once('layout/footer.php'); ?>