<?php 
	include "../config/koneksi.php";
	$idcom = @$_GET['id'];
	mysqli_query($koneksi,"delete from co_me where id_complaine = '$idcom'");
?>
<script type="text/javascript">
	alert("Data berhasil Di hapus");
	window.location.href="?page=me";
</script>