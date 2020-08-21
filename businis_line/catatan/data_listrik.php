<?php 
	include "config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<h1 style="margin-left: 30px;">DATA PENCATATAN LISTRIK</h1>
	<a href="?page=tambah_listrik" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>
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
		$sql = mysqli_query($koneksi,"select *from dc_listrik");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<th><?php echo $data['id_listrik'] ?></th>
			<th><?php echo $data['unit'] ?></th>
			<th><?php echo $data['meter_awal'] ?></th>
			<th><?php echo $data['meter_akhir'] ?></th>
			<th><img src="img/<?php echo $data['gambar'] ?>" width="50" height="50"></th>
			<th><?php echo $data['total'] ?></th>
			<th><?php echo $data['keterangan'] ?></th>
			<th>
				<a href="?page=edit_listrik&idli=<?php echo $data['id_listrik']; ?>" class=" btn btn-sm btn-primary"><i class="fas fa-edit"></i>Edit</a>
				<a href="?page=delete_listrik&idli=<?php echo $data['id_listrik']; ?>" class=" btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</a>
			</th>
		</tr>
		<?php 
			}
		?>
	</table>
</div>