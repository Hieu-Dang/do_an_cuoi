<?php
	if (!isset($_SESSION['ss_admin_nhanvien'])) {
		header('location: ?controller=login');
	}else{
		$data_user=$db->get('*','admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
	}
	//Xử lí thêm nhân viên shipper	
	if (isset($_POST['btn_add'])) {
		if ($data_user[0]['quyen_user']=='1') {
			$full_name=$_POST['full_name'];
			$cmnd=$_POST['cmnd'];
			$phone=$_POST['phone'];	
			$check = $db->insert('shipper',array(
				'full_name'=>$full_name,
				'cmnd'=>$cmnd,
				'phone'=>$phone,
				'created'=>date('Y-m-d H:i:s'),
				'username_xuli'=>$data_user[0]['id']
			));
			if ($check==true) {
				header('location: ?controller=ql_shipper');
			}
		}else{
			header('location: ?controller=ql_shipper');
		}
	}
	//xử lí sửa nhân viên shipper
	if (isset($_POST['btn_edit'])) {
		if ($data_user[0]['quyen_user']=='1') {
			$full_name=$_POST['full_name'];
			$cmnd=$_POST['cmnd'];
			$phone=$_POST['phone'];
			$id = $_GET['id_edit'];
			// $data_edit= $db->get('*','admin_nhanvien',array('id'=>$id))[0];
			if ($username!=$data_edit['username']) {
				$db->update('admin_nhanvien',array('username'=>$username),array('id'=>$id));
			}
			if ($password!=$data_edit['password']) {
				$db->update('admin_nhanvien',array('password'=>md5($password)),array('id'=>$id));
			}
			if ($full_name!=$data_edit['full_name']) {
				$db->update('admin_nhanvien',array('full_name'=>$full_name),array('id'=>$id));
			}
			if ($phone!=$data_edit['phone']) {
				$db->update('admin_nhanvien',array('phone'=>$phone),array('id'=>$id));
			}
			if ($quyen_product!=$data_edit['quyen_product']) {
				$db->update('admin_nhanvien',array('quyen_product'=>$quyen_product),array('id'=>$id));
			}
			if ($quyen_user!=$data_edit['quyen_user']) {
				$db->update('admin_nhanvien',array('quyen_user'=>$quyen_user),array('id'=>$id));
			}
			if ($quyen_oder!=$data_edit['quyen_oder']) {
				$db->update('admin_nhanvien',array('quyen_oder'=>$quyen_oder),array('id'=>$id));
			}
			header('location: ?controller=ql_shipper');
		}else{
			header('location: ?controller=ql_shipper');
		}
	}
	$data=$db->get('*','shipper',array()); 
	require_once('view/ql_shipper.php');
?>