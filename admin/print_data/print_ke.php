<?php include '../config/koneksi.php'; ?>
<h2 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Aprtement Bukit Golf Pondok indah</h2>
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