<?php 
	include "../config/koneksi.php";

	$id = @$_GET['id'];

	mysqli_query($koneksi,"delete from dc_air where id_air = '$id'");
?>
<script type="text/javascript">
	alert("Data berhasil Di hapus");
	window.location.href="?page=pc_dcair";
</script>