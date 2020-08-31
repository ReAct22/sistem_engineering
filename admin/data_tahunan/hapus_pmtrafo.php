<?php 
	include "config/koneksi.php";

	$idtrafo = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_trafo where id_trafo = '$idtrafo'");
?>
<script type="text/javascript">
	alert("Data berhasil di Hapus");
	window.location.href="?page=pm_trafo";
</script>