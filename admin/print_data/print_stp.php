<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include "../config/koneksi.php";
?>
<h2 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Aprtement Bukit Golf Pondok indah</h2>
<h3 align="center">Data Pencatatan Listrik</h3>
<div class="card-body">
		<table class="w3-table w3-striped" border="1">
			<tr>
				<th>No. Preventif Maintenance</th>
				<th>TANGGAL RENCANA</th>
				<th>TANGGAL REALISASI</th>
				<th>NAMA Equipment</th>
				<th>LOKASI Equipment</th>
				<th>Jenis Kerusakan</th>
				<th>NAMA TEKNISI</th>
				<th>PROGRES</th>
				<th>KETERANGAN </th>
			</tr>
			<?php 
		$sql = mysqli_query($koneksi,"select *from pm_stp");
		while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['id_stp']; ?></td>
				<td><?php echo date('d-m-y', strtotime($data['rencana'])); ?></td>
				<td><?php echo date('d-m-y', strtotime($data['realisasi'])); ?></td>
				<td><?php echo $data['nama_stp']; ?></td>
				<td><?php echo $data['lokasi_stp']; ?></td>
				<td><?php echo $data['jenis_kerusakan']; ?></td>
				<td><?php echo $data['nama_teknisi']; ?></td>
				<td><?php echo $data['progres']; ?></td>
				<td><?php echo $data['keterangan']; ?></td>
			</tr>
			<?php 
				}
			?>
		</table>
		<script type="text/javascript">
			window.print();
		</script>
	</div>
</body>
</html>
</body>
</html>