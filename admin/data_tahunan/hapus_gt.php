<?php 
	include "../config/koneksi.php";

	$idgt = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_gt where id_gt = '$idgt'");
?>
<script type="text/javascript">
	alert("Data berhasil di Hapus");
	window.location.href="?page=pm_gt";
</script>