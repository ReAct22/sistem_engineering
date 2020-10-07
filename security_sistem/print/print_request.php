<?php 
	include "../config/koneksi.php";
?>
<div style="margin-top: 70px;">
	
	<h1 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Apartement Bukit Golf Pondok Indah</h1><p>
		<h2 align="center">Data Request</h2>
	</p>
	</div>
	<div class="card-body">
	<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>Nomer Request</th>
		<th>Floar</th>
		<th>Unit</th>
		<th>Ext</th>
		<th>Nama</th>
		<th>Company</th>
		<th>Renmark</th>
	</tr>
	<?php 
	$sql = mysqli_query($koneksi,"select *from d_request");
	while($data = mysqli_fetch_array($sql)){
	?>
	<tr>
		
		<td><?php echo $data['id_request'] ?></td>
		<td><?php echo $data['floor'] ?></td>
		<td><?php echo $data['unit'] ?></td>
		<td><?php echo $data['ext'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><?php echo $data['company'] ?></td>
		<td><?php echo $data['renmark'] ?></td>
	</tr>
	<?php 
		}
	?>
</table>
<script type="text/javascript">
	window.print();
</script>
</div>