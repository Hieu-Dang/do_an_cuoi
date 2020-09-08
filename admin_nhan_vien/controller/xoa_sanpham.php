<?php 
	if (!isset($_SESSION['ss_admin_nhanvien'])) {
		header('location: ?controller=login');
	}else{
		$data_user=$db->get('*','admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
	}
	if ($data_user[0]['quyen_product']=='1') {
		$id = $_GET['id'];
		$data_product = $db->get('*','product',array('id'=>$id))[0];
		$data_list_img = $db->get('*','img_product',array('product_id'=>$id));
		//xóa ảnh chính và phụ trong thư mục
		unlink($data_product['img_main']);
		unlink($data_product['img_phu']);
		//xóa ảnh mô tả ở trong thư mục
		foreach ($data_list_img as $key) {
			unlink($key['img']);
		}
		//xóa dữ liệu ở trong csdl
		$db->delete('product',array('id'=>$id));
	}
	header('location: ?controller=ql_sanpham');
?>