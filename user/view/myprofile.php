<?php require_once('layout/header.php'); ?>
<div class="row mt-2">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="row">
			<div class="col-md-3">
				<div id="select-sign">
					<div id="header" class="m-0"><p class="pt-1 pl-2">QUẢN LÝ CÁ NHÂN</p></div>
					<a href="?controller=myprofile" class="row mt-3 ml-4"><i class="fas fa-sign-in-alt"></i> <p class="ml-2">Thông tin tài khoản</p></a>
					<a href="?controller=myoder" class="row ml-4"><i class="fa fa-key"></i><p class="ml-2">Đơn hàng của tôi</p></a>
					<a href="" class="row ml-4"><i class="fa fa-key"></i><p class="ml-2">Sản phẩm yêu thích</p></a>
					<a href="" class="row ml-4"><i class="fa fa-key"></i><p class="ml-2">Đăng xuất</p></a>
				</div>	
			</div>
			<div class="col-md-8">
				<div class="row " id="product-logo">
					<p id="title-logo" class="pt-2 m-0 col-md-3">THÔNG TIN TÀI KHOẢN</p>	
				</div>
				<div class="row mt-3">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<form method="post">
							<?php foreach($user as $key => $value){ ?>
							<h5 class="mt-1 pb-2" id="signup-header"><span>THÔNG TIN TÀI KHOẢN</span></h5>
							<div class="form-group row">
								<label style="" class="text-right col-md-3 mt-1"><b>Tài khoản</b></label>
								<div class="col-md-9">
									<b><?php echo $value['username']?></b>
								</div>
							</div>
							<div class="form-group row">
								<label style="" class="text-right col-md-3 mt-1"><b>Mật khẩu</b></label>
								<div class="col-md-9">
									<b>****</b>
								</div>
							</div>
							<h5 class="mt-2 pb-2" id="signup-header"><span>THÔNG TIN CÁ NHÂN</span></h5>
							<div class="form-group row">
								<label style="" class="text-right col-md-3 mt-1"><b>Họ tên</b></label>
								<div class="col-md-9">
								<input type="text" class="form-control" name="" placeholder="<?php echo $value['full_name']?>"></div>
							</div>
							<div class="form-group row">
								<label style="" class="text-right col-md-3 mt-1"><b>Giới tính</b></label>
								<div class="col-md-9">
									<select class="form-control">
										<option>Nữ</option>
										<option>Nam</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label style="" class="text-right col-md-3 mt-1"><b>Email</b></label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="" placeholder="<?php echo $value['email']?>">
								</div>
							</div>
							<div class="form-group row">
								<label style="" class="text-right col-md-3 mt-1"><b>Số điện thoại</b></label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="" placeholder="<?php echo $value['phone']?>">
								</div>
							</div>
							<div class="form-group row">
								<label style="" class="text-right col-md-3 mt-1"><b>Tỉnh/TP</b></label>
								<div class="col-md-9">
									<select class="form-control">
										<option></option>
										<option></option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label style="" class="text-right col-md-3 mt-1"><b>Quận/Huỵên</b></label>
								<div class="col-md-9">
									<select class="form-control">
										<option></option>
										<option></option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label style="" class="text-right col-md-3 mt-1"><b>Phường/Xã</b></label>
								<div class="col-md-9">
									<select class="form-control">
										<option></option>
										<option></option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label style="" class="text-right col-md-3 mt-1"><b>Địa chỉ</b></label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="" placeholder="<?php echo $value['address']?>">
								</div>
							</div>
							<div class="row mt-2">
							<div class="col-md-3"></div>
							<div class="col-md-9">
							<div class="row m-auto">
								<div class="col-md-1"></div>
								<input type="submit" id="login-btn" class="col-md-3 btn btn-default" name="" value="Cập nhật">
							</div>
							
						</div>
					</div>
					<?php } ?>
						</form>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
<?php require_once('layout/footer.php'); ?>
