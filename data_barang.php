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
		  <h2>Data Barang</h2>
		  <p>===---===</p>

		  <p>Report</p>
		  <p><a href="tambah_barang.php"> Tambah Barang</a></p>
		  <table border='1' width='100%'>
		  	<caption>Data Barang</caption>
		  	<tr>
		  		<th>No </th>
		  		<th>Kode Barang</th>
		  		<th>Nama Barang</th>
		  		<th>Jenis Barang</th>
		  		<th>Qty</th>
		  		<th>Harga per unit</th>
		  		<th>Total Harga</th>
		  		<th>Opsi</th>
		  	</tr>
		  	<tr>

				<?php
			 		include "koneksi.php";
	
				 $data=mysql_query("SELECT * from barang order by kdBrg");
				 if ($data === FALSE) {
				 die(mysql_error());
				 }

			 	$no=1;
			 		while($hasil=mysql_fetch_array($data)){ 
			 		?>

			 		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $hasil['kdBrg']; ?></td>
			<td><?php echo $hasil['nmBrg']; ?></td>
			<td><?php echo $hasil['jnsBrg']; ?></td>
			<td><?php echo $hasil['qty']; ?></td>
			<td>Rp. <?php echo number_format($hasil['hargaU']); ?></td>
			<td>Rp. <?php echo number_format($hasil['qty'] * $hasil['hargaU']); ?></td>
			
			<td>
				<a class="edit" href="ubahData_barang.php?kdBrg=<?php echo $hasil['kdBrg']; ?>">Ubah</a> |
				<a class="hapus" href="proses_hapus_barang.php?kdBrg=<?php echo $hasil['kdBrg']; ?>">Hapus</a> |
				<a class="hapus" href="detail_barang.php?kdBrg=<?php echo $hasil['kdBrg']; ?>">Detail</a>					
			</td>
		</tr>
		<?php } ?>

		  </table>
		  
		</div>
    </body>
</html> 
