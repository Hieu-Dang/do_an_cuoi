<?php require_once('layout/header.php'); ?>

	<div class="col-md-9" id="main-screen">
		<h1 class="text-center">Quản lí sản phẩm </h1>		
		<div class="container-fluid mt-3">
				<div class="row mt-1">
					<a href="?controller=ql_sanpham" class="btn btn-outline-secondary col-md-2">Sản phẩm</a>
					<a href="?controller=ql_catalog" class="btn btn-outline-secondary col-md-2" >Danh mục</a>
				</div>
				<form method="get" action="index.php">
					<div class="row mt-1">
						<div class="col-md-8"></div>
						<input type="hidden" name="controller" value="ql_sanpham">
						<input type="text" class="form-control col-md-3" name="keyword" placeholder="Sản phẩm" value="<?php 
						echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
						<button type="submit"  class="btn btn-primary form-control col-md-1"><i class="fa fa-search"></i></button>
					</div>
				</form>
				<!-- Button trigger modal -->
				<form method="get" action="index.php">
					<div class="row mt-4">
						<button type="button" class="btn btn-success col-md-2" data-toggle="modal" data-target="#them_sp">
						  Thêm sản phẩm
						</button>
						<div class="col-md-5"></div>
						<div class="col-md-2">
							<input type="hidden" name="controller" value="ql_sanpham">
							<select class="form-control" name="catalog_id_loc">
							<?php if (isset($catalog_id_loc)) { ?>
								<option value="<?php echo $catalog_id_loc ?>"><?php echo ($catalog_id_loc=='')?'Tất cả' : $db->get('*','catalog',array('id'=>$catalog_id_loc))[0]['name']; ?></option>
							<?php foreach ($data_catalog as $key) { 
							if($key['id']!=$catalog_id_loc){?>
								<option value="<?php echo $key['id'] ?>"><?php echo $key['name'] ?></option>	
							<?php }}if ($catalog_id_loc!='') {?>
								<option value="">Tất cả</option>
							<?php } ?>
							<?php }else{ ?>
								<option value="">Tất cả</option>
								<?php foreach ($data_catalog as $key ) {?>
								<option value="<?php echo $key['id'] ?>"><?php echo $key['name'] ?></option>	
							<?php } }?>
							</select>
						</div>
						<div class="col-md-2">
							<select class="form-control" name="status_loc">
							<?php if (isset($status_loc) && $status_loc!='' ) {?>
							<?php if ($status_loc=='0') {?>
								<option value="0">Không hiển thị</option>
								<option value="1">Hiển thị</option>
								<option value="">Tất cả</option>

							<?php }else{?>
								<option value="1">Hiển thị</option>
								<option value="0">Không hiển thị</option>
								<option value="">Tất cả</option>
							<?php } ?>
							<?php }else{?>
								<option value="">Tất cả</option>
								<option value="1">Hiển thị</option>
								<option value="0">Không hiển thị</option>
							<?php } ?>
							</select>
						</div>
						<button class="col-md-1 btn btn-primary" type="submit"><i class="fa fa-filter"></i></button>
					</div>
				</form>
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
				     <form method="post" action="?controller=ql_sanpham" enctype="multipart/form-data">
							      <div class="modal-body">
							      	<div class="row mt-1">
							      		<span class="col-md-4">Tên sản phẩm:</span>
							      		<input type="text" class="form-control col-md-8" name="name" id="name_add" onchange="return check_name_sp('name_add','error_name_sp_add')">
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_name_sp_add"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Loại sản phẩm:</span>
							      		<select  class="form-control col-md-4" name="catalog_id">
											<?php foreach ($data_catalog as $key => $value) {?>
												<option value="<?php echo $value['id'] ?>" ><?php echo $value['name'] ?></option>
											<?php } ?>
										</select>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Giá sản phẩm:</span>
							      		<input type="text" class="form-control col-md-8" name="price" id="price_add" onchange="return check_price_sp('price_add','error_price_sp_add')">
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_price_sp_add"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Giảm giá <i class="fa fa-percent"></i></span>
							      		<input type="text" class="form-control col-md-2" name="discount" id="discount_add" onchange="return check_discount_sp('discount_add','error_discount_sp_add')">
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_discount_sp_add"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Tồn kho:</span>
							      		<input type="text" class="form-control col-md-8" name="tonkho" id="tonkho_add" onchange="return check_tonkho_sp('tonkho_add','error_tonkho_sp_add')">
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_tonkho_sp_add"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Mô tả ngắn:</span>
							      		<textarea class="form-control col-md-8" name="mota_ngan" id="mota_ngan_add" onchange="return check_mota_ngan_sp('mota_ngan_add','error_mota_ngan_sp_add')"></textarea>
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_mota_ngan_sp_add"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Mô tả dài:</span>
							      		<textarea class="form-control col-md-8" rows="7" name="mota_dai" id="mota_dai_add" onchange="return check_mota_dai_sp('mota_dai_add','error_mota_dai_sp_add')"></textarea>
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_mota_dai_sp_add"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Ảnh chính:</span>
							      		<input type="file" name="img_main" id="img_main_add" class=" col-md-4" onchange="return check_img_one('img_main_add','error_img_main_sp_add','review_img_main_add')">
							      		<div id="review_img_main_add" class="col-md-4"></div>
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_img_main_sp_add"></div>
							      	</div>
							      	<div class="row mt-2">
							      		<span class="col-md-4">Ảnh phụ:</span>
							      		<input type="file" name="img_phu" id="img_phu_add" class="col-md-4" onchange="return check_img_one('img_phu_add','error_img_phu_sp_add','review_img_phu_add')">
							      		<div id="review_img_phu_add" class="col-md-4"></div>
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_img_phu_sp_add"></div>
							      	</div>
							      	<div class="row mt-2">
							      		<span class="col-md-4">Ảnh mô tả:</span>
							      		<input multiple type="file" name="img_mota[]" id="img_mota_add[]" class=" col-md-4" onchange="return check_img_more('img_mota_add[]','error_img_mota_sp_add','review_img_mota_add')">
							      		<div id="review_img_mota_add" class="col-md-4"></div>
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_img_mota_sp_add"></div>
							      	</div>
							      </div>
							      <div class="row mt-1">
							      		<span class="col-md-4">Tình trạng:</span>
							      		<select  class="form-control col-md-4" name="status">
											<option value="1" >hiển thị</option>
											<option value="0" >không hiển thị</option>
										</select>
							      	</div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="submit" name="btn_add" id="btn_add"  class="btn btn-primary" onclick="return check_add_sp()">Lưu</button>
							      </div>
						      </form>
				    </div>
				  </div>
				</div><!-- het modal -->


			<table class="table table-striped mt-1" id="admin_list_product">
				  <thead>
				    <tr>
				      <th scope="col">Mã</th>
				      <th scope="col">Ảnh sản phẩm</th>
				      <th scope="col">Tên sản phẩm</th>
				      <th scope="col">Danh mục</th>
				      <th scope="col">Giá sản phẩm</th>
				      <th scope="col">Giảm giá</th>
				      <th scope="col">Tồn kho</th>
				      <th scope="col">Trạng thái</th>
				      <th scope="col">Tác vụ</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($data as $key => $value){ 
				  	$product_catalog = $db->get('*','catalog',array('id'=>$value['catalog_id']));
				  	$product_img_mota = $db->get('*','img_product',array('product_id'=>$value['id'])); ?>
				    <tr>
				      <th><?php echo $value['id']?></th>
				      <td><img  width="50" height="50" src="<?php echo $value['img_main']?>"></td>
				      <td><?php echo $value['name']?></td>
				      <td><?php echo $product_catalog[0]['name'] ?></td>
				      <td><?php echo number_format($value['price'])?>₫</td>
				      <td><?php echo $value['discount']?>%</td>
				      <td><?php echo $value['tonkho']?></td>
				      <td><?php echo ($value['status']=='1')?'hiển thị' :'không hiển thị';  ?></td>
				     	<td>
					      <button class="btn btn-primary" data-toggle="modal" data-target="#sua<?php echo $value['id']?>"><i class="fa fa-edit"></i></button>
					      <a class="btn btn-danger" href="?controller=xoa_sanpham&id=<?php echo $value['id']?>"><i class="fa fa-trash-alt"></i></a>
					   	</td>
				    </tr>
				    <div class="modal fade" id="sua<?php echo $value['id']?>" tabindex="-1" aria-labelledby="sua<?php echo $value['id']?>" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="sua<?php echo $value['id']?>">Sửa sản phẩm</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				     <form method="post" action="?controller=ql_sanpham&id=<?php echo $value['id'] ?>" enctype="multipart/form-data">
							      <div class="modal-body">
							      	<div class="row mt-1">
							      		<span class="col-md-4">Tên sản phẩm:</span>
							      		<input type="text" class="form-control col-md-8" name="name" id="name_edit<?php echo $value['id'] ?>" value="<?php echo $value['name'] ?>" onchange="return check_name_sp('name_edit<?php echo $value['id'] ?>','error_name_sp_edit<?php echo $value['id'] ?>')" >
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_name_sp_edit<?php echo $value['id'] ?>"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Loại sản phẩm:</span>
							      		<select  class="form-control col-md-4" name="catalog_id">
							      			<option value="<?php echo $value['catalog_id'] ?>" ><?php echo $product_catalog[0]['name'] ?></option>
											<?php foreach ($data_catalog as $key) { 
												if ($key['id'] != $value['catalog_id']) {?>
											 	<option value="<?php echo $key['id'] ?>" ><?php echo $key['name'] ?></option>
												<?php } ?>
											<?php } ?>
										</select>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Giá sản phẩm:</span>
							      		<input type="text" class="form-control col-md-8" name="price" id="price_edit<?php echo $value['id'] ?>" value="<?php echo $value['price'] ?>"  onchange="return check_price_sp('price_edit<?php echo $value['id'] ?>','error_price_sp_edit<?php echo $value['id'] ?>')" >
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_price_sp_edit<?php echo $value['id'] ?>"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Giảm giá <i class="fa fa-percent"></i></span>
							      		<input type="text" class="form-control col-md-2" name="discount" id="discount_edit<?php echo $value['id'] ?>" value="<?php echo $value['discount']  ?>" onchange="return check_discount_sp('discount_edit<?php echo $value['id'] ?>','error_discount_sp_edit<?php echo $value['id'] ?>')">
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_discount_sp_edit<?php echo $value['id'] ?>"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Tồn kho:</span>
							      		<input type="text" class="form-control col-md-8" name="tonkho" id="tonkho_edit<?php echo $value['id'] ?>" value="<?php echo $value['tonkho'] ?>" onchange="return check_tonkho_sp('tonkho_edit<?php echo $value['id'] ?>','error_tonkho_sp_edit<?php echo $value['id'] ?>')" >
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_tonkho_sp_edit<?php echo $value['id'] ?>"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Mô tả ngắn:</span>
							      		<textarea class="form-control col-md-8" name="mota_ngan" id="mota_ngan_edit<?php echo $value['id'] ?>" onchange="return check_mota_ngan_sp('mota_ngan_edit<?php echo $value['id'] ?>','error_mota_ngan_sp_edit<?php echo $value['id'] ?>')"><?php echo $value['mota_ngan'] ?></textarea>
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_mota_ngan_sp_edit<?php echo $value['id'] ?>"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Mô tả dài:</span>
							      		<textarea class="form-control col-md-8" rows="7" name="mota_dai" id="mota_dai_edit<?php echo $value['id'] ?>" onchange="return check_mota_dai_sp('mota_dai_edit<?php echo $value['id'] ?>','error_mota_dai_sp_edit<?php echo $value['id'] ?>')"><?php echo $value['mota_dai'] ?></textarea>
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_mota_dai_sp_edit<?php echo $value['id'] ?>"></div>
							      	</div>
							      	<div class="row mt-1">
							      		<span class="col-md-4">Ảnh chính:</span>
							      		<div id="review_img_main_edit<?php echo $value['id'] ?>" class="col-md-2"><img width="50" height="50" src="<?php echo $value['img_main'] ?>"></div>
							      		<input type="file" name="img_main" id="img_main_edit<?php echo $value['id'] ?>" class="col-md-6" onchange="return check_img_one('img_main_edit<?php echo $value['id'] ?>','error_img_main_sp_edit<?php echo $value['id'] ?>','review_img_main_edit<?php echo $value['id'] ?>')">
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_img_main_sp_edit<?php echo $value['id'] ?>" ></div>
							      	</div>
							      	<div class="row mt-2">
							      		<span class="col-md-4">Ảnh phụ:</span>
							      		<div class="col-md-2" id="review_img_phu_edit<?php echo $value['id'] ?>" ><img width="50" height="50" src="<?php echo $value['img_phu'] ?>"></div>
							      		<input type="file" name="img_phu" id="img_phu_edit<?php echo $value['id'] ?>" class=" col-md-6" onchange="return check_img_one('img_phu_edit<?php echo $value['id'] ?>','error_img_phu_sp_edit<?php echo $value['id'] ?>','review_img_phu_edit<?php echo $value['id'] ?>')">
							      	</div>
							      	<div class="row">
							      		<div class="col-md-12" id="error_img_phu_sp_edit<?php echo $value['id'] ?>" ></div>
							      	</div>
							      	<div class="row mt-2">
							      		<span class="col-md-4">Ảnh mô tả:</span>
							      		<div class="col-md-8">
							      			<?php foreach ($product_img_mota as $key_img ) {?>
							      				<img width="50" height="50" src="<?php echo $key_img['img'] ?>">
							      			<?php } ?>
							      		</div>
							      		<div class="col-md-4"></div>
							      		<input multiple type="file" name="img_mota[]" id="img_mota_edit[]<?php echo $value['id'] ?>" class=" col-md-8" onchange="return check_img_more('img_mota_edit[]<?php echo $value['id'] ?>','error_img_mota_sp_edit<?php echo $value['id'] ?>','review_img_mota_edit<?php echo $value['id'] ?>')">
							      	</div>
							      	<div class="row">
							      		<div class="col-md-8" id="error_img_mota_sp_edit<?php echo $value['id'] ?>"></div>
							      		<div class="col-md-4" id="review_img_mota_edit<?php echo $value['id'] ?>"></div>
							      	</div>
							      </div>
							      <div class="row mt-1">
							      		<span class="col-md-4">Tình trạng:</span>
							      		<select  class="form-control col-md-4" name="status">
											<option value="<?php echo $value['status'] ?>"><?php echo ($value['status']=='1')?'hiển thị' : 'không hiển thị' ?></option>
											<?php if ($value['status']=='1') {?>
											<option value="0">không hiển thị</option>	
											<?php }else{?>
											<option value="1">hiển thị</option>	
											<?php } ?>
										</select>
							      	</div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="submit" name="btn_edit" onclick="return check_edit_sp('name_edit<?php echo $value['id'] ?>','error_name_sp_edit<?php echo $value['id'] ?>','price_edit<?php echo $value['id'] ?>','error_price_sp_edit<?php echo $value['id'] ?>','discount_edit<?php echo $value['id'] ?>','error_discount_sp_edit<?php echo $value['id'] ?>','tonkho_edit<?php echo $value['id'] ?>','error_tonkho_sp_edit<?php echo $value['id'] ?>','mota_ngan_edit<?php echo $value['id'] ?>','error_mota_ngan_sp_edit<?php echo $value['id'] ?>','mota_dai_edit<?php echo $value['id'] ?>','error_mota_dai_sp_edit<?php echo $value['id'] ?>')" class="btn btn-primary">Lưu</button>
							      </div>
						      </form>
				    </div>
				  </div>
				</div><!-- het modal -->	
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