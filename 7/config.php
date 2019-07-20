<?php
$db = new mysqli("localhost","root","","tujuh");
if($db -> connect_error){
	die("gagal konek ke databases " . $db -> connect_error);
}
?>