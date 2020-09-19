<?php require_once('layout/header.php'); ?>
<div class="row mt-2" id="body-page">
	<div id="left-page" class="mt-1 col-md-2">
		<div class="col-md-12  p-0" id="catalog">
			<div class="row m-0" id="product-logo">
				<h5  id="title-logo" class="center pt-2 m-0 col-md-2"><i class="fas fa-bars"></i></h5>
				 <p class="m-2">TẤT CẢ DANH MỤC</p> 
			</div>
			<div class="list-group">
			  <a href="#" class="list-group-item list-group-item-action">Thức ăn cho chó</a>
			  <a href="#" class="list-group-item list-group-item-action">Chuồng nuôi</a>
			  <a href="#" class="list-group-item list-group-item-action">Túi xách</a>
			  <a href="#" class="list-group-item list-group-item-action">Vòng cổ dây dắt</a>
			</div>
		</div>
		<div class="col-md-12 mt-3 p-0" id="policy">
			<div class="row m-0" id="product-logo">
				<h5  id="title-logo" class="center pt-2 m-0 col-md-2"><i class="fas fa-bookmark"></i></h5>
				 <p class="m-2">CHÍNH SÁCH BÁN HÀNG</p> 
			</div>
			<ul class="col-12 mt-1">
				<li class="mt-1">Giao hàng TOÀN QUỐC</li>
				<li class="mt-1">Thanh toán khi nhận hàng</li>
				<li class="mt-1">Đổi trả trong 30 ngày</li>
				<li class="mt-1">Chất lượng đảm bảo</li>
				<li class="mt-1">Miễn phí vận chuyển với đơn hàng từ 3 món trở lên</li>
			</ul>
		</div>
		<div class="col-md-12 mt-3 p-0" id="buy-guide">
			<div class="row m-0" id="product-logo">
				<h5  id="title-logo" class="center pt-2 m-0 col-md-2"><i class="fas fa-bookmark"></i></h5>
				 <p class="m-2">HƯỚNG DẪN MUA HÀNG</p> 
			</div>
			<ul class="col-12 mt-1">
				<li class="mt-1"><span>1.</span>Mua hàng trực tiếp tại website<span></span></li>
				<li class="mt-1"><span>2.</span>Gọi điện thoại 0199175811 để mua hàng</li>
				<li class="mt-1"><span>3.</span>Mua hàng tại cửa hàng:<span>29 Lê Văn Thiêm</span></li>
			</ul>
		</div>
		<div class="col-12 mt-3 p-0" id="chatbox">
			<div class="row m-0" id="product-logo">
				<h5  id="title-logo" class="center pt-2 m-0 col-md-2"><i class="fas fa-bookmark"></i></h5>
				 <p class="m-2">HỖ TRỢ TRỰC TUYẾN</p> 
			</div>
			<h6 class="text-center mt-2">HOTLINE</h6>
			<h6 class="text-center mt-1">0919175811</h6>
			<a class="mt-4 text-center" href=""><h6><i class="fas fa-comments"></i> Chatbox</h6></a>
		</div>

	</div>
	<div id="main-page" class="col-md-8 mt-1">
		<div id="cent-main-page" class="container">
			<?php foreach ($data as $key => $value) {?>
			<div id="pd_details" class="row">
				<div class="col-md-4" id="img-details">
					<img class="ml-0 mt-2" id="anh-to" src="<?php echo $value['img_main']?>">
					 <div class="row mt-2">
						<a class="ml-3" href=""><img id="anh-nho"  src="<?php echo $value['img_phu']?>" onclick="changeImage()"></a>
						<a class="ml-3" href=""><img id="anh-nho" src="<?php echo $value['img_phu']?>"></a>
						<a class="ml-3" href=""><img id="anh-nho" src="<?php echo $value['img_main']?>"></a>

					</div> 
				</div>
				<div class="col-md-7" style="">
					<h3><?php echo $value['name']?></h3>
					<span><?php echo number_format($value['price'])?>đ</span>
					<hr>
					<p><?php echo $value['mota_ngan']?></p>
					<hr>
					
					<div class="ml-0 mt-3 row">
						<a class="btn btn-defaut" id="add-cart" href=""><i class="fa fa-shopping-cart"></i> THÊM GIỎ HÀNG</a>
						<a class="ml-2 btn btn-defaut" id="buy-now" href=""><i class="fas fa-check"></i> MUA NGAY</a>
						<p class="mt-2">ĐỂ LẠI SỐ ĐIỆN THOẠI, CHÚNG TÔI SẼ TƯ VẤN NGAY SAU 5 ĐẾN 10 PHÚT</p>	
					</div>
					<div class="m-0 row">
							<div class="col-md-1"></div>
							<input type="text" name="" class="col-md-5">
							<a type="submit" id="btn-tlphone" class="btn btn-success  form-control pl-0 pt-2 col-md-3"> <i class="fas fa-phone-alt"></i> GỌI LẠI CHO TÔI</a>
						</div>
				</div>	
			</div>
			<div id="mota_dai">
				<div class="mt-2 row" id="label-details">
						<p class="col-md-5 m-0 pt-2">CHI TIẾT SẢN PHẨM</p>
				</div>
				<div class=" row" id=>
					<p class="pt-2"><?php echo $value['mota_dai']?></p>
				</div>
			</div>
			<div id="danhgia">
				<div class="mt-1 row" id="label-details">
						<p class="col-md-5 m-0 pt-2">ĐÁNH GIÁ</p>
				</div>
				<div class="row ml-4 mt-3" id="rate-area">
					<label class="col-md-3">Đánh giá</label>
					<a class="col-md-1" href=""><i class="far fa-star"></i></a>
					<a class="col-md-1" href=""><i class="far fa-star"></i></a>
					<a class="col-md-1" href=""><i class="far fa-star"></i></a>
					<a class="col-md-1" href=""><i class="far fa-star"></i></a>
					<a class="col-md-1" href=""><i class="far fa-star"></i></a>
				</div>
				<div id="binhluan" class="row ml-4 mt-2">
					<label class="col-md-3">Bình luận</label>
					<textarea class="form-control col-md-8"></textarea>
				</div>
			</div>


		<?php }?>
		</div>
	</div>
	<div id="right-page" class="mt-1 col-md-2">
		<div class="col-12 p-0" id="best-seller">
			<div class="row m-0" id="product-logo">
				<h5  id="title-logo" class="center pt-2 m-0 col-md-2"><i class="fas fa-bookmark"></i></h5>
				 <p class="m-2">SẢN PHẨM MỚI NHẤT</p> 
			</div>
			<?php foreach ($data as $key => $value) { ?>
			<div class="row mt-3">
				<div class="col-md-2"></div>
				<div id="product" class="col-md-8">
					<div class="m-auto" id="product-img"><a href="?controller=product-details"><img src="<?php echo $value['img_main']?>"></a></div>
					<a class="text-center" id="product-name" href="?controller=product-details"><p class="mt-3"><?php echo $value['name']?></p></a>
					<h6 class="text-center" id="product-price"><?php echo number_format($value['price'])?>₫</h6>
					<a class="text-center" id="add-to-cart" href=""><h6><i class="fas fa-cart-plus"></i></h6></a>
				</div>
				<div class="col-md-2"></div>
			</div>		
		<?php } ?>
		</div>
	</div>
</div>
<?php require_once('layout/footer.php'); ?>
	