<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include '../config/koneksi.php'; ?>
<h2 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Aprtement Bukit Golf Pondok indah</h2>
<h3 align="center">PREVENTIF MAINTENANCE ELECTRICAL</h3>
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
				<td><img src="assets/img/<?php echo $data['gambar'] ?>" width="100" height="50"></td>
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