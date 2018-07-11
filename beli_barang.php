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
		  <h2>Transaksi Pembelian</h2>
		  <p>===---===</p>
		  <form action="proses_beli_barang.php" method="post">
		  	<table border="0"  align="center">
		  		<tr>
		  			<td align="right">ID Pembelian/No. Nota : : </td>
		  			<td><input type="text" name="id_beli" id="id_beli"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Kode Barang : </td>
		  			<td><input type="text" name="kdBrg" id="kdBrg"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Jumlah Beli : </td>
		  			<td><input type="text" name="jml_Beli" id="jml_Beli"></td>
		  		</tr>
		  		<tr>
		  			<td align="right">Tanggal Beli : </td>
		  			<td><input type="date" name="tgl_Beli" id="tgl_Beli" ></td>
		  		</tr>
		  		<tr align="center">
		  			<td colspan="2"><p>
		  				<input type="submit" name="submit" value="BELI"> ||
		  				<input type="reset" name="reset" value="RESET">
		  			</p></td>
		  		</tr>
		  	</table>
		  </form>

		</div>
    </body>
</html> 
