<?php 
	if (!isset($_SESSION['ss_admin_nhanvien'])) {
		header('location: ?controller=login');
	}else{
		$data_user=$db->get('*','admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
	} 
	//Xử lí thêm nhân viên	
	if (isset($_POST['btn_add'])) {
		if ($data_user[0]['quyen_user']=='1') {
			$username=$_POST['username'];
			$password=$_POST['password'];
			$full_name=$_POST['full_name'];
			$phone=$_POST['phone'];
			$quyen_product=$_POST['quyen_product'];
			$quyen_user=$_POST['quyen_user'];
			$quyen_oder=$_POST['quyen_oder'];
			$check = $db->insert('admin_nhanvien',array(
				'username'=>$username,
				'password'=>md5($password),
				'full_name'=>$full_name,
				'phone'=>$phone,
				'quyen_product'=>$quyen_product,
				'quyen_user'=>$quyen_user,
				'quyen_oder'=>$quyen_oder,
				'lv'=>'2'
			));
			if ($check==true) {
				header('location: ?controller=ql_nhanvien');
			}
		}else{
			header('location: ?controller=ql_nhanvien');
		}
	}
	//xử lí sửa nhân viên
	if (isset($_POST['btn_edit'])) {
		if ($data_user[0]['quyen_user']=='1') {
			$username=$_POST['username'];
			$password=$_POST['password'];
			$full_name=$_POST['full_name'];
			$phone=$_POST['phone'];
			$quyen_product=$_POST['quyen_product'];
			$quyen_user=$_POST['quyen_user'];
			$quyen_oder=$_POST['quyen_oder'];
			$id = $_GET['id_edit'];
			$data_edit= $db->get('*','admin_nhanvien',array('id'=>$id))[0];
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
			header('location: ?controller=ql_nhanvien');
		}else{
			header('location: ?controller=ql_nhanvien');
		}
	}
	//xử lí khi người dùng có giá trị tìm kiếm
	if (!empty($_GET['keyword'])) {
			$keyword = $_GET['keyword'];
			//làm phần phân trang
			//hiển thị sản phẩm theo phần trang
			$data=$db->data_search('admin_nhanvien',array('lv'=>'2'),array('full_name'=>$keyword));
			$number=count_array($data);
			$sp_1_trang= 7;
			$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
			$off= ($trang_hientai - 1)* $sp_1_trang;
			$data= $db->loc_data('admin_nhanvien',array('lv'=>'2'),array('full_name'=>$keyword),'id','ASC',$sp_1_trang,$off);
			//Làm nút phân trang
			$count_page= ceil($number / $sp_1_trang);
			$paging = paging($count_page,$trang_hientai,'ql_nhanvien&keyword='.$keyword.'');	
	}else{
		//làm phần phân trang
		//hiển thị sản phẩm theo phân trang
		$data=$db->get('*','admin_nhanvien',array('lv'=>'2'));
		$number=count_array($data);
		$sp_1_trang= 7;
		$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
		$off= ($trang_hientai - 1)* $sp_1_trang;
		$data= $db->loc_data('admin_nhanvien',array('lv'=>'2'),array(),'id','ASC',$sp_1_trang,$off);
		//Làm nút phân trang
		$count_page= ceil($number / $sp_1_trang);
		$paging = paging($count_page,$trang_hientai,'ql_nhanvien');
	}
	
	
	require_once('view/ql_nhanvien.php');
?>