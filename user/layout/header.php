<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
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
	<div class="container">
		<header>
			<div class="row" id="top-nav">
				<div class="col-md-2">
					<a href=""><i class="fa fa-phone"></i><span> Holine: 0919175811</span></a>
				</div>
				<div class="col-md-4"></div>
				<a href="" class="col-md-2 mt-1"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a>
				<a href="" class="col-md-2 mt-1"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
				<a href="" class="col-md-2 mt-1"><i class="fa fa-key"></i> Đăng ký</a>
			</div>
			<div class="row" id="main-nav">
				<div class="col-md-4 mt-2" id="logo">
					<h1>LOGO</h1>
				</div>
				<div class="col-md-8" id="search-bar">
					<div id="chinh-sach" class="row mt-2">
						<span class="col-md-4"><i class="fas fa-truck"></i> GIAO HÀNG NHANH CHÓNG</span>
						<span class="col-md-4"><i class="far fa-money-bill-alt"></i> THANH TOÁN LINH HOẠT</span>
						<span class="col-md-4"><i class="fas fa-sync-alt"></i> ĐỔI TRẢ HÀNG TRONG 30 NGÀY</span>
					</div>
					<div class="row mt-4">
						<input type="text" name="" class="col-md-7">
						<select  class="select-categories col-md-3">
						<option>Tất cả</option>	
						<option>Đồ ăn</option>
						<option>Chuồng nuôi</option>
						<option>Túi xách</option>
						<option>Vòng cổ dây dắt</option>
						</select>
						<button type="submit" id="btn-search" class="btn btn-search form-control p-0 col-md-1"><i class=" fas fa-search"></i></button>
					</div>
				</div>
			</div>
			<div class="row" id="bot-nav">
				<ul>
				<li class="active"><a href="#">Trang chủ</a></li>
				<li><a href="#">Sản Phẩm</a></li>
				<li><a href="#">Tin tức</a></li>
				<li><a href="#">Giới thiệu</a></li>
				<li><a href="#">Liên hệ</a></li>
			</ul>
			</div>
		</header>