<?php 
	include "config/koneksi.php";

	$id = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_mecha where id_mecha = '$id'");
?>
<script type="text/javascript">
	alert("Data berhasil Di hapus");
	window.location.href="?page=pm_mecha";
</script>