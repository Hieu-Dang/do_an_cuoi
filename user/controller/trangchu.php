<?php
	 $data=$db->get('*','product',array()); 
	 $new_product=$db->get('*','product',array('id' => '12'));
	require_once('view/trangchu.php');


?>