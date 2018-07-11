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
		  <h2>Informasi Data Barang</h2>
		  <p>===---===</p>
				  <?php 
			include "koneksi.php";

			$kdBrg = $_GET['kdBrg'];
			$data = mysql_query("SELECT * FROM barang WHERE kdBrg='$kdBrg'")or die(mysql_error());

			while($hasil = mysql_fetch_array($data)){
			?>
		  <form action="data_barang.php" method="post">
		  	<table border="0"  align="center">
		  		<tr>
		  			<td align="left">Kode Barang : </td>
		  			<td><?php echo $hasil['kdBrg']; ?></td>
		  		</tr>
		  		<tr>
		  			<td align="left"><p>Nama Barang : </p></td>
		  			<td><?php echo $hasil['nmBrg']; ?></td>
		  		</tr>
		  		<tr>
		  			<td align="left">Jenis Barang : </td>
		  			<td><?php echo $hasil['jnsBrg']; ?></td>
		  		</tr>
		  		<tr>
		  			<td align="left"><p> Qty : </p></td>
		  			<td><?php echo $hasil['qty']; ?></td>
		  		</tr>
		  		<tr>
		  			<td align="left">Harga Satuan : </td>
		  			<td>Rp. <?php echo  number_format($hasil['hargaU']); ?></td>
		  		</tr>
		  		<tr>
		  			<td align="left"><p> Harga Total : </p></td>
		  			<td>Rp. <?php echo  number_format($hasil['hargaT']); ?></td>
		  		</tr>
		  		<tr align="center">
		  			<td colspan="2"><input type="submit" name="submit" value="Kembali"></td>
		  		</tr>
		  	</table>
		  </form>
	<?php } ?>
		</div>
    </body>
</html> 
