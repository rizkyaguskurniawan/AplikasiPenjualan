<?php include 'header.php';	?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Penjualan</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-pencil"></span>  Entry</button>

<br/>


<br/>

<table class="table">
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Nama Konsumen</th>
		<th>Nama Barang</th>
		<th>Jumlah</th>
		<th>Harga</th>			
		<th>Total Harga</th>		
		<th>Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['tanggal'])){
		$tanggal=mysql_real_escape_string($_GET['tanggal']);
		$brg=mysql_query("select * from penjualan where tanggal like '$tanggal' order by tanggal desc");
	}else{
		$brg=mysql_query("select * from penjualan order by tanggal desc");
	}
	$no=1;
	while($b=mysql_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['tanggal'] ?></td>
			<td><?php echo $b['nama_konsumen'] ?></td>
                        <td><?php echo $b['nama'] ?></td>
                        <td><?php echo $b['jumlah'] ?></td>
			<td>Rp.<?php echo number_format($b['harga']) ?>,-</td>
			<td>Rp.<?php echo number_format($b['total_harga']) ?>,-</td>			
			<td>		
				<a href="edit_penjualan.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_penjualan.php?id=<?php echo $b['id']; ?>&jumlah=<?php echo $b['jumlah'] ?>&nama=<?php echo $b['nama']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>

		<?php 
	}
	?>
	
</table>

<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Penjualan
				</div>
				<div class="modal-body">				
                                    <form action="penjualan_dt.php" method="post">
						<div class="form-group">
							<label>Tanggal</label>
							<input name="tgl" type="text" class="form-control" id="tgl" autocomplete="off">
						</div>	
                                                <div class="form-group">
							<label>Nama Konsumen</label>
							<input name="nama_konsumen" type="text" class="form-control" placeholder="Nama Konsumen" autocomplete="off">
						</div>	
						<div class="form-group">
							<label>Nama Barang</label>								
							<select class="form-control" name="nama">
								<?php 
								$brg=mysql_query("select * from barang");
								while($b=mysql_fetch_array($brg)){
									?>	
									<option value="<?php echo $b['nama']; ?>"><?php echo $b['nama'] ?></option>
									<?php 
								}
								?>
							</select>

						</div>	
                                                <div class="form-group">
							<label>Jumlah</label>
							<input name="jumlah" type="text" class="form-control" placeholder="Jumlah" autocomplete="off">
						</div>																	

						<div class="form-group">
							<label>Harga Jual / unit</label>
							<input name="harga" type="text" class="form-control" placeholder="Harga" autocomplete="off">
						</div>	
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<input type="reset" class="btn btn-danger" value="Reset">												
						<input type="submit" class="btn btn-primary" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});							
		});
	</script>
	<?php include 'footer.php'; ?>