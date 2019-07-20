<?php
require 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$respon = [];
	$nama = $_POST['nama'];
	$hobi = $_POST['work'];
	$kategori = $_POST['kategori'];
	$sql = "INSERT INTO category (name) values ('$kategori');";
	$result = $db -> query($sql);
	if($result == true){
		// cek last id category
		$result = $db -> query("select max(id) as id from category where name = '$kategori'");
		while ($row = $result -> fetch_array()){
			$lastid_category = $row['id'];
		}
		$result = $db -> query("INSERT INTO work (name,id_salary) values ('$work',$lastid_kategori);");
		if($result){
			$result = $db -> query("select max(id) as id from work where name = '$work'");
			// get last id work
			while ($row = $result -> fetch_array()) {
				$lastid_work = $row['id'];
			}
			$result = $db -> query("INSERT INTO nama (name,id_work,id_kategori) values ('$nama',$lastid_work,$lastid_kategori);");
			if($result){
				$respon['msg'] = "success";
			}else{
				$respon['msg'] = "error";
			}
		}else{
			$respon['msg'] = 'error';
		}
	}
	echo json_encode($respon);
}
?>