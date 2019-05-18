<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Barang</h3>
<a class="btn" href="barang.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysql_real_escape_string($_GET['id']);
$det=mysql_query("select * from barang where id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
<form action="edit_barang_dt.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>"></td>
                        </tr>
			<tr>
				<td>Harga Jual</td>
				<td><input type="text" class="form-control" name="harga_jual" value="<?php echo $d['harga_jual'] ?>"></td>
			</tr>
			<tr>
				<td>Harga Beli</td>
				<td><input type="text" class="form-control" name="harga_beli" value="<?php echo $d['harga_beli'] ?>"></td>
			</tr>
			<tr>
				<td>Satuan</td>
				<td><input type="text" class="form-control" name="satuan" value="<?php echo $d['satuan'] ?>"></td>
			</tr>
                        <tr>
				<td>Keterangan</td>
				<td><input type="text" class="form-control" name="keterangan" value="<?php echo $d['keterangan'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>