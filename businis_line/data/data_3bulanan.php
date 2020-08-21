<?php 
	include "config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<nav class="w3-blok-item w3-padding">
		<a href="?page=3bulan" class="w3-bar-item w3-button">PM Elektrical</a>
		<a href="?page=pmfa" class="w3-bar-item w3-button">PM Fire Alarm</a>
		<a href="?page=pm_mecha" class="w3-bar-item w3-button">PM Mechanical</a>
	</nav>
	<h1 style="margin-left: 30px;">PREVENTIF MAINTENANCE ELECTRICAL</h1>
	<a href="?page=tambah_pmelek" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>
	<br>
	<div class="card-body">
		<table class="w3-table w3-striped" border="1">
		<tr>
			<th>No.</th>
			<th>Periode Preventif</th>
			<th>Nama Utilitas</th>
			<th>Lokasi Utilitas</th>
			<th>Rencana Perkerjaan</th>
			<th>Realisasi Perkarjaan</th>
			<th>Foto Perkerjaan</th>
			<th>Opsi</th>
		</tr>
		<?php 
		$sql = mysqli_query($koneksi,"select *from pm_elektrical");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $data['id_pmelektrik'] ?></td>
			<td><?php echo $data['periode'] ?></td>
			<td><?php echo $data['nama_utilitas'] ?></td>
			<td><?php echo $data['lokasi_utilitas'] ?></td>
			<td><?php echo date('d-m-y',strtotime($data['rencana'])) ?></td>
			<td><?php echo date('d-m-y',strtotime($data['realisasi'])) ?></td>
			<td><img src="img/<?php echo $data['gambar'] ?>" width="100" height="50"></td>
			<td>
				<a href="?page=edit_pmelektrik&id=<?php echo $data['id_pmelektrik'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i>Edit</a>
				<a href="?page=delete_pmelektrik&id=<?php echo $data['id_pmelektrik'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Hapus</a>
			</td>
		</tr>
		<?php 
		}
		?>
	</table>
	</div>
