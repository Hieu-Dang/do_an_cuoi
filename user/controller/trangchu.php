<?php
	 $data=$db->get('*','product',array()); 
	 $two_pd = $db->get('*','product',array('catalog_id' => '1'));
	require_once('view/trangchu.php');


?>