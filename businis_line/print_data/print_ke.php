<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" 
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
</head>
<body>
<?php
	include "../config/koneksi.php";
?>
<h2 align="center"><img src="asset/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Aprtement Bukit Golf Pondok indah</h2>
<h3 align="center">Data Pencatatan Air</h3>
<div class="card-body">
		<table class="w3-table w3-striped" border="1">
			<tr>
				<th style="text-align: center;">Nomer ID</th>
				<th style="text-align: center;">Nama Karyawan</th>
				<th style="text-align: center;">Alamat Karyawan</th>
				<th style="text-align: center;">Jabatan</th>
			</tr>
			<?php 
		$sql = mysqli_query($koneksi,"select *from tb_ke");
		while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['id_ke'] ?></td>
				<td><?php echo $data['nama'] ?></td>
				<td><?php echo $data['alamat'] ?></td>
				<td><?php echo $data['jabatan'] ?></td>
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