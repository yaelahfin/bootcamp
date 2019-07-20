<?php
$db = new mysqli("localhost","root","","tujuh");
if($db -> connect_error){
	die("gagal konek ke databases " . $db -> connect_error);
}
$sql = "select nama.id as id,nama.name as nama,work.name as work,kategori.name as category from nama
			inner join work on nama.id_work = work.id
			inner join kategori on nama.id_kategori = kategori.id
			order by nama.id";
$result = $db -> query($sql);
if($result){
	while($row = $result -> fetch_assoc()){
		$data[] = $row;
	}
	$res['user'] = $data;
	$res['status'] = "ok";
}else{
	$res['msg'] = $db -> connect_error;
	$res['status'] = "failed";
}
echo json_encode($res);
$db -> close();
?>