<!DOCTYPE html>
	<head><title>DIVA COMPUTER [TEMPLATE]</title>
		<link href="style.css" rel="stylesheet">
	</head>
	<body>

		<div class="sidenav">
		  <a href="index.php">Home</a>
		  <a href="data_barang.php">Data Barang</a>
		  <a href="jual_barang.php">Penjualan</a>
		  <a href="beli_barang.php">Pembelian</a>
		  <a href="laporan.php">Laporan</a>
		</div>

		<div class="main">
		  <h2>Perubahan Data Barang</h2>
		  <p>===---===</p>
				  <?php 
			include "koneksi.php";

			$kdBrg = $_GET['kdBrg'];
			$data = mysql_query("SELECT * FROM barang WHERE kdBrg='$kdBrg'")or die(mysql_error());

			while($hasil = mysql_fetch_array($data)){
			?>
		  <form action="proses_update_barang.php" method="post">
		  	<table border="0"  align="center">
		  		<tr>
		  			<td align="right">Kode Barang : </td>
		  			<td><input type="text" name="kdBrg" id="kdBrg" value="<?php echo $hasil['kdBrg']; ?>" readonly></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Nama Barang : </td>
		  			<td><input type="text" name="nmBrg" id="nmBrg" value="<?php echo $hasil['nmBrg']; ?>"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Jenis Barang : </td>
		  			<td><input type="text" name="jnsBrg" id="jnsBrg" value="<?php echo $hasil['jnsBrg']; ?>"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Qty : </td>
		  			<td><input type="text" name="qty" id="qty" value="<?php echo $hasil['qty']; ?>"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Harga Satuan : </td>
		  			<td><input type="text" name="hargaU" id="hargaU" value="<?php echo $hasil['hargaU']; ?>"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Total Harga : </td>
		  			<td><input type="text" name="hargaT" id="hargaT" value="<?php echo $hasil['hargaT']; ?>"></td>
		  		</tr>
		  		<tr align="center">
		  			<td colspan="2"><input type="submit" name="submit" value="SIMPAN PERUBHAN"></td>
		  		</tr>
		  	</table>
		  </form>
	<?php } ?>
		</div>
    </body>
</html> 
