<?php
	if (isset($_SESSION['ss_admin_nhanvien'])) {
		header('location: ?controller=trangchu');
	}
	if (isset($_POST['btn-login'])) {
		$error = array();
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username=='') {
			$error['username']="Tài khoản không được để trống";
		}
		if ($password=='') {
			$error['password']="Mật khẩu không được để trống";
		}
		if (!$error) {
			$data=$db->get('id,username,password','admin_nhanvien',array('username'=>$username));
			if (empty($data)) {
				$error['username']="Tài khoản này không tồn tại";
			}elseif ($data[0]['password']!=md5($password)) {
				$error['password']="Mật khẩu bạn đã nhập sai";
			}
		}
		if (!$error) {
			$_SESSION['ss_admin_nhanvien']=$data[0]['id'];
			header('location: ?controller=trangchu');	
		}
	}
	require_once('view/login.php');
?>