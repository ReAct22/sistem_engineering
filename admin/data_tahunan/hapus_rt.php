<?php 
	include "../config/koneksi.php";

	$idrt = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_rt where id_rt = '$idrt'");
?>
<script type="text/javascript">
	alert("Data berhasil di Hapus");
	window.location.href="?page=pm_rt";
</script>