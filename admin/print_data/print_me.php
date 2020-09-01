<?php 
	include "../config/koneksi.php";
?>
	<div style="margin-top: 70px;">
	<h1 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Apartement Bukit Golf Pondok Indah</h1><p>
		<h2 align="center">Data Complaine ME</h2>
	</p>
	</div>
	<div class="card-body">
	<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>Nomer Compline</th>
		<th>Nama Tenant</th>
		<th>Tower</th>
		<th>Lantai</th>
		<th>Unit</th>
		<th>Kompline</th>
		<th>Keterangan</th>
	</tr>
	<?php 
	$sql = mysqli_query($koneksi,"select *from co_me");
	while($data = mysqli_fetch_array($sql)){
	?>
	<tr>
		<td><?php echo $data['id_complaine']; ?></td>
		<td><?php echo $data['name_tenant']; ?></td>
		<td><?php echo $data['tower']; ?></td>
		<td><?php echo $data['lantai']; ?></td>
		<td><?php echo $data['unit']; ?></td>
		<td><?php echo $data['complaine']; ?></td>
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
</body>
</html>