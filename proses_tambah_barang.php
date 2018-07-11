<?php include "koneksi.php"; 
		  		

if(isset($_POST['submit'])){
	$kdBrg = $_POST['kdBrg'];
	$nmBrg = $_POST['nmBrg'];
	$jnsBrg = $_POST['jnsBrg'];
	$qty = $_POST['qty'];
	$hargaU = $_POST['hargaU'];
	$total = $_POST['hargaU'] * $_POST['qty'];
	$hargaT = $total;

	$query = "INSERT INTO barang VALUES('$kdBrg','$nmBrg','$jnsBrg','$qty','$hargaU','$hargaT')";
	$proses = mysql_query($query, $konek);

	if ($proses) {
		header('location: data_barang.php');
	}else{
		echo "gagal menyipan";
	}

}