<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="layout/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
	
	<style type="text/css">
		<?php
		require_once('layout/css/style.css');?>
	</style>
</head>
<body>
	<div class="container-fluid">
		<header>
			<div class="row mt-1" id="top-nav">
				<div class="col-md-2 mt-2">
					<a href="" class=""><i class="fa fa-phone"></i><span> Holine: 0919175811</span></a>
				</div>
				<div class="pr-0 col-md-7"></div>
				<a href="?controller=giohang" class="mt-2 ml-3"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
				<a href="?controller=login" class=" mt-2 ml-4"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
				<a href="?controller=signup" class=" mt-2 ml-4"><i class="fa fa-key"></i> Đăng ký</a>
				<a href="?controller=myprofile" class=" mt-2 ml-4">proflie</a>
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
					
				</div>
			</div>
	<nav class="pl-0 navbar navbar-expand-lg" id="bot-nav">
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="?controller=trangchu">Trang chủ</a>
	      </li>
	    
	      <li class="nav-item">
	        <a class="nav-link" href="#" >Giới thiệu</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" >Liên hệ với chúng tôi</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control " type="search" placeholder="Search" aria-label="Search">
	      <button id="btn-search" class="btn btn-default" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
</header>