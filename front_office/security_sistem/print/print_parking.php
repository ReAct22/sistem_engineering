<?php 
	include "../config/koneksi.php";
?>
<div style="margin-top: 70px;">
	
	<h1 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Apartement Bukit Golf Pondok Indah</h1><p>
		<h2 align="center">Data Parking</h2>
	</p>
	</div>
	<div class="card-body">
	<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>ID Tenant</th>
		<th>Nama</th>
		<th>Floor</th>
		<th>Unit</th>
		<th>Park No.Lot</th>
		<th>No Plat Kendaraan</th>
		<th>Nama Driver</th>
		<th>Keterangan</th>
	</tr>
	<?php 
	$sql = mysqli_query($koneksi,"select *from d_parking");
	while($data = mysqli_fetch_array($sql)){
	?>
	<tr>
		
		<td><?php echo $data['id_tenant'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><?php echo $data['floor'] ?></td>
		<td><?php echo $data['unit'] ?></td>
		<td><?php echo $data['no_park'] ?></td>
		<td><?php echo $data['no_plat'] ?></td>
		<td><?php echo $data['nama_driver'] ?></td>
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