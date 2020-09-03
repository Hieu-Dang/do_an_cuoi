<?php 
	class database
	{	
		protected $conn = null;
		protected $host = 'localhost:3306';
		protected $user = 'root';
		protected $pass = '';
		protected $name = 'do_an';
		
		public function __construct()
		{
			//connect mysql
			$this->connect();
                        		}
		public function connect()
		{
			$this->conn= new mysqli(
				$this->host,
				$this->user,
				$this->pass,
				$this->name
			);
			if (!$this->conn) {
				echo "Kết nối thất bại";
				exit();
			}
		}

		
		public function get($select,$table,$condition=array()){
			//b1: tạo cấu trúc sql
			$sql = "SELECT $select FROM $table ";
			if (!empty($condition)) {
				$sql .= "WHERE";
				foreach ($condition as $key => $value) {
					$sql.= " $key = '$value' AND";
				}
				$sql = trim($sql, "AND");
			}
			$query = mysqli_query($this->conn,$sql);
			$result = array();
			if ($query) {
				while ($row = mysqli_fetch_assoc($query)) {
					$result[]=$row;
				}
			}
			return $result;
		}
		//Tìm kiếm theo like dựa và bảng và cột mình muốn tìm
		public function data_search($table,$condition=array(),$like=array())
		{
			$sql = "SELECT * from $table ";
			if (!empty($condition) && empty($like)) {
				$sql.= "WHERE ";
				foreach ($condition as $key => $value) {
				$sql .= " $key = '$value' &&";
				}
				$sql = trim($sql,'&&');
			}			
			if (empty($condition) && !empty($like)) {
				$sql.= "WHERE ";
				foreach ($like as $key => $value) {
				$sql .= " $key LIKE '%$value%' ";
				}
			}
			if (!empty($condition) && !empty($like)) {
				$sql.= "WHERE ";
				foreach ($condition as $key => $value) {
				$sql .= " $key = '$value' &&";
				}
				$sql = trim($sql,'&&');
				foreach ($like as $key => $value) {
				$sql .= " && $key LIKE '%$value%' ";
				}
			}
			$query = mysqli_query($this->conn,$sql);
			$result = array();
			if ($query) {
				while ($row = mysqli_fetch_assoc($query)) {
					$result[]=$row;
				}
			}
			return $query;
		}
		// //hiển thị phân trang theo search
		// public function phan_trang_search($sp_1_trang,$off,$table,$column,$value)
		// {
		// 	$sql = "select * from $table 
		// 	WHERE $column LIKE '%$value%'
		// 	order by id ASC limit ".$sp_1_trang." offset ".$off;
		// 	$query = mysqli_query($this->conn,$sql);
		// 	$result = array();
		// 	if ($query) {
		// 		while ($row = mysqli_fetch_assoc($query)) {
		// 			$result[]=$row;
		// 		}
		// 	}
		// 	return $result;
		// }
		//loc dữ liệu+phân trang
		public function loc_data($table,$condition=array(),$like=array(),$dieukien,$sapxep,$limit,$off)
		{
			$sql = "SELECT * from $table ";
			if (!empty($condition) && empty($like)) {
				$sql.= "WHERE ";
				foreach ($condition as $key => $value) {
				$sql .= " $key = '$value' &&";
				}
				$sql = trim($sql,'&&');
			}			
			if (empty($condition) && !empty($like)) {
				$sql.= "WHERE ";
				foreach ($like as $key => $value) {
				$sql .= " $key LIKE '%$value%' ";
				}
			}
			if (!empty($condition) && !empty($like)) {
				$sql.= "WHERE ";
				foreach ($condition as $key => $value) {
				$sql .= " $key = '$value' &&";
				}
				$sql = trim($sql,'&&');
				foreach ($like as $key => $value) {
				$sql .= " && $key LIKE '%$value%' ";
				}
			}
			$sql .="order by $dieukien $sapxep ";
			if (!empty($limit)) {
				$sql .="LIMIT $limit ";
			}
			if (!empty($off)) {
				$sql .="OFFSET $off ";
			}
			if ($off=='0') {
				$sql .="OFFSET $off ";
			}
			$query = mysqli_query($this->conn,$sql);
			$result = array();
			if ($query) {
				while ($row = mysqli_fetch_assoc($query)) {
					$result[]=$row;
				}
			}
			return $query;
		}
		public function insert($table,$data=array())
		{
			//b1:Lấy giá trị của key cho vòa 1 mảng
			$keys = array_keys($data);
			//b2: xử lí chuỗi 
			$fields =  implode(",", $keys);
			//b3 xử lí giá trị value
			$value_str ='';
			foreach ($data as $key => $value) {
				$value_str .="'$value',"; 
			}
			//b4: xóa dấu phẩy ở cuối đi
			$value_str = trim($value_str, ",");

			$sql = "INSERT INTO $table ($fields) VALUES ($value_str)";
			$query = mysqli_query($this->conn,$sql);
			return $query;
		}

		public function update($table ,$data = array(),$condition=array())
		{
			//b1: lặp để lấy chuỗi
			$str ='';
			foreach ($data as $key => $value) {
				$str .= "$key = '$value',";
			}
			//b2: xóa dấu phẩy ở cuối đi
			$str = trim($str, ",");
			$sql = "UPDATE $table SET $str WHERE ";
			foreach ($condition as $key => $value) {
				$sql .= "$key = '$value'&&";
			}
			$sql = trim($sql,'&&');
			$query = mysqli_query($this->conn,$sql);
			return $query;
		}

		public function delete($table,$condition=array())
		{

			$sql = "DELETE FROM $table WHERE ";
			foreach ($condition as $key => $value) {
				$sql .= "$key = '$value'&&";
			}
			$sql = trim($sql,'&&');
			$query = mysqli_query($this->conn,$sql);
			return $query;
		}

	}
?>