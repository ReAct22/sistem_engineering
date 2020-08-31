<?php 
	include "config/koneksi.php";

	$id = @$_GET['idli'];

	mysqli_query($koneksi,"delete from dc_listrik where id_listrik = '$id'");
?>
<script type="text/javascript">
	alert("Data berhasil Di hapus");
	window.location.href="?page=pc_listrik";
</script>