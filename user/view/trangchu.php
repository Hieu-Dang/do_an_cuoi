<?php require_once('layout/header.php'); ?>
<div class="row mt-2" id="body-page">
	<div id="left-page" class="col-md-3 p-0">
		<div class="col-md-12 mt-1 p-0" id="catalog">
			<div class="row m-0" id="product-logo">
				<h5  id="title-logo" class="pt-2 m-0 col-md-2"><i class="fas fa-bars"></i></h5>
				 <p class="m-2">TẤT CẢ DANH MỤC</p> 
			</div>
			<ul class="col-12">
				<li class=" mt-1"><a href="">Thức ăn cho chó</a></li>
				<li class="mt-1"><a href="">Chuồng nuôi</a></li>
				<li class="mt-1"><a href="">Túi xách</a></li>
				<li class="mt-1"><a href="">Vòng cổ dây dắt</a></li>
			</ul>
		</div>
		<div class="col-md-12 mt-3 p-0" id="bo-loc">
			<div class="row m-0" id="product-logo">
				<h5  id="title-logo" class="pt-2 m-0 col-md-2"><i class="fas fa-filter"></i></h5>
				 <p class="m-2">BỘ LỌC TÌM KIẾM</p> 
			</div>
			<span class="ml-2">Giá cả</span>
			<ul class="col-12 mt-1">
				<li class="mt-1"><input type="checkbox" name=""> Dưới 100.000₫</li>
				<li class="mt-1"><input type="checkbox" name=""> 100.000₫ - 500.000₫</li>
				<li class="mt-1"><input type="checkbox" name=""> 500.000₫ - 1.000.000₫</li>
				<li class="mt-1"><input type="checkbox" name=""> Trên 1.000.000₫</li>
			</ul>
		</div>

	</div>
	<div id="main-page" class="col-md-6 mt-1">
		<div id="cent-main-page" class="">
			<div class="row m-0" id="product-logo">
				<h5 class="pt-2 m-0 col-md-3">SẢN PHẨM</h5>
			</div>
			<div class="row pl-5 mt-3 " id="products">
				<?php foreach ($data as $key => $value) { ?>
					<div class="col-5 mr-1" id="product">
						<img class="ml-2" src="<?php echo $value['img_main']?>">
						<a class="text-center" id="product-name" href=""><h6><?php echo $value['name']?></h6></a>
						<h6 class="text-center" id="product-price"><?php echo number_format($value['price'])?>₫</h6>
						<a class="text-center" id="add-to-cart" href=""><h6><i class="fas fa-cart-plus"></i></h6></a>
					</div>
				<?php } ?>
				
			</div>
		</div>
	</div>
	<div id="right-page" class="col-md-3 p-0">
		<div class="col-12 mt-1 p-0" id="chatbox">
			<div class="row m-0" id="product-logo">
				<h5  id="title-logo" class="pt-2 m-0 col-md-2"><i class="fas fa-bookmark"></i></h5>
				 <p class="m-2">HỖ TRỢ TRỰC TUYẾN</p> 
			</div>
			<h6 class="text-center mt-2">HOTLINE</h6>
			<h6 class="text-center mt-1">0919175811</h6>
			<a class="mt-4 text-center" href=""><h6><i class="fas fa-comments"></i> Chatbox</h6></a>
		</div>
		<div class="col-12 mt-3 p-0" id="best-seller">
			<div class="row m-0" id="product-logo">
				<h5  id="title-logo" class="pt-2 m-0 col-md-2"><i class="fas fa-bookmark"></i></h5>
				 <p class="m-2">SẢN PHẨM MỚI NHẤT</p> 
			</div>
			<?php foreach ($new_product as $key => $value) { ?>
			<div id="product" class="p-4">
				<img  src="<?php echo $value['img_main']?>">
				<a class="text-center" id="product-name" href=""><p><?php echo $value['name']?></p></a>
				<h6 class="text-center" id="product-price"><?php echo number_format($value['price'])?>₫</h6>
				<a class="text-center" id="add-to-cart" href=""><h6><i class="fas fa-cart-plus"></i></h6></a>
			</div>
		<?php } ?>
		</div>
	</div>
</div>
<?php require_once('layout/footer.php'); ?>
	