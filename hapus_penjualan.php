<?php 
include 'config.php';
$id=$_GET['id'];
mysql_query("delete from penjualan where id='$id'");
header("location:penjualan.php");

 ?>