<?php require_once('layout/header.php'); ?>

	<div class="col-md-9" id="main-screen">
			<h1 class="text-center" id="cart">Quản lí Nhân viên</h1>
			
 		
			

		<div class="container-fluid mt-3">
			<div class="row mt-1" id="select-nv">
				<a href="?controller=ql_nhanvien" class="btn btn-outline-secondary col-md-2">Nhân viên</a>
				<a href="?controller=ql_shipper" class="btn btn-outline-secondary col-md-2">Shipper</a>
			</div>
			<form method="get" action="index.php">
				<div class="row mt-1">
					<div class="col-md-7"></div>
					<input type="hidden" name="controller" value="ql_nhanvien">
					<input type="text" class="form-control col-md-3" name="keyword" placeholder="Họ Tên" value="<?php 
					echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
					<button type="submit"  class="btn btn-primary form-control col-md-2"><i class="fa fa-search"></i></button>
				</div>
			</form>
			

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-success mt-5" data-toggle="modal" data-target="#them">
			  Thêm nhân viên
			</button>

			<!-- Modal -->
			<div class="modal fade" id="them" tabindex="-1" aria-labelledby="them" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="them">Thêm nhân viên</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			     <form method="post" action="?controller=ql_nhanvien">
						      <div class="modal-body">
						      	<div class="row">
						      		<span class="col-md-4">Tên đặng nhập:</span>
						      		<input type="text" class="form-control col-md-8" name="username" id="username_add">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Mật khẩu:</span>
						      		<input type="password" class="form-control col-md-8" name="password" id="password_add">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Họ và tên:</span>
						      		<input type="text" class="form-control col-md-8" name="full_name" id="full_name_add">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Số điện thoại:</span>
						      		<input type="text" class="form-control col-md-8" name="phone" id="phone_add" >
						      	</div>
						      	 <div class="row mt-1">
						      		<span class="col-md-4">Quyền sản phẩm:</span>
						      
						      		<select name="quyen_product" class="form-control col-md-4">
						      			<option value="1">Có</option>
						      			<option value="0">Không</option>
						      		</select>
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Quyền tài khoản:</span>
						      		
						      		<select name="quyen_user" class="form-control col-md-4">
						      			<option value="1">Có</option>
						      			<option value="0">Không</option>
						      		</select>
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Quyền đơn hàng:</span>
						      	
						      		<select name="quyen_oder" class="form-control col-md-4">
						      			<option value="1">Có</option>
						      			<option value="0">Không</option>
						      		</select>
						      	</div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" name="btn_add" onclick="return check_add_user()" class="btn btn-primary">Lưu</button>
						      </div>
					      </form>
			    </div>
			  </div>
			</div><!-- het modal -->


			<table class="table table-striped mt-1">
				  <thead>
				    <tr>
				      <th scope="col">Mã nhân viên</th>
				      <th scope="col">Họ tên</th>
				       <th scope="col">Số điện thoại</th>
				      <th scope="col">Chức vụ</th>
				      <th scope="col">Về sản phẩm</th>
				      <th scope="col">Về tài khoản</th>
				       <th scope="col">Về order</th>
				       <th scope="col">Tác vụ</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($data as $key => $value) {
				  	if ($value['id']!=$_SESSION['ss_admin_nhanvien']) {?>
				  	 	<tr>
				      <th><?php echo $value['id'] ?></th>
				      <td><?php echo $value['full_name']; ?></td>
				      <th><?php echo $value['phone'] ?></th>
				      <td><?php if ($value['lv']=='1') {echo 'Admin';}else{echo "Nhân viên";}?></td>
				      <td><?php if ($value['quyen_product']=='1') {echo 'Có';}else{echo "Không";} ?></td>
				      <th><?php if ($value['quyen_user']=='1') {echo 'Có';}else{echo "Không";} ?></th>
				      <td><?php  if ($value['quyen_oder']=='1') {echo 'Có';}else{echo "Không";} ?></td>
				      <td>
				      <button  class="btn btn-primary" data-toggle="modal" data-target="#sua<?php echo $value['id']?>"><i class="fa fa-edit"></i></button>
				      <a class="btn btn-danger" href="?controller=xoa_nhanvien&id=<?php echo $value['id']?>"><i class="fa fa-trash-alt"></i></a>
				      </td>
				    </tr>
				  	<!-- Button trigger modal -->
					

					<!-- Modal -->
					<div class="modal fade" id="sua<?php echo $value['id']?>" tabindex="-1" aria-labelledby="sua<?php echo $value['id']?>" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="sua<?php echo $value['id']?>">Chỉnh sửa thông tin</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form method="post" action="?controller=ql_nhanvien&id_edit=<?php echo $value['id'] ?>">
						      <div class="modal-body">
						      	<div class="row">
						      		<span class="col-md-4">Tên đặng nhập:</span>
						      		<input type="text" class="form-control col-md-8" name="username" id="username_edit" value="<?php echo $value['username']?>">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Mật khẩu:</span>
						      		<input type="password" class="form-control col-md-8" name="password" id="password_edit" value="<?php echo $value['password']?>">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Họ và tên:</span>
						      		<input type="text" class="form-control col-md-8" name="full_name" id="full_name_edit" value="<?php echo $value['full_name']?>">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Số điện thoại:</span>
						      		<input type="text" class="form-control col-md-8" name="phone" id="phone_edit" value="<?php echo $value['phone']?>">
						      	</div>
						      	 <div class="row mt-1">
						      		<span class="col-md-4">Quyền sản phẩm:</span>
						      		<?php if ($value['quyen_product']=='1') {?>
						      			<select name="quyen_product" class="form-control col-md-4">
							      			<option value="1">Có</option>
							      			<option value="0">Không</option>
							      		</select>
						      		<?php }else{?>
						      			<select name="quyen_product" class="form-control col-md-4">
							      			<option value="0">Không</option>
							      			<option value="1">Có</option>
							      		</select>
						      		<?php } ?>
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Quyền tài khoản:</span>
						      		<?php if ($value['quyen_user']=='1') {?>
						      			<select name="quyen_user" class="form-control col-md-4">
							      			<option value="1">Có</option>
							      			<option value="0">Không</option>
							      		</select>
						      		<?php }else{?>
						      			<select name="quyen_user" class="form-control col-md-4">
							      			<option value="0">Không</option>
							      			<option value="1">Có</option>
							      		</select>
						      		<?php } ?>
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Quyền đơn hàng:</span>
						      		<?php if ($value['quyen_oder']=='1') {?>
						      			<select name="quyen_oder" class="form-control col-md-4">
							      			<option value="1">Có</option>
							      			<option value="0">Không</option>
							      		</select>
						      		<?php }else{?>
						      			<select name="quyen_oder" class="form-control col-md-4">
							      			<option value="0">Không</option>
							      			<option value="1">Có</option>
							      		</select>
						      		<?php } ?>
						      	</div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" name="btn_edit" onclick="return check_edit_user()" class="btn btn-primary">Lưu thay đổi</button>
						      </div>
					      </form>
					     
					    </div>
					  </div>
					</div><!-- hết Modal -->
				  	<?php } ?>
				    <?php } ?>
				  </tbody>
			</table>
		</div>
		<!-- Phần phân trang  -->
		<div class="row mt-5" >
			<div class="col-md-6 m-auto text-center" id="paging">
				<?php echo $paging ?>
			</div>
		</div>
	</div>

<?php require_once('layout/footer.php'); ?>