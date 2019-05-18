<?php 

include 'config.php';
$tgl=$_POST['tgl'];
$nama_konsumen=$_POST['nama_konsumen'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];

$harga_beli=$data['harga_beli'];
$laba=$harga-$modal;
$labaa=$laba*$jumlah;
$total_harga=$harga*$jumlah;
mysql_query("insert into penjualan values('','$tgl','$nama_konsumen','$nama','$jumlah','$harga','$total_harga')")or die(mysql_error());
header("location:penjualan.php");

?>