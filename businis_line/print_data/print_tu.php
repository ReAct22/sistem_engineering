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
<h3 align="center">Data PREVENTIF MAINTENANCE TES UDARA</h3>
<div class="card-body">
		<table class="w3-table w3-striped" border="1">
			<tr>
				<th>No.</th>
			<th>Periode Preventif</th>
			<th>Nama Utilitas</th>
			<th>Lokasi Utilitas</th>
			<th>Rencana Perkerjaan</th>
			<th>Realisasi Perkarjaan</th>
			<th>Nama Vendor</th>
			<th>Alamat Vendor</th>
			<th>Nama Teknisi</th>
			<th>Jenis Perkerjaan</th>
			<th>Foto Perkerjaan</th>
			<th>Rekomendasi</th>
			</tr>
			<?php 
		$sql = mysqli_query($koneksi,"select *from pm_tu ");
		while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['id_tu']; ?></td>
			<td><?php echo $data['periode'] ?></td>
			<td><?php echo $data['nama_utilitas'] ?></td>
			<td><?php echo $data['lokasi_utilitas'] ?></td>
			<td><?php echo date('d-m-y', strtotime($data['rencana'])) ?></td>
			<td><?php echo date('d-m-y', strtotime($data['realisasi'])) ?></td>
			<td><?php echo $data['nama_vendor'] ?></td>
			<td><?php echo $data['alamat_vendor'] ?></td>
			<td><?php echo $data['nama_teknisi'] ?></td>
			<td><?php echo $data['jenis_kerjaan'] ?></td>
			<td><img src="../assets/img/<?php echo $data['gambar'] ?>" width="100" ></td>
			<td><?php echo $data['rekomendasi'] ?></td>
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