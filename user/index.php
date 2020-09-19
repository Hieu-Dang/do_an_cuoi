<?php 
	session_start();
	require_once('./model/database.php');
	$db = new Database();

	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	}else{
		$controller = 'trangchu';
	}

	switch ($controller) {
		case 'trangchu':
			require_once('controller/trangchu.php');
			break;
		case 'login':
			require_once('controller/login.php');
			break;	
		case 'signup':
			require_once('controller/signup.php');
			break;		
		case 'chitietsp':
			require_once('controller/chitietsp.php');
			break;	
		case 'giohang':
			require_once('controller/giohang.php');
			break;		
		case 'thanhtoan':
			require_once('controller/thanhtoan.php');
			break;		
		case 'myprofile':
			require_once('controller/myprofile.php');
			break;	
		case 'myoder':
			require_once('controller/myoder.php');
			break;
		case 'myproduct':
			require_once('controller/myproduct.php');
			break;			
		case 'logout':
			require_once('controller/myproduct.php');
			break;					
		default:
			require_once('controller/error.php');
			break;
	}
?>