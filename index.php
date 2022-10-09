<?php
require_once('modules/class-hash.php');

$obj_hash = new hash();

$clear_data='Abcd123';
if (!empty($clear_data)) {
	list($flag,$result)=$obj_hash->encryption_data($clear_data);

	echo 'clear data: '.$clear_data.'</br>';
	if($flag){
		echo 'encrypted data: '.$result.'</br>';
	}else{
		echo 'failed: '.$result.'</br>';
	}
}else{
	echo 'error: clear data is null </br>';
}