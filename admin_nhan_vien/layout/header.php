<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="layout/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	
	<style type="text/css">
		<?php
		require_once('layout/css/style.css');?>
	</style>
</head>
<body>
	<div class="container-fluid mt-1">
		<div class="row">
			<div class="col-md-2" id='admin-header'>
				<div class="row mt-2" >
					<span class=" col-md-7"><?php echo $data_user[0]['full_name']?></span>
					<a href="?controller=proflie"><span class="col-md-5 "><?php
						if($data_user[0]['lv']==1){
							echo 'admin';
						}else{
							echo "nhân viên";
						}
					?></span></a>
				</div>
				<div class="row mt-4">
					<div class="col-md-12" id="admin-option">
						<a href="?controller=doanhthu">doanh thu</a>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-md-12" id="admin-option">
						<a href="?controller=ql_nhanvien">nhân viên/shipper</a>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-md-12" id="admin-option">
						<a href="?controller=ql_donhang">giao dịch/đơn hàng</a>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-md-12" id="admin-option">
						<a href="?controller=ql_sanpham">sản phẩm/danh mục</a>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-md-12" id="admin-option">
						<a href="?controller=ql_user">người dùng</a>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-md-12" id="admin-option">
						<a href="?controller=ql_website">hiển thị web</a>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-md-12" id="admin-option">
						<a href="?controller=ql_feedback">comment/feedback</a>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-md-12" id="admin-option">
						<a href="?controller=ql_ship">tiền ship</a>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-md-12" id="admin-option">
						<a href="?controller=logout"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg> Đăng xuất</a>
					</div>
				</div>
			</div>