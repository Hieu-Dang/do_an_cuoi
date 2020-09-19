<?php require_once('layout/header.php'); ?>
<div class="row mt-2" id="body-page">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="row">
			<div class="col-md-3">
				<div id="select-sign">
					<div id="header" class="m-0"><p class="pt-1 pl-2">QUẢN LÝ CÁ NHÂN</p></div>
					<a href="?controller=myprofile" class="row mt-3 ml-4"><i class="fas fa-sign-in-alt"></i> <p class="ml-2">Thông tin tài khoản</p></a>
					<a href="?controller=myoder" class="row ml-4"><i class="fa fa-key"></i><p class="ml-2">Đơn hàng của tôi</p></a>
					<a href="?controller=myproduct" class="row ml-4"><i class="fa fa-key"></i><p class="ml-2">Sản phẩm yêu thích</p></a>
					<a href="?controller=logout" class="row ml-4"><i class="fa fa-key"></i><p class="ml-2">Đăng xuất</p></a>
				</div>	
			</div>
			<div class="col-md-8">
				<div class="row " id="product-logo">
					<p id="title-logo" class="pt-2 m-0 col-md-3">ĐƠN HÀNG CỦA TÔI</p>	
				</div>
				<table class="mt-3 p-0 table ">
					<thead class="thead-inverse">
						<tr>	
							<th>STT</th>
							<th>MÃ ĐƠN HÀNG</th>
							<th>TÊN KHÁCH HÀNG</th>
							<th>TỔNG TIỀN</th>
							<th>VẬN CHUYỂN</th>
							
					   	</tr>	
					</thead>
					<tbody>
					
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
					
						</tr>
					
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
<?php require_once('layout/footer.php'); ?>
