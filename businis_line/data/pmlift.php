<?php 
	include "config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<nav class="w3-blok-item w3-padding">
		<a href="?page=bulanan" class="w3-bar-item w3-button">Ac Public Area</a>
		<a href="?page=acten" class="w3-bar-item w3-button">Ac Tenant</a>
		<a href="?page=pmlift" class="w3-bar-item w3-button">Lift</a>
	</nav>
	<h1 style="margin-left: 30px;">PREVENTIF MAINTENANCE Lift</h1>
	<a href="?page=tambah_pmlift" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="?page=print_pmlift" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>
	<br>
	<div class="card-body">
		<table class="w3-table w3-striped" border="1">
			<tr>
				<th>No. Preventif Maintenance</th>
				<th>TANGGAL RENCANA</th>
				<th>TANGGAL REALISASI</th>
				<th>NAMA EQUIPMENT</th>
				<th>LOKASI EQUIPMENT</th>
				<th>NAMA VENDOR</th>
				<th>NAMA TEKNISI</th>
				<th>ALAMAT VENDOR</th>
				<th>PROGRES</th>
				<th>KETERANGAN </th>
			</tr>
			<?php 
			$sql = mysqli_query($koneksi,"select *from pm_lift");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['id_pmlift'] ?></td>
				<td><?php echo date('d-m-y', strtotime($data['tanggal_rencana'])) ?></td>
				<td><?php echo date('d-m-y', strtotime($data['tanggal_realisasi'])) ?></td>
				<td><?php echo $data['nama_equipmen'] ?></td>
				<td><?php echo $data['lokasi_equipmen'] ?></td>
				<td><?php echo $data['nama_vendor'] ?></td>
				<td><?php echo $data['nama_teknisi'] ?></td>
				<td><?php echo $data['alamat_vendor'] ?></td>
				<td><?php echo $data['progres'] ?></td>
				<td><?php echo $data['keterangan'] ?></td>
			</tr>
			<?php 
			}
			?>
		</table>
	</div>
</div>