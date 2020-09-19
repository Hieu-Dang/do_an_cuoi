<?php
	$pd = $db->get('*','product',array());
	$user = $db->get('*','user',array('id'=>'2'));
	require_once('view/thanhtoan.php');
?>