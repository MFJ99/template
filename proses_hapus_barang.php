<?php
include'koneksi.php';

$kdBrg=$_GET['kdBrg'];
$hapus=mysql_query("delete from barang where kdBrg='$kdBrg'");

if($hapus){
	header('location: data_barang.php');
}else{
	echo "data gagal dihapus";
}
?>