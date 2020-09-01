<?php require_once('layout/header.php'); ?>

	<div class="col-md-9" id="main-screen">
			<h1 class="text-center">Quản lí Nhân viên</h1>
			
 
			

		<div class="container mt-3">
			<input type="text" class="form-control col-md-3" placeholder="Username">
			<button class="btn-primary">Tìm kiếm</button>
			<table class="table table-striped mt-5">
				  <thead>
				    <tr>
				      <th scope="col">Stt</th>
				      <th scope="col">Họ tên</th>
				      <th scope="col">Số điện thoại</th>
				      <th scope="col">Quyền hạn</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $i=0;
				  	foreach ($data as $key => $value) {
				  	$i++; ?>
				    <tr>
				      <th><?php echo $i ?></th>
				      <td><?php echo $value['full-name']; ?></td>
				      <td></td>
				      <td></td>
				    </tr>
				    <?php } ?>
				  </tbody>
			</table>
		</div>			
	</div>
<?php require_once('layout/footer.php'); ?>