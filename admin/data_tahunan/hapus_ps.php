<?php 
	include "config/koneksi.php";

	$idps = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_ps where id_ps = '$idps'");
?>
<script type="text/javascript">
	alert("Data berhasil di Hapus");
	window.location.href="?page=pm_ps";
</script>