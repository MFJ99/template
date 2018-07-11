<?php
include 'koneksi.php';

$kdBrg 		= $_POST['kdBrg'];
$nmBrg 		= $_POST['nmBrg'];
$jnsBrg 	= $_POST['jnsBrg'];
$qty 		= $_POST['qty'];
$hargaU 	= $_POST['hargaU'];
$hargaT 	= $_POST['qty'] * $_POST['hargaU'];

$query = "UPDATE barang SET nmBrg='$nmBrg', jnsBrg='$jnsBrg', qty='$qty', hargaU='$hargaU', hargaT='$hargaT' WHERE kdBrg='$kdBrg'";
$proses = mysql_query($query, $konek);

	if ($proses) {
		header('location: data_barang.php');
	}else{
		echo "gagal Update";
	}

?>