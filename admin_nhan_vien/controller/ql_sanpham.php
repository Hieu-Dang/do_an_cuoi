<?php 
	if (!isset($_SESSION['ss_admin_nhanvien'])) {
		header('location: ?controller=login');
	}else{
		$data_user=$db->get('*','admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
	}
	if (isset($_POST['btn_add'])) {
		if ($data_user[0]['quyen_product']=='1') {
		$name=$_POST['name'];
		$catalog_id=$_POST['catalog_id'];
		$price=$_POST['price'];
		$discount=$_POST['discount'];
		$tonkho=$_POST['tonkho'];
		$mota_ngan=$_POST['mota_ngan'];
		$mota_dai=$_POST['mota_dai'];
		$status=$_POST['status'];
		$img_main=$_FILES['img_main'];
		$img_phu=$_FILES['img_phu'];
		$img_mota=$_FILES['img_mota'];
		$error=array();
		//update file ảnh chính sản phẩm
			if (!empty($img_main['name'])) {
				$check_1 = upload_file_one($img_main,'../libs/img_product/','5242880',array('png','jpg','jpeg','gif'));
				if (!empty($check_1[0])) {
					$error['img_main']=$check_1[0];
				}
			}
		//update file ảnh phụ sản phẩm
			if (!empty($img_phu['name'])) {
				$check_2 = upload_file_one($img_phu,'../libs/img_product/','5242880',array('png','jpg','jpeg','gif'));
				if (!empty($check_1[0])) {
					$error['img_phu']=$check_2[0];
				}
			}
			//update file ảnh mô tả của sản phẩm
			if (!empty($img_mota['name'][0])) {
				$check_3=update_file_more($img_mota,'../libs/img_product/','5242880',array('png','jpg','jpeg','gif'));
				//kiểm tra lỗi nếu ko có thì làm tiếp
				if (!empty($check_3[0])) {
					$error['img_mota']=$check_3[0];
				}
			}
			if (empty($error)) {
				//Insert dữ liệu vào bảng product
				$db->insert('product',array(
					'catalog_id'=>$catalog_id,
					'name'=>$name,
					'price'=>$price,
					'discount'=>$discount,
					'tonkho'=>$tonkho,
					'mota_ngan'=>$mota_ngan,
					'mota_dai'=>$mota_dai,
					'status'=>$status,
					'img_main'=>$check_1[1],
					'img_phu'=>$check_2[1]
				));
				//insert dữ liêu vào bảng list_img
				//b1: lấy id product vừa tạo
				$number_last = $db->get_data_last('product','id','1')[0]['id'];
				//b2: lặp dữ liệu vào bảng
				foreach ($check_3[1] as $key) {
					$db->insert('img_product',array(
						'product_id'=>$number_last,
						'img'=>$key
					));
				}
				header('location: ?controller=ql_sanpham');
			}
		}	
	}
	if (isset($_POST['btn_edit'])) {
		if ($data_user[0]['quyen_product']=='1') {
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$data_product = $db->get('*','product',array('id'=>$id))[0];
			$data_list_img = $db->get('*','img_product',array('product_id'=>$id));
			if (!empty($data_product)) {
				$name=$_POST['name'];
				$catalog_id=$_POST['catalog_id'];
				$price=$_POST['price'];
				$discount=$_POST['discount'];
				$tonkho=$_POST['tonkho'];
				$mota_ngan=$_POST['mota_ngan'];
				$mota_dai=$_POST['mota_dai'];
				$status=$_POST['status'];
				$img_main=$_FILES['img_main'];
				$img_phu=$_FILES['img_phu'];
				$img_mota=$_FILES['img_mota'];
				if ($name!=$data_product['name']) {
					$db->update('product',array('name'=>$name),array('id'=>$id));
				}
				if ($catalog_id!=$data_product['catalog_id']) {
					$db->update('product',array('catalog_id'=>$catalog_id),array('id'=>$id));
				}
				if ($price!=$data_product['price']) {
					$db->update('product',array('price'=>$price),array('id'=>$id));
				}
				if ($discount!=$data_product['discount']) {
					$db->update('product',array('discount'=>$discount),array('id'=>$id));
				}
				if ($tonkho!=$data_product['tonkho']) {
					$db->update('product',array('tonkho'=>$tonkho),array('id'=>$id));
				}
				if ($mota_ngan!=$data_product['mota_ngan']) {
					$db->update('product',array('mota_ngan'=>$mota_ngan),array('id'=>$id));
				}
				if ($mota_dai!=$data_product['mota_dai']) {
					$db->update('product',array('mota_dai'=>$mota_dai),array('id'=>$id));
				}
				if ($status!=$data_product['status']) {
					$db->update('product',array('status'=>$status),array('id'=>$id));
				}
				if (!empty($img_main['name'])) {
					$check_1 = upload_file_one($img_main,'../libs/img_product/','5242880',array('png','jpg','jpeg','gif'));
					if (empty($check_1[0])) {
						unlink($data_product['img_main']);
						$db->update('product',array('img_main'=>$check_1[1]),array('id'=>$id));
					}
				}
				if (!empty($img_phu['name'])) {
					$check_2 = upload_file_one($img_phu,'../libs/img_product/','5242880',array('png','jpg','jpeg','gif'));
					if (empty($check_2[0])) {
						unlink($data_product['img_phu']);
						$db->update('product',array('img_phu'=>$check_2[1]),array('id'=>$id));
					}
				}
				if (!empty($img_mota['name'][0])) {
						$check_3=update_file_more($img_mota,'../libs/img_product/','5242880',array('png','jpg','jpeg','gif'));
						//kiểm tra lỗi nếu ko có thì làm tiếp
						if (empty($check_3[0])) {
							//kiểm tra xem có tồn tại ảnh mô tả ko
							if (!empty($data_list_img)) {
								//xóa ảnh mô tả trong file trước
								foreach ($data_list_img as $key ) {
									unlink($key['img']);
								}
								//xóa đường link trong csdl
								$db->delete('img_product',array('product_id'=>$id));
								//insert dữ liệu lên csdl
								foreach ($check_3[1] as $key) {
									$db->insert('img_product',array('product_id'=>$id,'img'=>$key));
								}
							}else{
								//insert dữ liệu lên csdl
								foreach ($check_3[1] as $key) {
									$db->insert('img_product',array('product_id'=>$id,'img'=>$key));
								}
							}
						}
					}
				header('location: ?controller=ql_sanpham');
			}else{
				header('location: ?controller=ql_sanpham');
			}
		}else{
			header('location: ?controller=ql_sanpham');
		}
	}
	}
	if (!empty($_GET['keyword'])) {
			$keyword = $_GET['keyword'];
			//làm phần phân trang
			//hiển thị sản phẩm theo phần trang
			$data=$db->data_search('product',array(),array('name'=>$keyword));
			$number=count_array($data);
			$sp_1_trang= 7;
			$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
			$off= ($trang_hientai - 1)* $sp_1_trang;
			$data= $db->loc_data('product',array(),array('name'=>$keyword),'id','ASC',$sp_1_trang,$off);
			//Làm nút phân trang
			$count_page= ceil($number / $sp_1_trang);
			$paging = paging($count_page,$trang_hientai,'ql_sanpham&keyword='.$keyword.'');		
	}else{
		//làm phần phân trang
		//hiển thị sản phẩm theo phần trang
		$data = $db->get('*','product',array());
		$number=count_array($data);
		$sp_1_trang= 7;
		$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
		$off= ($trang_hientai - 1)* $sp_1_trang;
		$data= $db->loc_data('product',array(),array(),'id','ASC',$sp_1_trang,$off);
		//Làm nút phân trang
		$count_page= ceil($number / $sp_1_trang);
		$paging = paging($count_page,$trang_hientai,'ql_sanpham');	
	}
	if (isset($_GET['catalog_id_loc']) && isset($_GET['status_loc']) ) {
		$catalog_id_loc = $_GET['catalog_id_loc'];
		$status_loc = $_GET['status_loc'];
		if ($catalog_id_loc=='' && $status_loc=='') {
			$data = $db->get('*','product',array());
			$number=count_array($data);
			$sp_1_trang= 7;
			$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
			$off= ($trang_hientai - 1)* $sp_1_trang;
			$data= $db->loc_data('product',array(),array(),'id','ASC',$sp_1_trang,$off);
			//Làm nút phân trang
			$count_page= ceil($number / $sp_1_trang);
			$paging = paging($count_page,$trang_hientai,'ql_sanpham&catalog_id_loc='.$catalog_id_loc.'&status_loc='.$status_loc.'');	
		}
		if ($catalog_id_loc!='' && $status_loc=='') {
			$data = $db->get('*','product',array('catalog_id'=>$catalog_id_loc));
			$number=count_array($data);
			$sp_1_trang= 7;
			$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
			$off= ($trang_hientai - 1)* $sp_1_trang;
			$data= $db->loc_data('product',array('catalog_id'=>$catalog_id_loc),array(),'id','ASC',$sp_1_trang,$off);
			//Làm nút phân trang
			$count_page= ceil($number / $sp_1_trang);
			$paging = paging($count_page,$trang_hientai,'ql_sanpham&catalog_id_loc='.$catalog_id_loc.'&status_loc='.$status_loc.'');	
		}
		if ($catalog_id_loc=='' && $status_loc!='') {
			$data = $db->get('*','product',array('status'=>$status_loc));
			$number=count_array($data);
			$sp_1_trang= 7;
			$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
			$off= ($trang_hientai - 1)* $sp_1_trang;
			$data= $db->loc_data('product',array('status'=>$status_loc),array(),'id','ASC',$sp_1_trang,$off);
			//Làm nút phân trang
			$count_page= ceil($number / $sp_1_trang);
			$paging = paging($count_page,$trang_hientai,'ql_sanpham&catalog_id_loc='.$catalog_id_loc.'&status_loc='.$status_loc.'');	
		}
		if ($catalog_id_loc!='' && $status_loc!='') {
			$data = $db->get('*','product',array('status'=>$status_loc,'catalog_id'=>$catalog_id_loc));
			$number=count_array($data);
			$sp_1_trang= 7;
			$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
			$off= ($trang_hientai - 1)* $sp_1_trang;
			$data= $db->loc_data('product',array('status'=>$status_loc,'catalog_id'=>$catalog_id_loc),array(),'id','ASC',$sp_1_trang,$off);
			//Làm nút phân trang
			$count_page= ceil($number / $sp_1_trang);
			$paging = paging($count_page,$trang_hientai,'ql_sanpham&catalog_id_loc='.$catalog_id_loc.'&status_loc='.$status_loc.'');	
		}
	}else{
		//làm phần phân trang
		//hiển thị sản phẩm theo phần trang
		$data = $db->get('*','product',array());
		$number=count_array($data);
		$sp_1_trang= 7;
		$trang_hientai= !empty($_GET['number_page']) ? $_GET['number_page']: 1;
		$off= ($trang_hientai - 1)* $sp_1_trang;
		$data= $db->loc_data('product',array(),array(),'id','ASC',$sp_1_trang,$off);
		//Làm nút phân trang
		$count_page= ceil($number / $sp_1_trang);
		$paging = paging($count_page,$trang_hientai,'ql_sanpham');	
	}
	$data_catalog = $db->get('*','catalog',array());
	require_once('view/ql_sanpham.php');
?>
