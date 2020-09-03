<?php require_once('layout/header.php'); ?>

	<div class="col-md-9" id="main-screen">
		<h1 class="text-center">Quản lí sản phẩm danh mục</h1>		
		<div class="container-fluid mt-3">
				<div class="row mt-1" id="select-product">
					<select  class="form-control col-md-4">
						<option>Đồ ăn</option>
						<option>Chuồng nuôi</option>
						<option>Túi xách</option>
						<option>Vòng cổ dây dắt</option>
					</select>
				</div>
				<form method="get" action="index.php">
					<div class="row mt-1">
						<div class="col-md-7"></div>
						<input type="hidden" name="controller" value="ql_product">
						<input type="text" class="form-control col-md-3" name="keyword" placeholder="Sản phẩm" value="<?php 
						echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
						<button type="submit"  class="btn btn-primary form-control col-md-1">Tìm kiếm</button>
					</div>
				</form>
				

				<!-- Button trigger modal -->
				<button type="button" class="btn btn-success mt-5" data-toggle="modal" data-target="#them_sp">
				  Thêm sản phẩm
				</button>

				<!-- Modal -->
				<div class="modal fade" id="them_sp" tabindex="-1" aria-labelledby="them_sp" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="them_sp">Thêm sản phẩm</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				     <form method="post" action="?controller=ql_nhanvien">
							      <div class="modal-body">
							      	<div class="row">
							      		<span class="col-md-4">Chọn ảnh tải lên:</span>
	                            		<input type="file" name="file" class="custom-file-input col-md-8">
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Tên sản phẩm:</span>
							      		<input type="text" class="form-control col-md-8" name="name" id="name_add">
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Loại sản phẩm:</span>
							      		<select  class="form-control col-md-8">
											<option>Đồ ăn</option>
											<option>Chuồng nuôi</option>
											<option>Túi xách</option>
											<option>Vòng cổ dây dắt</option>
										</select>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Giá sản phẩm:</span>
							      		<input type="text" class="form-control col-md-8" name="price" id="price_add" >
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Khuyến mãi</span>
							      		<input type="text" class="form-control col-md-8" name="discount" id="discount_add" >
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Tồn kho:</span>
							      		<input type="text" class="form-control col-md-8" name="tonkho" id="tonkho_add" >
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Mô tả ngắn:</span>
							      		<input type="text" class="form-control col-md-8" name="mota_ngan" id="mota_ngan_add" >
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Mô tả dài:</span>
							      		<input type="text" class="form-control col-md-8" name="mota_dai" id="mota_dai_add" >
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Ảnh phụ:</span>
							      		<input type="file" name="file" class="custom-file-input col-md-8">
							      	</div>
							      	
							      	
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="submit" name="btn_add" onclick="return check_add_product()" class="btn btn-primary">Lưu</button>
							      </div>
						      </form>
				    </div>
				  </div>
				</div><!-- het modal -->


			<table class="table table-striped mt-1" id="admin_list_product">
				  <thead>
				    <tr>
				      <th scope="col">Mã sản phẩm</th>
				      <th scope="col">Ảnh sản phẩm</th>
				      <th scope="col">Tên sản phẩm</th>
				       <th scope="col">Loại sản phẩm</th>
				      <th scope="col">Giá sản phẩm</th>
				      <th scope="col">Khuyến mãi</th>
				      <th scope="col">Tồn kho</th>
				      <th scope="col">Mô tả ngắn</th>
				      <th scope="col">Tác vụ</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($data as $key => $value){ ?>
				    <tr>
				      <th><?php echo $value['id']?></th>
				      <td><img  src="<?php echo $value['img_main']?>"></td>
				      <td><?php echo $value['name']?></td>
				      <td><?php if ($value['catalog_id']=='1') {echo "Thức ăn cho chó";}?></td>
				      <td><?php echo number_format($value['price'])?>₫</td>
				      <td><?php echo $value['discount']?>%</td>
				      <td><?php echo $value['tonkho']?></td>
				      <td><?php echo $value['mota_ngan']?></td>
				       <td>
					      <button  class="btn btn-primary" data-toggle="modal" data-target="#sua_sp<?php echo $value['id']?>">sửa</button>
					      <a class="btn btn-danger" href="?controller=xoa_sanpham&id=<?php echo $value['id']?>">xóa</a>
					   </td>
				    </tr>
				    	<!-- Modal -->
				<div class="modal fade" id="#sua_sp<?php echo $value['id']?>" tabindex="-1" aria-labelledby="#sua_sp<?php echo $value['id']?>" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="#sua_sp<?php echo $value['id']?>">Thêm sản phẩm</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				     <form method="post" action="?controller=ql_nhanvien">
							      <div class="modal-body">
							      	<div class="row">
							      		<span class="col-md-4">Chọn ảnh tải lên:</span>
	                            		<input type="file" name="file" class="custom-file-input col-md-8">
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Tên sản phẩm:</span>
							      		<input type="text" class="form-control col-md-8" name="name" id="name_edit" value="<?php echo $value['name']?>">
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Loại sản phẩm:</span>
							      		<select  class="form-control col-md-8">
											<option>Đồ ăn</option>
											<option>Chuồng nuôi</option>
											<option>Túi xách</option>
											<option>Vòng cổ dây dắt</option>
										</select>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Giá sản phẩm:</span>
							      		<input type="text" class="form-control col-md-8" name="price" id="price_edit" value="<?php echo $value['price']?>" >
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Khuyến mãi</span>
							      		<input type="text" class="form-control col-md-8" name="discount" id="discount_edit" value="<?php echo $value['discount']?>" >
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Tồn kho:</span>
							      		<input type="text" class="form-control col-md-8" name="tonkho" id="tonkho_edit" value="<?php echo $value['tonkho']?>" >
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Mô tả ngắn:</span>
							      		<input type="text" class="form-control col-md-8" name="mota_ngan" id="mota_ngan_edit" value="<?php echo $value['mota_ngan']?>">
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Mô tả dài:</span>
							      		<input type="text" class="form-control col-md-8" name="mota_dai" id="mota_dai_edit" value="<?php echo $value['mota_dai']?>">
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Ảnh phụ:</span>
							      		<input type="file" name="file" class="custom-file-input col-md-8">
							      	</div>
							      	
							      	
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="submit" name="btn_add" onclick="return check_edit_product()" class="btn btn-primary">Lưu</button>
							      </div>
						      </form>
				    </div>
				  </div>
				</div><!-- het modal -->
				    <?php } ?>
				  </tbody>
			</table>
		</div>	
	</div>
<?php require_once('layout/footer.php'); ?>
