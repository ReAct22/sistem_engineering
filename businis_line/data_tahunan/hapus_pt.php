<?php 
	include "config/koneksi.php";

	$idpt = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_pt where id_pt = '$idpt'");
?>
<script type="text/javascript">
	alert("Data berhasil di Hapus");
	window.location.href="?page=pm_pt";
</script>