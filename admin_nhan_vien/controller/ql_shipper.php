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
			$data_edit= $db->get('*','shipper',array('id'=>$id))[0];
			if ($full_name!=$data_edit['full_name']) {
				$db->update('shipper',array('full_name'=>$full_name),array('id'=>$id));
			}
			if ($cmnd!=$data_edit['cmnd']) {
				$db->update('shipper',array('cmnd'=>$cmnd),array('id'=>$id));
			}
			if ($phone!=$data_edit['phone']) {
				$db->update('shipper',array('phone'=>$phone),array('id'=>$id));
			}
			header('location: ?controller=ql_shipper');
		}else{
			header('location: ?controller=ql_shipper');
		}
	}
	//xử lí tìm kiếm theo tên shipper
	if (!empty($_GET['keyword'])) {
			$keyword = $_GET['keyword'];
			//làm phần phân trang
			//hiển thị sản phẩm theo phần trang
			$data=$db->data_search('shipper',array(),array('full_name'=>$keyword));
			$number=count_array($data);
			$sp_1_trang= 1;
			$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
			$off= ($trang_hientai - 1)* $sp_1_trang;
			$data= $db->loc_data('shipper',array(),array('full_name'=>$keyword),'id','ASC',$sp_1_trang,$off);
			//Làm nút phân trang
			$count_page= ceil($number / $sp_1_trang);
			$paging = paging($count_page,$trang_hientai,'ql_shipper&keyword='.$keyword.'');	
	}else{
		//làm phần phân trang
		//hiển thị sản phẩm theo phần trang
		$data=$db->get('*','shipper',array());
		$number=count_array($data);
		$sp_1_trang= 7;
		$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
		$off= ($trang_hientai - 1)* $sp_1_trang;
		$data= $db->loc_data('shipper',array(),array(),'id','ASC',$sp_1_trang,$off);
		//Làm nút phân trang
		$count_page= ceil($number / $sp_1_trang);
		$paging = paging($count_page,$trang_hientai,'ql_shipper');
	}
	require_once('view/ql_shipper.php');
?>