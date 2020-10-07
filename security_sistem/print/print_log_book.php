<?php 
	include "../config/koneksi.php";
?>
<div style="margin-top: 70px;">
	
	<h1 align="center"><img src="assets/img/icon.jpg" width="100" height="100" style="margin-left: 30px;">Apartement Bukit Golf Pondok Indah</h1><p>
		<h2 align="center">Data Log Book</h2>
	</p>
	</div>
	<div class="card-body">
	<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>Nomer Log Book</th>
		<th>Nama</th>
		<th>Date</th>
		<th>Document</th>
		<th>Package</th>
		<th>Unit Key</th>
		<th>Inventory Key</th>
		<th>Acces Card</th>
		<th>Car Keys</th>
		<th>Payment</th>
		<th>Message</th>
	</tr>
	<?php 
	$sql = mysqli_query($koneksi,"select *from d_log_book");
	while($data = mysqli_fetch_array($sql)){
	?>
	<tr>
		
		<td><?php echo $data['id_log_book'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><?php echo date('d-m-Y', strtotime($data['tgl'])) ?></td>
		<td><?php echo $data['document'] ?></td>
		<td><?php echo $data['package'] ?></td>
		<td><?php echo $data['unit_key'] ?></td>
		<td><?php echo $data['inventori_key'] ?></td>
		<td><?php echo $data['acces_card'] ?></td>
		<td><?php echo $data['l'] ?></td>
		<td><?php echo $data['payment'] ?></td>
		<td><?php echo $data['message'] ?></td>
	</tr>
	<?php 
		}
	?>
</table>
<script type="text/javascript">
	window.print();
</script>
</div>