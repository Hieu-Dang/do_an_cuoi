<?php 
	if (!isset($_SESSION['ss_admin_nhanvien'])) {
		header('location: ?controller=login');
	}else{
		$data_user=$db->get('*','shipper',array('id'=>$_SESSION['ss_admin_nhanvien']));
	} 	
	require_once('view/ql_ship.php');
?>