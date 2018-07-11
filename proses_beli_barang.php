<?php include "koneksi.php"; 
		  		

if(isset($_POST['submit'])){
	$id_beli = $_POST['id_beli'];
	$kdBrg = $_POST['kdBrg'];
	$jml_Beli = $_POST['jml_Beli'];
	$tgl_Beli = $_POST['tgl_Beli'];


	$query = "INSERT INTO beli_barang VALUES('$id_beli','$kdBrg','$jml_Beli','$tgl_Beli')";
	$proses = mysql_query($query, $konek);

	if ($proses) {
		header('location: data_barang.php');
	}else{
		echo "gagal menyipan";
	}

}