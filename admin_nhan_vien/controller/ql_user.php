<?php 
	if (!isset($_SESSION['ss_admin_nhanvien'])) {
		header('location: ?controller=trangchu');
	}else{
		$data_user=$db->get('*','admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
	} 	
	require_once('view/ql_user.php');
?>