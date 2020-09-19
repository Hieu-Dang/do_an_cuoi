<?php require_once('layout/header.php'); ?>
<div id="body-page">
	<div class="row mt-2">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3">
			<div id="select-sign">
				<div id="header" class="m-0"><p class="pt-1 pl-2">TÀI KHOẢN</p></div>
				<a href="?controller=login" class="row mt-3 ml-4"><i class="fas fa-sign-in-alt"></i>  <p class="ml-2">Đăng nhập</p></a>
				<a href="?controller=signup" class="row ml-4"><i class="fa fa-key"></i><p class="ml-2">Đăng ký</p></a>
				<a href="" class="row ml-4"><i class="fa fa-key"></i><p class="ml-2">Quên mật khẩu</p></a>
			</div>	
		</div>
		<div class="col-md-8">
			<div class="row " id="product-logo">
				<p id="title-logo" class="pt-2 m-0 col-md-2">Đăng nhập</p>	
			</div>
			<div class="row mt-3">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form method="post">
						<div class="form-group row">
							<label class="text-right col-md-3 mt-1"><b>Tài khoản</b></label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="">
							</div>
						</div>
						<div class="form-group row mt-4">
							<label class="text-right col-md-3 mt-1"><b>Mật khẩu</b></label>
							<div class="col-md-9">
								<input type="password" class="form-control" name="">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-3"></div>
							<div class="col-md-9">
								<div class="row m-auto">
									<input type="submit" id="login-btn" class="col-md-4 btn btn-default" name="" value="Đăng nhập">
									<a id="fogot-pw" class="mt-1 col-md-5" href="">Quên mật khẩu</a>
								</div>
								
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
<?php require_once('layout/footer.php'); ?>
