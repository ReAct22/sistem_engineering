<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include "../config/koneksi.php";
?>
<h2 align="center"><img src="asset/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Aprtement Bukit Golf Pondok indah</h2>
<h3 align="center">Data Utilitas Lift</h3>
<div class="card-body">
		<table class="w3-table w3-striped" border="1">
			<tr>
				<th>No Utilitas</th>
				<th>Nama Utilitas</th>
				<th>Lokasi Utilitas</th>
				<th>Jumlah</th>
				<th>Keterangan</th>
			</tr>
			<?php 
		$sql = mysqli_query($koneksi,"select *from du_lift");
		while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['id_lift'] ?></td>
				<td><?php echo $data['nama_utilitas'] ?></td>
				<td><?php echo $data['lokasi_utilitas'] ?></td>
				<td><?php echo $data['jumlah'] ?></td>
				<td><?php echo $data['keterangan'] ?></td>
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