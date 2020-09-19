<?php 
	function count_array($array=array())
	{
		$count =0;
		foreach ($array as $key) {
			$count+=1;
		}
		return $count;
	}
	function in($data)
	{
		echo "<pre>";
		print_r($data);
	}
	//Hàm tạo nút phân trang
	function paging($count_page,$number_page,$name_page)
	{	
		$html ="";
		//Tạo nút trang đầu
		if ($number_page >= 2) {
			$html .= '<a href="?controller='.$name_page.'&number_page=1" class="btn "><i class="fa fa-angle-double-left"></i></a>';
		}
		//Tạo nút trở về
		if ($number_page >1) {
			$prev = $number_page-1;
			$html .= '<a href="?controller='.$name_page.'&number_page='.$prev.'" class="btn "><i class="fa fa-angle-left"></i></a>';
		}
		//Tạo nút trang
		for ($i=1; $i <= $count_page ; $i++) { 
			if ($i != $number_page) {
				if ($i > $number_page - 3 && $i < $number_page + 3) {
					$html .= '<a href="?controller='.$name_page.'&number_page='.$i.'" class="btn">'.$i.'</a>';
					}
				}else{
						$html .= '<strong class="btn">'.$number_page.'</strong>';
					}
		}
		//Tạo nút tiếp
		if ($number_page <=$count_page-1) {
			$next = $number_page+1;
			$html .= '<a href="?controller='.$name_page.'&number_page='.$next.'" class="btn "><i class="fa fa-angle-right"></i></a>';
		}
		//Tạo nút cuối trang
		if ($number_page <= $count_page-2) {
			$html .= '<a href="?controller='.$name_page.'&number_page='.$count_page.'" class="btn "><i class="fa fa-angle-double-right"></i></a>';
		}
		return $html;
	}
	//Hàm upload file theo điều kiện
	function upload_file_one($file,$link,$size,$condition=array())
	{
		$error='';
		//Bước 1 : Tạo đường dẫn upload lên hệ thống
		$target_file= $link.basename($file['name']);
		//bước 2 : kiểm tra điều kiện upload
		//2.1: kích thước
		if ($file['size'] > 5242880) {
			$error="Chỉ được upload file dưới 5md";
		}
		//2.2: kiểu file
		$file_type= pathinfo($file['name'], PATHINFO_EXTENSION);
		$file_type_allow=$condition;
		if (!in_array(strtolower($file_type), $file_type_allow)) {
				$error="Chỉ cho upload file ảnh";
		}
		//2.3: kiểm tra tồn tại, nếu tồn tại thì thêm 1 số đằng sau
		$num =1;
		$target_file= substr($target_file, 0, strrpos($target_file, "."));
		while (file_exists($target_file.".".$file_type)) {
			$target_file=$target_file.$num;
			$num++;	
		}
		$target_file.=".".$file_type;
		//bước 3: kiểm tra lỗi và update
		if (empty($error)) {
			move_uploaded_file($file['tmp_name'], $target_file);
		}
		return array($error,$target_file);
	}
	//Hàm upload nhiều file theo điều kiện
	function update_file_more($file,$link,$size,$condition=array())
	{
		$error='';
		$file_more=array();
		$target_file=array();
		//Bước 1 : Xử lí mảng file
		foreach ($file as $key => $value) {
			foreach ($value as $index => $value) {
				$file_more[$index][$key]= $value;
			}
		}
		foreach ($file_more as $key => $value) {
			//Bước 2 : Tạo đường dẫn upload lên hệ thống
			$target_file[$key]= $link.basename($value['name']);
			//Bước 3 : kiểm tra điều kiện upload
			//3.1: kích thước
			if ($value['size'] > 5242880) {
				$error="Chỉ được upload file dưới 5md";
			}
			//3.2: kiểu file
			$file_type= pathinfo($value['name'], PATHINFO_EXTENSION);
			$file_type_allow=$condition;
			if (!in_array(strtolower($file_type), $file_type_allow)) {
					$error="Chỉ cho upload file ảnh";
			}
			//3.3:kiểm tra tồn tại, nếu tồn tại thì thêm 1 số đằng sau
			$num =1;
			$target_file[$key]= substr($target_file[$key], 0, strrpos($target_file[$key], "."));
			while (file_exists($target_file[$key].".".$file_type)) {
				$target_file[$key]=$target_file[$key].$num;
				$num++;	
			}
			$target_file[$key].=".".$file_type;
			//bước 4: kiểm tra lỗi và update
			if (empty($error)) {
				move_uploaded_file($value['tmp_name'], $target_file[$key]);
			}
		}
		return array($error,$target_file);
	}
?> 