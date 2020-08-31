<?php 
	include "config/koneksi.php";

	$idstp = @$_GET['id'];
	$idstp = mysqli_query($koneksi,"delete from pm_stp where id_stp = '$idstp'");
?>
<script type="text/javascript">
	alert("Hapus Data berhasil");
	window.location.href="?page=pm_stp";
</script>