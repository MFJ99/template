<?php include "koneksi.php"; 
		  		

if(isset($_POST['submit'])){
	$id_jual = $_POST['id_jual'];
	$kdBrg = $_POST['kdBrg'];
	$jml_Jual = $_POST['jml_Jual'];
	$tgl_Jual = $_POST['tgl_Jual'];



	$query = "INSERT INTO jual_barang VALUES('$id_jual','$kdBrg','$jml_Jual','$tgl_Jual')";
	$proses = mysql_query($query, $konek);

	if ($proses) {
		header('location: data_barang.php');
	}else{
		echo "gagal menyipan";
	}

}