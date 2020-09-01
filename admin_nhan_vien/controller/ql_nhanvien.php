<?php 
	if (!isset($_SESSION['ss_admin_nhanvien'])) {
		header('location: ?controller=login');
	}else{
		$data_user=$db->get('*','admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
	} 	
	$data=$db->get('*','admin_nhanvien',array());
	
	require_once('view/ql_nhanvien.php');
?>