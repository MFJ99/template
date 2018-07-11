<?php
	$host ='localhost';
	$user='root';
	$password='';
	$db='template';

	$konek = mysql_connect($host,$user,$password,$db) or die("koneksi gagal");
	mysql_select_db($db) or die("Database tidak ditemukan");
