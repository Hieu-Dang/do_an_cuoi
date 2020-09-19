<?php 
	session_start();
	require_once('./model/helper.php');
	require_once('./model/database.php');
	$db = new Database();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	}else{
		$controller = 'login';
	 }
	switch ($controller) {
		case 'login':
			require_once('controller/login.php');
			break;
		case 'logout':
			require_once('controller/logout.php');
			break;	
		case 'trangchu':
			require_once('controller/trangchu.php');
			break;	
		case 'doanhthu':
			require_once('controller/doanhthu.php');
			break;	
		case 'ql_nhanvien':
			require_once('controller/ql_nhanvien.php');
			break;	
		case 'ql_donhang':
			require_once('controller/ql_donhang.php');
			break;		
		case 'ql_sanpham':
			require_once('controller/ql_sanpham.php');
			break;		
			break;	
		case 'ql_catalog':
			require_once('controller/ql_catalog.php');
			break;	
		case 'ql_user':
			require_once('controller/ql_user.php');
			break;		
@@ -53,7 +56,10 @@
			break;	
		case 'xoa_shipper':
			require_once('controller/xoa_shipper.php');
			break;								
			break;	
		case 'xoa_sanpham':
			require_once('controller/xoa_sanpham.php');
			break;							
		default:
			echo "Lỗi trang";
			break;
