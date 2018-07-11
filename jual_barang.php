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
		  <h2>Transaksi Penjualan</h2>
		  <p>===---===</p>
		  <form action="proses_jual_barang.php" method="post">
		  	<table border="0"  align="center">
		  		<tr>
		  			<td align="right">ID Penjualan/No. Nota : </td>
		  			<td><input type="text" name="id_jual" id="id_jual"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Kode Barang : </td>
		  			<td><input type="text" name="kdBrg" id="kdBrg"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Jumlah Jual : </td>
		  			<td><input type="text" name="jml_Jual" id="jml_Jual"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Tanggal Jual : </td>
		  			<td><input type="date" name="tgl_Jual" id="tgl_Jual"></td>
		  		</tr>
		  		<tr align="center">
		  			<td colspan="2"><p>
		  				<input type="submit" name="submit" value="JUAL"> ||
		  				<input type="reset" name="reset" value="RESET">
		  			</p></td>
		  		</tr>
		  	</table>
		  </form>

		</div>
    </body>
</html> 
