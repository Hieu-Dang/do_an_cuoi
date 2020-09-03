<?php
	if (!isset($_SESSION['ss_admin_nhanvien'])) {
		header('location: ?controller=login');
	}else{
		$data_user=$db->get('*','admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
		if ($data_user[0]['quyen_user']=='1') {
			$id=$_GET['id'];
			$db->delete('shipper',array('id'=>$id));
		}
	} 
	header('location: ?controller=ql_shipper');
?>