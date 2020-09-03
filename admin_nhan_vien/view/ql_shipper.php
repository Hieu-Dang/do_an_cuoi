<?php require_once('layout/header.php'); ?>

	<div class="col-md-9" id="main-screen">
			<h1 class="text-center" id="cart">Quản lí Shipper</h1>
			
 		
			

		<div class="container-fluid mt-3">
			<div class="row mt-1" id="select-nv">
				<a href="?controller=ql_nhanvien" class="btn btn-outline-secondary col-md-2">Nhân viên</a>
				<a href="?controller=ql_shipper" class="btn btn-outline-secondary col-md-2">Shipper</a>
			</div>
			<form method="get" action="index.php">
				<div class="row mt-1">
					<div class="col-md-7"></div>
					<input type="hidden" name="controller" value="ql_shipper">
					<input type="text" class="form-control col-md-3" name="keyword" placeholder="Họ Tên" value="<?php 
					echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
					<button type="submit"  class="btn btn-primary form-control col-md-2">Tìm kiếm</button>
				</div>
			</form>
			

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-success mt-5" data-toggle="modal" data-target="#them">
			  Thêm Shipper
			</button>

			<!-- Modal -->
			<div class="modal fade" id="them" tabindex="-1" aria-labelledby="them" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="them">Thêm Shipper</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			     <form method="post" action="?controller=ql_shipper">
						      <div class="modal-body">
						      	<div class="row">
						      		<span class="col-md-4">Họ và tên:</span>
						      		<input type="text" class="form-control col-md-8" name="full_name" id="full_name_add">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Số CMT:</span>
						      		<input type="text" class="form-control col-md-8" name="cmnd" id="cmnd_add">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Số điện thoại:</span>
						      		<input type="text" class="form-control col-md-8" name="phone" id="phone_add" >
						      	</div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" name="btn_add" onclick="return check_add_shipper()" class="btn btn-primary">Lưu</button>
						      </div>
					      </form>
			    </div>
			  </div>
			</div><!-- het modal -->


			<table class="table table-striped mt-1">
				  <thead>
				    <tr>
				      <th scope="col">Mã Shipper</th>
				      <th scope="col">Họ tên</th>
				      <th scope="col">Số CMT</th>
				      <th scope="col">Số điện thoại</th>
				      <th scope="col">Ngày tạo</th>
				      <th scope="col">Tên người tạo</th>
				      <th scope="col">Tác vụ</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($data as $key => $value) {?>
				  	 	<tr>
				      <th><?php echo $value['id'] ?></th>
				      <td><?php echo $value['full_name']; ?></td>
				      <th><?php echo $value['cmnd'] ?></th>
				      <th><?php echo $value['phone'] ?></th>
				      <th><?php echo $value['created'] ?></th>
				      <th><?php echo $db->get('*','admin_nhanvien',array('id'=>$value['username_xuli']))[0]['full_name']; ?></th>
				      <td>
				      <button  class="btn btn-primary" data-toggle="modal" data-target="#sua<?php echo $value['id']?>">sửa</button>
				      <a class="btn btn-danger" href="?controller=xoa_shipper&id=<?php echo $value['id']?>">xóa</a>
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
					      <form method="post" action="?controller=ql_shipper&id_edit=<?php echo $value['id'] ?>">
						      <div class="modal-body">
						      	<div class="row">
						      		<span class="col-md-4">Họ Và Tên:</span>
						      		<input type="text" class="form-control col-md-8" name="full_name" id="full_name_edit" value="<?php echo $value['full_name']?>">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Số CMT:</span>
						      		<input type="text" class="form-control col-md-8" name="cmnd" id="cmnd_edit" value="<?php echo $value['cmnd']?>">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Số điện thoại:</span>
						      		<input type="text" class="form-control col-md-8" name="phone" id="phone_edit" value="<?php echo $value['phone']?>">
						      	</div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" name="btn_edit" onclick="return check_edit_shipper()" class="btn btn-primary">Lưu thay đổi</button>
						      </div>
					      </form>
					     
					    </div>
					  </div>
					</div><!-- hết Modal -->
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