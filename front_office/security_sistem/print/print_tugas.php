<?php 
	include "../config/koneksi.php";
?><div style="margin-top: 70px;">
	
	<h1 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Apartement Bukit Golf Pondok Indah</h1><p>
		<h2 align="center">Data Rencana Tugas</h2>
	</p>
	</div>
	<div class="card-body">
	<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>No Form</th>
		<th>Hari/Tanggal</th>
		<th>Regu</th>
		<th>Shift</th>
		<th>Waktu</th>
		<th>Nama Pos</th>
		<th>Lokasi</th>
		<th>Petugas</th>
		<th>Jam Masuk</th>
		<th>Jam Keluar</th>
		<th>Keterangan</th>
	</tr>
	<?php 
	$sql = mysqli_query($koneksi,"select *from tb_tugas");
	while($data = mysqli_fetch_array($sql)){
	?>
	<tr>
		
		<td><?php echo $data['no_form'] ?></td>
		<td><?php echo $data['hari'] ?>/ <?php echo date('d-m-Y',strtotime($data['tanggal'])) ?></td>
		<td><?php echo $data['regu'] ?></td>
		<td><?php echo $data['shift'] ?></td>
		<td><?php echo $data['waktu'] ?></td>
		<td><?php echo $data['nama_pos'] ?></td>
		<td><?php echo $data['lokasi'] ?></td>
		<td><?php echo $data['petugas'] ?></td>
		<td><?php echo $data['masuk'] ?></td>
		<td><?php echo $data['keluar'] ?></td>
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