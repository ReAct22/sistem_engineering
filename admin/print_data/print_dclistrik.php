<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php include '../config/koneksi.php'; ?>
<h2 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Aprtement Bukit Golf Pondok indah</h2>
<h3 align="center">Data Pencatatan Listrik</h3>
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
			<th><img src="assets/img/<?php echo $data['gambar'] ?>" width="50" height="50"></th>
			<th><?php echo $data['total'] ?></th>
			<th><?php echo $data['keterangan'] ?></th>
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