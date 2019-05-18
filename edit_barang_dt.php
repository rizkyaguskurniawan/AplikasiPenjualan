<?php 
include 'config.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$harga_jual=$_POST['harga_jual'];
$harga_beli=$_POST['harga_beli'];
$satuan=$_POST['satuan'];
$keterangan=$_POST['keterangan'];

mysql_query("update barang set nama='$nama', harga_jual='$harga_jual', harga_beli='$harga_beli', satuan='$satuan', keterangan='$keterangan' where id='$id'");
header("location:barang.php");

?>