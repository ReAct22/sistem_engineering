<?php 
	include "../config/koneksi.php";

	$idtu = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_tu where id_tu = '$idtu'");
?>
<script type="text/javascript">
	alert("Data berhasil di Hapus");
	window.location.href="?page=pm_tu";
</script>