<?php require_once('layout/header.php'); ?>

	<div class="col-md-9" id="main-screen">
			<h1 class="text-center" id="cart">Quản lí Nhân viên</h1>
			
 		
			

		<div class="container-fluid mt-3">
			<div class="row mt-1">
				<a href="?controller=ql_nhanvien" class="btn btn-outline-secondary col-md-2">Nhân viên</a>
				<a href="?controller=ql_shipper" class="btn btn-outline-secondary col-md-2">Shipper</a>
			</div>
			<form method="post" action="?controller=ql_shipper">
				<div class="row mt-1">
					<div class="col-md-8"></div>
					<input type="text" class="form-control col-md-3" name="keyword" placeholder="Username">
					<button name="btn_timkiem" type="submit"  class="btn btn-primary form-control col-md-1">Tìm kiếm</button>
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
			        <h5 class="modal-title" id="them">Thêm shipper</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			     <form method="post" action="?controller=ql_shipper">
						     <div class="modal-body">
						      	<div class="row">
						      		<span class="col-md-4">Họ tên:</span>
						      		<input type="text" class="form-control col-md-8" name="full_name" id="full_name_add">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Liên hệ:</span>
						      		<input type="text" class="form-control col-md-8" name="phone" id="phone_add">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Số CMND:</span>
						      		<input type="text" class="form-control col-md-8" name="cmnd" id="cmnd_add">
						      	</div>
						      </div>	
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" name="btn_add" onclick="return check_add_shipper()" class="btn btn-primary">Lưu</button>
						      </div>
					      </form>
			    </div>
			  </div>
			</div>


			<table class="table table-striped mt-1">
				  <thead>
				    <tr>
				      <th scope="col">Mã shipper</th>
				      <th scope="col">Họ tên</th>
				       <th scope="col">Liên hệ</th>
				       <th scope="col">Số CMND</th>
				      <th scope="col">Ngày tham gia</th>
				       <th scope="col">Tác vụ</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($data as $key => $value) { ?>
				    <tr>
				      <th><?php echo $value['id'] ?></th>
				      <td><?php echo $value['full_name'] ?></td>
				      <th><?php echo $value['phone'] ?></th>
				      <td><?php echo $value['cmnd'] ?></td>
				      <td><?php echo $value['created'] ?></td>
				      <td>
				      	<!-- Button trigger modal -->
				      <button  class="btn btn-primary" data-toggle="modal" data-target="#sua<?php echo $value['id']?>">sửa</button>
				      <a class="btn btn-danger" href="?controller=xoa_shipper&id=<?php echo $value['id']?>">xóa</a>
				      </td>
				    </tr>
				  	
					

					<!-- Modal -->
					<div class="modal fade" id="sua_shipper<?php echo $value['id']?>" tabindex="-1" aria-labelledby="sua_shipper<?php echo $value['id']?>" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="sua_shipper<?php echo $value['id']?>">Chỉnh sửa thông tin</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form method="post" action="?controller=ql_shipper&id_edit=<?php echo $value['id'] ?>">
						      <div class="modal-body">
						      	<div class="row">
						      		<span class="col-md-4">Họ tên:</span>
						      		<input type="text" class="form-control col-md-8" name="full_name" id="full_name_edit" value="<?php echo $value['full_name']?>">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Liên hệ:</span>
						      		<input type="text" class="form-control col-md-8" name="phone" id="phone_edit" value="<?php echo $value['phone']?>">
						      	</div>
						      	<div class="row mt-1">
						      		<span class="col-md-4">Số CMND:</span>
						      		<input type="text" class="form-control col-md-8" name="cmnd" id="cmnd_edit" value="<?php echo $value['cmnd']?>">
						      	</div>
						      </div>	
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" name="btn_edit_shipper" onclick="return" class="btn btn-primary">Lưu thay đổi</button>
						      </div>
					      </form>
					     
					    </div>
					  </div>
					</div>
				    <?php } ?>
				  </tbody>
			</table>
		</div>			
	</div>

<?php require_once('layout/footer.php'); ?>