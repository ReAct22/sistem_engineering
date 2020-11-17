<?php 
	include "../config/koneksi.php";
?>
<div style="margin-top: 70px;">
	
	<h1 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Apartement Bukit Golf Pondok Indah</h1><p>
		<h2 align="center">Data Secuirty</h2>
	</p>
	</div>
	<div class="card-body">
	<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>NIK Security</th>
		<th>Nama</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>TMT</th>
		<th>TB</th>
		<th>BB</th>
		<th>NIK KTP</th>
		<th>Alamat</th>
		<th>Agama</th>
		<th>Pendidikan Terakhir</th>
		<th>NO Handphone</th>
		<th>Jabatan</th>
		<th>Status</th>
	</tr>
	<?php 
	$sql = mysqli_query($koneksi,"select *from d_security");
	while($data = mysqli_fetch_array($sql)){
	?>
	<tr>
		
		<td><?php echo $data['nik_security'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><?php echo $data['tempat_lhr'] ?></td>
		<td><?php echo date('d-m-Y', strtotime($data['tgl_lhr'])) ?></td>
		<td><?php echo date('d-m-Y', strtotime($data['tmt'])) ?></td>
		<td><?php echo $data['tb'] ?></td>
		<td><?php echo $data['bb'] ?></td>
		<td><?php echo $data['nik_ktp'] ?></td>
		<td><?php echo $data['alamat'] ?></td>
		<td><?php echo $data['agama'] ?></td>
		<td><?php echo $data['pendidikan'] ?></td>
		<td><?php echo $data['no_tlp'] ?></td>
		<td><?php echo $data['jabatan'] ?></td>
		<td><?php echo $data['status'] ?></td>
	</tr>
	<?php 
		}
	?>
</table>
<script type="text/javascript">
	window.print();
</script>
</div>