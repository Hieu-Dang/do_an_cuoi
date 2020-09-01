<?php 
	session_start();
	require_once('./model/helper.php');
	require_once('./model/database.php');
	$db = new Database();

	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	}else{
		$controller = 'login';
	 }

	switch ($controller) {
		case 'login':
			require_once('controller/login.php');
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
		case 'ql_shipper':
			require_once('controller/ql_shipper.php');
			break;		
		case 'ql_donhang':
			require_once('controller/ql_donhang.php');
			break;		
		case 'ql_sanpham':
			require_once('controller/ql_sanpham.php');
			break;		
		case 'ql_user':
			require_once('controller/ql_user.php');
			break;		
		case 'ql_website':
			require_once('controller/ql_website.php');
			break;				
		case 'ql_feedback':
			require_once('controller/ql_feedback.php');
			break;		
		case 'ql_ship':
			require_once('controller/ql_ship.php');
			break;	
		case 'variable':
				# code...
				break;	
		case 'xoa_nhanvien':
			require_once('controller/xoa_nhanvien.php');
			break;				
		case 'xoa_shipper':
			require_once('controller/xoa_shipper.php');
			break;									
		default:
			echo "Lỗi trang";
			break;
	}
?>