<?php include 'config/koneksi.php'; ?>
<h2 align="center"><img src="img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Aprtement Bukit Golf Pondok indah</h2>
<h3 align="center">PREVENTIF MAINTENANCE FIRE ALARM</h3>
<div class="card-body">
		<table class="w3-table w3-striped" border="1">
			<tr>
			<th>No.</th>
			<th>Periode Preventif</th>
			<th>Lokasi PM</th>
			<th>Nama Unit</th>
			<th>Lokasi Utilitas</th>
			<th>Rencana Perkerjaan</th>
			<th>Realisasi Perkerjaan</th>
			<th colspan="5" style="text-align: center;">Smoke And Heat Detector</th>>
		</tr>

		<tr>
			<th colspan="7"></th>
			<th>Break Glass</th>
			<th>Bell</th>
			<th>Telphone</th>
			<th>Box Hydrant</th>
			<th>Sprinkle</th>

		</tr>
			<?php 
		$sql = mysqli_query($koneksi,"select *from pm_fa");
		while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['id_pmfa'] ?></td>
				<td><?php echo $data['periode'] ?></td>
				<td><?php echo $data['lokasi_pm'] ?></td>
				<td><?php echo $data['nama_unit'] ?></td>
				<td><?php echo $data['lokasi_utilitas'] ?></td>
				<td><?php echo date('d-m-y',strtotime($data['rencana'])) ?></td>
				<td><?php echo date('d-m-y',strtotime($data['realisasi'])) ?></td>
				<td><?php echo $data['break_glass'] ?></td>
				<td><?php echo $data['bell'] ?></td>
				<td><?php echo $data['telphone'] ?></td>
				<td><?php echo $data['box_hydrant'] ?></td>
				<td><?php echo $data['sprinkle'] ?></td>
			</tr>
			<?php 
				}
			?>
		</table>
		<script type="text/javascript">
			window.print();
		</script>
	</div>