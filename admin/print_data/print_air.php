<?php 
	include "config/koneksi.php";
?>
	<div style="margin-top: 70px;">
	<h1 align="center"><img src="img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Apartement Bukit Golf Pondok Indah</h1><p>
		<h2 align="center">Data Complaine Sipil</h2>
	</p>
	</div>
	<div class="card-body">
		<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>Nomer Cek</th>
		<th>Nomer Unit</th>
		<th>Stand Meter Awal</th>
		<th>Stand Meter Akhir</th>
		<th>Gambar</th>
		<th>Total Pemakaian</th>
		<th>Keterangan</th>
	</tr>
	<?php
	$sql = mysqli_query($koneksi,"select *from dp_air");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $data['id_cek'] ?></td>
			<td><?php echo $data['unit'] ?></td>
			<td><?php echo $data['meter_awal'] ?></td>
			<td><?php echo $data['meter_akhir'] ?></td>
			<td><img src="img/<?php echo $data['gambar'] ?>" width="100" heigh="50"></td>
			<td><?php echo $data['pemakaian'] ?></td>
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