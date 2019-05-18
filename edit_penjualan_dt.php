<?php 
include 'config.php';
$tanggal=$_POST['tanggal'];
$nama_konsumen=$_POST['nama_konsumen'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];

mysql_query("update penjualan set tanggal='$tanggal', nama_konsumen='$nama_konsumen', nama='$nama', jumlah='$jumlah', harga='$harga' where id='$id'");
header("location:penjualan.php");

?>