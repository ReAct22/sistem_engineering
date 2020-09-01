<?php
	include "../config/koneksi.php";
?>
<h2 align="center"><img src="asset/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Aprtement Bukit Golf Pondok indah</h2>
<h3 align="center">Data Preventif Maintenance AC Public Area</h3>
<div class="card-body">
		<table class="w3-table w3-striped" border="1">
			<tr>
				<<th>No. Preventif Maintenance</th>
				<th>TANGGAL RENCANA</th>
				<th>TANGGAL REALISASI</th>
				<th>NAMA AC</th>
				<th>LOKASI AC</th>
				<th>NAMA TEKNISI</th>
				<th>PROGRES</th>
				<th>KETERANGAN </th>
			</tr>
			<?php 
		$sql = mysqli_query($koneksi,"select *from pm_acap");
		while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['id_pmac']; ?></td>
				<td><?php echo date('d-m-y', strtotime($data['tanggal_rencana'])); ?></td>
				<td><?php echo date('d-m-y', strtotime($data['tanggal_realisasi'])); ?></td>
				<td><?php echo $data['nama_ac']; ?></td>
				<td><?php echo $data['lokasi_ac']; ?></td>
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