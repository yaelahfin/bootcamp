<?php
require 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$respon = [];
	$id = $_POST['id'];
	$sql = "delete nama,work,kategori
			from nama
			inner join hobby on nama.id_work = work.id
			inner join category on nama.id_category = kategori.id
			where nama.id = ".$id.";";
	$result = $db -> query($sql);
	if($result){
		$respon ['msg'] = 'success';
	}else{
		$respon ['msg'] = 'error';
	}
	echo json_encode($respon);
}
?>