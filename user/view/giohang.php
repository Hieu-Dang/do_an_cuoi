<?php require_once('layout/header.php'); ?>
<div class="row mt-2" id="body-page">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="row">
			<div id="left-page" class="mt-1 col-md-3">
		<div class="col-md-12 p-0" id="catalog">
			<div class="row m-0" id="product-logo">
				<h5  id="title-logo" class="pt-2 m-0 col-md-2"><i class="fas fa-bars"></i></h5>
				 <p class="m-2">TẤT CẢ DANH MỤC</p> 
			</div>
			<div class="list-group">
			  <a href="#" class="list-group-item list-group-item-action">Thức ăn cho chó</a>
			  <a href="#" class="list-group-item list-group-item-action">Chuồng nuôi</a>
			  <a href="#" class="list-group-item list-group-item-action">Túi xách</a>
			  <a href="#" class="list-group-item list-group-item-action">Vòng cổ dây dắt</a>
			</div>
		</div>
	</div>
	<div id="" class="pl-3 mt-1 col-md-9 ">
		<div class="container-fluid" id="cart-main-page" style="">
			<div class="row p-0" id="product-logo">
				<p  id="title-logo" class="pt-2 m-0 col-md-3">GIỎ HÀNG CỦA TÔI</p>		
			</div>
			<div class="row mt-4" id="process-bar">
				<div class="col-md-2"></div>
				<div class="col-md-8 row">
					<div class="col-md-1"></div>
					<div class="col-md-3" id="step">
						<p class="p-0">Giỏ hàng của tôi</p>
						<div class="p-0" id="circle"><p class=" center">1</p></div>
						
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-3" id="step">
						<p class="p-0">Thanh toán</p>
						<div class="p-0" id="circle"><p class="center">2</p></div>
												
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-3" id="step">
						<p class="pl-0">Hoàn tất</p>
						<div class="pl-0" id="circle"><p class="center">3</p></div>
						
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div id="list-cart">
				<table class="mt-3 p-0 table table-borderless">
					<thead>
						<tr>	
							<th>Sản phẩm</th>
							<th>Hình ảnh</th>
							<th>Giá</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
							<th></th>
					   	</tr>	
					</thead>
					<tbody>
					<?php foreach ($data as $key => $value) { ?>
						<tr>
							<td><?php echo $value['name']?></td>
							<td><img id="anh-cart" src="<?php echo $value['img_main']?>"></td>
							<td id="price_<?php echo $value['id']?>"><?php echo number_format($value['price'])?>đ</td>
							<td ><input type="number" id="<?php echo $value['price'] ?>" class="quantity" name="" placeholder="1"></td>
							<td  id="thanhtien_price_<?php echo $value['id']?>"><?php echo number_format($value['price'])?>đ</td>
							<td><a href=""><i class="far fa-trash-alt"></i></a></td>
						</tr>
<!-- <script type="text/javascript">
	$('#<?php echo $value['price'] ?>').change(function(){
		soluong = $('#<?php echo $value['price'] ?>').val();
		tongthanhtoan = $('#sum').val();
		gia = <?php echo $value['price']?>;
		tong = gia * soluong;
		tongthanhtoan2 = tong + tongthanhtoan;
		// alert(gia);
		$('#thanhtien_price_<?php echo $value['id']?>').html(tong);
		$('#sum').html(tongthanhtoan2);
	});
</script> -->
					<?php }?>
					</tbody>
				</table>
				<div class="row p-0 " style="">
					<div class="col-md-8"></div>
					<span class="mt-2"><b>Tổng thanh toán: </b></span>
					<span id="sum" class="ml-3 mb-1"><?php echo number_format($value['price'])?>đ</span>
				</div>
				<div class="row p-0 mt-2" style="">
					<div class="col-md-7"></div>
					<a class=" ml-4 btn btn-defaut" id="add-cart" href="">TIẾP TỤC MUA HÀNG</a>
						<a class="ml-3
						 btn btn-defaut" id="pay" href="?controller=thanhtoan">TIẾN HÀNH THANH TOÁN</a>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>	
<?php require_once('layout/footer.php'); ?>