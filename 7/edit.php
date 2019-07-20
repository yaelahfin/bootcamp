<?php
require 'config.php';
$output = [];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$nama = $_POST['nama'];
	$work = $_POST['work'];
	$kategori = $_POST['kategori'];
	$id = $_POST['id'];
	$sql = "update nama
			inner join work on nama.id_work = work.id
			inner join kateogri on nama.id_kategori = kategori.id
			set nama.name = '".$nama."' where nama.id = ".$id.";";
	
	
	$result = $db -> query($sql);
	if($result){
		$output['msg'] = "success";
		$sql = "update nama
			inner join work on nama.id_work = work.id
			inner join kategori on nama.id_kategori = kategori.id
			set work.name = '".$work."' where nama.id = ".$id.";";
				$result = $db -> query($sql);
		if($result){
			$output['msg'] = "success";
			$sql = "update nama
			inner join work on nama.id_work = work.id
			inner join kategori on nama.id_category = work.id
			set kategori.name = '".$kategori."' where nama.id = ".$id.";";
			$result = $db -> query($sql);
			if($result){
				$output['msg'] = "success";
			}else{
				$output['msg'] = "error";
			}
		}else{
			$output['msg'] = "error";
		}
	}else{
		$output['msg'] = "error";
	}
	echo json_encode($output);
}
	
?>