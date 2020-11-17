<?php 
	include "../config/koneksi.php";
?>
<div style="margin-top: 70px;">
	
	<h1 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Apartement Bukit Golf Pondok Indah</h1><p>
		<h2 align="center">Data Preventife Apar</h2>
	</p>
	</div>
	<div class="card-body">
	<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>No Preventif</th>
		<th>Tower</th>
		<th>Lntai</th>
		<th>Deskripsi Lantai</th>
		<th>Posisi</th>
		<th>Deskripsi Posisi</th>
		<th>Masa Berlaku</th>
		<th>Preasure</th>
		<th>Deskripsi Preasure</th>
		<th>Keterangan</th>
	</tr>
	<?php 
	$sql = mysqli_query($koneksi,"select *from p_apar");
	while($data = mysqli_fetch_array($sql)){
	?>
	<tr>
		
		<td><?php echo $data['no_apar'] ?></td>
		<td><?php echo $data['tower'] ?></td>
		<td><?php echo $data['lantai'] ?></td>
		<td><?php echo $data['des_lantai'] ?></td>
		<td><?php echo $data['posisi'] ?></td>
		<td><?php echo $data['des_posisi'] ?></td>
		<td><?php echo date('d-m-Y', strtotime($data['masa_berlaku'])) ?></td>
		<td><?php echo $data['preasure'] ?></td>
		<td><?php echo $data['des_preasure'] ?></td>
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