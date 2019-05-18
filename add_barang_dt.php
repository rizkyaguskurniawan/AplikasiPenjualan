<?php 
include 'config.php';
$nama=$_POST['nama'];
$harga_jual=$_POST['harga_jual'];
$harga_beli=$_POST['harga_beli'];
$satuan=$_POST['satuan'];
$keterangan=$_POST['keterangan'];

mysql_query("insert into barang values('','$nama','$harga_jual','$harga_beli','$satuan','$keterangan')");
header("location:barang.php");

 ?>