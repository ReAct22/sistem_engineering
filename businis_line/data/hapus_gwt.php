<?php 
	include "../config/koneksi.php";

	$idgwt = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_gwt where id_pmgwt = '$idgwt'");
?>
<script type="text/javascript">
	alert("Data berhasil di Hapus");
	window.location.href="?page=6bulan";
</script>