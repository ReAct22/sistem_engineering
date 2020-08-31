<?php 
	include "config/koneksi.php";

	$id = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_elektrical where id_pmelektrik = '$id'");
?>
<script type="text/javascript">
	alert("Data berhasil Di hapus");
	window.location.href="?page=3bulan";
</script>