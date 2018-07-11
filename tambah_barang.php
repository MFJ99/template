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
		  <h2>Tambah Barang</h2>
		  <p>===---===</p>
		  <form action="proses_tambah_barang.php" method="post">
		  	<table border="0"  align="center">
		  		<tr>
		  			<td align="right">Kode Barang : </td>
		  			<td><input type="text" name="kdBrg" id="kdBrg" size="10"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Nama Barang : </td>
		  			<td><input type="text" name="nmBrg" id="nmBrg" size="40"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Jenis Barang : </td>
		  			<td><input type="text" name="jnsBrg" id="jnsBrg"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Qty : </td>
		  			<td><input type="text" name="qty" id="qty" size="5"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Harga Satuan : </td>
		  			<td><input type="text" name="hargaU" id="hargaU" size="10" placeholder="Rp..."></td>
		  		</tr>
		  		<tr align="center">
		  			<td colspan="2"><input type="submit" name="submit" value="BELI">
		  			<input type="reset" name="reset" value="RESET"></td>
		  		</tr>
		  	</table>
		  </form>

		</div>
    </body>
</html> 
