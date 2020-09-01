<?php 
	session_start();
	require_once('./model/database.php');
	$db = new Database();

	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	}else{
		$controller = 'trangchu';
	}

	switch ($controller) {
		case 'trangchu':
			require_once('controller/trangchu.php');
			break;
		default:
			require_once('controller/error.php');
			break;
	}
?>