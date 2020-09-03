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
?>