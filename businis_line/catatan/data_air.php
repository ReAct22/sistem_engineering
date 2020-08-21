<?php 
	include "config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<h1 style="margin-left: 30px;">DATA PENCATATAN AIR</h1>
	<a href="?page=tambah_air" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="?page=print_listrik" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>
	<br>
	<div class="card-body">
		<table class="w3-table w3-striped" border="1">
		<tr>
			<th>No.Cek</th>
			<th>Nomer Unit</th>
			<th>Stand Meter Awal</th>
			<th>Stand Meter Akhir</th>
			<th>Gambar</th>
			<th>Total Pemakaian</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
		<?php 
		$sql = mysqli_query($koneksi,"select *from dc_air");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $data['id_air'] ?></td>
			<td><?php echo $data['unit'] ?></td>
			<td><?php echo $data['meter_awal'] ?></td>
			<td><?php echo $data['meter_akhir'] ?></td>
			<td><img src="img/<?php echo $data['gambar'] ?>" width="100" heigh="50"></td>
			<td><?php echo $data['total'] ?></td>
			<td><?php echo $data['keterangan'] ?></td>
			<td>
				<a href="?page=edit_air&id=<?php echo $data['id_air'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i>Edit</a>
				<a href="?page=delete_air&id=<?php echo $data['id_air'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Hapus</a>
			</td>
		</tr>
		<?php 
		}
		?>
	</table>
	</div>
