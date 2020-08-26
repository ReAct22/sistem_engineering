<?php 
	include "config/koneksi.php";

	$idgeset = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_geset where id_geset = '$idgeset'");
?>
<script type="text/javascript">
	alert("Data berhasil di Hapus");
	window.location.href="?page=pm_geset";
</script>