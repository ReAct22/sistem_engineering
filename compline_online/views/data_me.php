<?php 
	include "config/koneksi.php";
?>
<h3 style="margin-top: 70px;" class="ml-3">Data ME</h3>
<br>
<a href="?page=tambah_me" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i> Compline</a>
<a href="?page=print_me" class="btn btn-md btn-primary ml-3"><i class="fas fa-print"></i> Print</a>
<br>
<div class="card-body">
	<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>Nomer Compline</th>
		<th>Nama Tenant</th>
		<th>Tower</th>
		<th>Lantai</th>
		<th>Unit</th>
		<th>Kompline</th>
		<th>Nama Barang</th>
		<th>Keterangan</th>
	</tr>
	<?php 
	$sql = mysqli_query($koneksi,"select *from co_me");
	while($data = mysqli_fetch_array($sql)){
	?>
	<tr>
		<td><?php echo $data['id_complaine']; ?></td>
		<td><?php echo $data['name_tenant']; ?></td>
		<td><?php echo $data['tower']; ?></td>
		<td><?php echo $data['lantai']; ?></td>
		<td><?php echo $data['unit']; ?></td>
		<td><?php echo $data['complaine']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['keterangan']; ?></td>
	</tr>
	<?php 
}
	?>
</table>
</div>